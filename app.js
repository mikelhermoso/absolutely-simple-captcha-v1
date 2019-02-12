$(document).ready(function() {
    // Disable #buttomForm
    $("#p-checked").hide();
    $( "#buttomForm" ).prop( "disabled", true );
        
    $checked = false;
    $("#captchaCheck").click(function(){
        /*alert("x");*/
        $checked = true;
        checkCaptcha($checked);
    });
    function wait(ms) {
        var date = new Date();
        var date2 = null;
        do { date2 = new Date(); }
            while(date2-date < ms);
        }
    function checkCaptcha($checked) {
        wait(1000);
        // Enable #buttomForm
        if ($checked == true) {
            $("#p-checked").fadeIn(500);
            $( "#buttomForm" ).prop( "disabled", false );
        }
    }
});