<?php namespace pg_control_pi; ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"] .  "/admin/common.php"); ?>
<?php
require_once("template.php");
$currlang = getlang();

if (isset($_POST['shutdown'])) {
    exec("sudo /sbin/shutdown now", $exec_out, $exec_err);
    if ($exec_err) {
        echo $templ['shutdown_failed'];
    } else {
        echo $templ['restart_ok'];
    }
    exit;
} else if (isset($_POST['reboot'])) {
    exec("sudo /sbin/shutdown -r now", $exec_out, $exec_err);
    if ($exec_err) {
        echo $templ['restart_failed'];
    } else {
        echo $templ['restart_ok'];
    }
    exit;
} else if (isset($_REQUEST['setPiDate'])) {
    $clientDate = $_REQUEST['clientDate'] ;
    ini_set('display_errors', '0');
    $position = 1;
    try {
        exec("sudo /bin/date -s '@{$clientDate}'", $exec_out, $exec_err);
    } catch (Exception $ex) {
        error_log($ex);
        header("HTTP/1.1 500 Internal Server Error");
        exit;
    }
    header("HTTP/1.1 200 OK");
    exit;
}

if (file_exists("/usr/bin/raspi-config") || file_exists("/etc/fake-raspi-config")) { # for testing on non-raspi systems
    setPiTimezone();
    $sys_date = date('Y/m/d H:i:s');
    echo "
        <div style='margin: 50px 0 50px 0; padding: 10px; border: 1px solid blue; background: aliceblue;'>
            <h4>$templ[current_date] <span id='serverDate'>$sys_date</span></h4>
        $templ[date_blurb]
        <button id='setPiDateButton'>$templ[setPiDate]</button>
        </div>
    ";
    echo "
        <div style='margin: 50px 0 50px 0; padding: 10px; border: 1px solid red; background: #fee;'>
        <form action='{$templ['engine_web_loc']}' method='post'>
        <input type='submit' name='shutdown' value='$templ[shutdown_system]' onclick=\"if (!confirm('$templ[confirm_shutdown]')) { return false; }\">
        <input type='submit' name='reboot' value='$templ[restart_system]' onclick=\"if (!confirm('$templ[confirm_restart]')) { return false; }\">
        </form>
        $templ[shutdown_blurb]
        </div>
    ";
}

?>
<?php
    // setPiTimezone()...This will do nothing if not raspberry pi.
    // The sole reason this exists is to make date('Y/m/d H:i:s'); return local time correctly when common.php has been included (for getlang() usually.)
    // This, and all references to it can probably be deleted if the set timezone in common is removed or replaced by the code below.
    // Code maintainers for common.php will have to decide though because i'm sure they had a reason for the setting.

function setPiTimezone() {
  if (file_exists("/usr/bin/raspi-config") || file_exists("/etc/fake-raspi-config")) { # for testing on non-raspi systems
    if (file_exists("/etc/timezone")) {
        $f_contents = file_get_contents("/etc/timezone");
        if ($f_contents) {
                $timezone = preg_replace('~[\r\n]+~', '', $f_contents);
        }
    }
    date_default_timezone_set($timezone);
    return true;
  }
}

?>

