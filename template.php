<?php namespace pg_control_pi; ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"] .  "/admin/common.php"); ?>
<?php
// This is simple module manifest used by RACHEL to display info. 
// Used in rachel-index.php, rachel-admin.php, and rachel-stats.php
// To extend $templ for module specific messages, place in messages.php.

$lang1 = getlang();
$templ = array();
if(isset($dir)) { 
	$tmpl_dir = $dir ;
} else {
	$tmpl_dir = dirname(__FILE__);
}


include "messages.php";

// hide_index is for special case modules that may not need a display to students
$templ["hide_index"] = "yes";
$templ["index_loc"] = "{$tmpl_dir}/index.php";
$templ["engine_loc"] = dirname(__FILE__) . "/control_pi.php";
$web_path = str_replace($_SERVER['DOCUMENT_ROOT'], '', dirname(__FILE__));
$templ["engine_web_loc"] = $web_path . "/control_pi.php";
$templ["js_loc"] =  dirname(__FILE__) . "/control_pi.js";
$templ["title"] = "Control Pi";
$templ["description"] = "As a server, the raspberry pi must be shutdown correctly to avoid disk corruption.  The raspberry pi also lacks an internal clock. It is therefore necessary to set the date and time from your client."; 
$templ["img_uri"] = "{$tmpl_dir}/logo.png";
$templ["dirname"] = "control_pi";
$templ["module_type"] = "admin_module";

// Override with language translations where appropriate / when available
// Note that we don't place english as default here so that we can have partial translations.
switch ($lang1) {
	case ("es"):
		$templ["title"] = "Control de la Pi"; 
		$templ["description"] = "Porque es servidor, es necesario a apagar la pi corectamente.  También, la Pi no tiene reloj aldentro. Entonces, es necesario a establecer la fecha de su cliente.";
		break;
	// could add new language translations here as extra cases
}

?>
