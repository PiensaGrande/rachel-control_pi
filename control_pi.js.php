<script>
// onload
$(function() {

 // ajax background call, adjust as needed to submit form but stay on admin page.
 // button click calls this to set date on pi. note that a sudoer change has to be made as well.
    $("#setPiDateButton").on('click', function() {
        var d = new Date();
        var n = Math.round(d.getTime()/1000);
        $.ajax({
            url: "<?php echo $templ['engine_web_loc']; ?>?setPiDate=1&clientDate="+n,
            success: function(data){
                alert("<?php echo $templ['setPiDate_ok']; ?>");
                    $("#serverDate").html(d.getFullYear()+"/"+('0'+(d.getMonth()+1)).slice(-2)+"/"+('0'+d.getDate()).slice(-2)+" "+('0'+d.getHours()).slice(-2)+":"+('0'+d.getMinutes()).slice(-2)+":"+('0'+d.getSeconds()).slice(-2));
            $("#serverDate").css('color','green');
            },
            error: function(){
              alert("<?php echo $templ['setPiDate_failed']; ?>");
            }
        });
    });
}); // end onload
</script>
