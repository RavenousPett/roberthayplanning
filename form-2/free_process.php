<?php

// Rich P - reCAPTCHA code
require_once('../recaptchalib.php');
$privatekey = "6LeWCPUSAAAAAN5sjix2-cFi9g45rK607CwcW8KS";
$resp = recaptcha_check_answer ($privatekey,
                            $_SERVER["REMOTE_ADDR"],
                            $_POST["recaptcha_challenge_field"],
                            $_POST["recaptcha_response_field"]);

if (!$resp->is_valid) {
// What happens when the CAPTCHA was entered incorrectly
die ("The reCAPTCHA wasn't entered correctly. Please go back in your browser and try it again.");
 // ."(reCAPTCHA said: " . $resp->error . ")");
} else {
// do nothing, carry on.
}
// end reCAPTCHA

// URL: www.freecontactform.com
// Version: FreeContactForm Free V1.3
// Copyright (c) 2011 Stuart Cochrane <stuartc1@gmail.com>

// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
// IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
// FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
// AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
// LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
// OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
// THE SOFTWARE.

if(isset($_POST['email'])) {
	
	include 'free_settings.php';
	
	function died($error) {
		echo "Sorry, but there were error(s) found with the form you submitted. ";
		echo "These errors appear below.<br /><br />";
		echo $error."<br /><br />";
		echo "Please go back and fix these errors.<br /><br />";
		die();
	}
	
	if(
		!isset($_POST['email']) ||
		!isset($_POST['enquiry'])||
		!isset($_POST['name'])
		) {
		died('We are sorry, but there appears to be a problem with the form you submitted.');		
	}
	
	$full_name = $_POST['name']; // required
	$email_from = $_POST['email']; // required
	$telephone = $_POST['phone']; // not required
	$comments = $_POST['enquiry']; // required
	
	$error_message = "";
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(preg_match($email_exp,$email_from)==0) {
  	$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
  if(strlen($full_name) < 2) {
  	$error_message .= 'Your Name does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
  	$error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  
  if(strlen($error_message) > 0) {
  	died($error_message);
  }
	$email_message = "Form details below.\r\n";
	
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:","href");
	  return str_replace($bad,"",$string);
	}
	
	$email_message .= "Full Name: ".clean_string($full_name)."\r\n";
	$email_message .= "Email: ".clean_string($email_from)."\r\n";
	$email_message .= "Telephone: ".clean_string($telephone)."\r\n";
	$email_message .= "Message: ".clean_string($comments)."\r\n";

@mail($email_to, $email_subject, $email_message, $headers);
header("Location: $thankyou");
?>
<script>location.replace('<?php echo $thankyou;?>')</script>
<?php
}
die();
?>