<?php
if(isset($_POST['user_Email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "gabaggrey@gmail.com";
    $email_subject = "Your email subject line";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
    // validation expected data exists
    if(!isset($_POST['fullname']) ||
        !isset($_POST['user_Email']) ||
        !isset($_POST['message_title']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
    $fullname = $_POST['fullname']; // required
    $email_from = $_POST['user_Email']; // required
    $message_title = $_POST['message_title']; // required
    $message = $_POST['message']; // required

    $email_message = "Form details below.\n\n";
 
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "Full Name: ".clean_string($fullname)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Message title: ".clean_string($message_title)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 

 
<?php
 header("Location: thankyou.php"); 
}
?>