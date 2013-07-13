<?php
  require_once('recaptchalib.php');
  $privatekey = "6LcRGOQSAAAAAPrWD5CbB8PHHz0A4UCjQLtKTvqA";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");

    // redirect to page with error message
    header( 'Location: index.php?error= ) ;

  } else {
    // Your code here to handle a successful verification

    
  }
  ?>