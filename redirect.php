<?php
include_once('recaptchalib.php');
// your secret key
$secret = "recaptcha-secret-key";
// check secret key
$reCaptcha = new ReCaptcha($secret);
if ($_REQUEST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_REQUEST["g-recaptcha-response"]
    );
}

// Where to redirect to after captcha is solved 

if ($response != null && $response->success) {
		header('Location: /index.html');
	}
else
{
	echo " You are not Human";
}

?>