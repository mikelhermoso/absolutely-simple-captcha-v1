<?php
/**
 * CUSTOM CAPTCHA  
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Absolutely simple captcha v1</title>
        <!-- JQUERY CDN-->
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <!-- FONTAWESOME CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" type = "text/css" href="style.css">
        <script src="app.js"></script>
    </head>
    <body>
    <form action="#" id="contactForm" method="post">
        <p><input type="text" name="Name" placeholder="Name" /></p>
        <div class="captcha">
            <div id="captchaCheck" class="captcha-checkbox"><p id="p-checked" class="p-checked"><i class="fas fa-check"></i></p></div><!-- &#10004; -->
            <div class="contant-captcha-text"><p>Im not a robot</p></div>
        </div>
        <p><button id="buttomForm" type="submit">SUBMIT</button></p>
    </form>
</body>
</html>