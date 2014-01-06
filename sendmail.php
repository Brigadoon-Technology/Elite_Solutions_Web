<?php
  require_once('recaptchalib.php');
  $privatekey = "6Ldy0sISAAAAALzgr9e1iwzRGlXXsmrrEyaWgBC-";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } 

else { 
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

if (!isset($_REQUEST['name'])) {
header("Location: http://www.elitesolutionscomputerservice.com/feedback.html");
}

if (!isset($_REQUEST['email'])) {
header("Location: http://www.elitesolutionscomputerservice.com/feedback.html");
}

if (!isset($_REQUEST['email'])) [
header("Location: http://www.elitesolutionscomputerservice.com/feedback.html");
}

if (!isset($_REQUEST['message'])) {
header("Location: http://www.elitesolutionscomputerservice.com/feedback.html");
}

elseif (empty($email) || empty($message)) {
header("Location: http://www.elitesolutionscomputerservice.com/error.html");
}

mail("info@elitesolutionscomputerservice.com","Contact Me Form Submission",
$message, "From: $email");
header( "Location: http://www.elitesolutionscomputerservice.com/thankyou.html");
}
?>

