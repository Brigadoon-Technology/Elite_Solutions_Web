<?php
  require_once('recaptchalib.php');
  $privatekey = "6Ldy0sISAAAAALzgr9e1iwzRGlXXsmrrEyaWgBC-";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("You entered the letters of the image incorrectly. Please go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } 

else { 
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$to =  "info@elitesolutionscomputerservice.com";
$headers .= 'From: <info@elitesolutionscomputerservice.com>' . "\r\n";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

if (!isset($_POST['name'])) {
header("Location: http://www.elitesolutionscomputerservice.com/feedback.html");
}
elseif (!isset($_POST['email'])) {
header("Location: http://www.elitesolutionscomputerservice.com/feedback.html");
}
elseif (!isset($_POST['email'])) {
header("Location: http://www.elitesolutionscomputerservice.com/feedback.html");
}
elseif (!isset($_POST['message'])) {
header("Location: http://www.elitesolutionscomputerservice.com/feedback.html");
}
else empty($email)) || empty($message) || empty($name) || empty($subject){
header("Location: http://www.elitesolutionscomputerservice.com/error.html");
}
mail($headers, $to, $subject, $name, $email, $message);
header( "Location: http://www.elitesolutionscomputerservice.com/thankyou.html");
}
?>