<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$message = trim($_POST["message"]);

if ($name == "" OR $email == "" OR $message == ""){
echo "You must first specify a value for the NAME, EMAIL, and MESSAGE fields";
exit;
}

foreach( $_POST as $value ){
if(stripos($value, 'Content-Type:') !== FALSE ){
  echo "There was a problem with the information submitted.";
  exit;
}
}

if ($_POST["address"] != "") {
echo "Your form submission has an error.";
exit;
}

require_once("inc/class.phpmailer.php");
$mail = new PHPMailer();

//this is not working!
if (!$mail->ValidateAddress($email)){
echo "You must specify a valid email address.";
exit;
}

$email_body = "";
$email_body = $email_body . "Name: " . $name . "<br />";
$email_body = $email_body . "Email: " . $email . "<br />";
$email_body = $email_body . "Message: " . $message;

$mail->SetFrom($email, $name);
$address = "jeffreysbrother@gmail.com";
$mail->AddAddress($address, "jeffreysbrother");
$mail->Subject    = "jeffreysbrother: Contact Form Submission | " . $name;
$mail->MsgHTML($email_body);

if(!$mail->Send()){
echo "There was a problem sending the email: " . $mail->ErrorInfo;
exit;
}

//redirect after we send the email
header("Location: contact.php?status=thanks");
exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Michael Chambers Music</title>
  <meta name="description" content= "Music" >
  <meta name="author" content="Michael Chambers">
  <meta property="og:title" content="Michael Chambers Film Composer"/>
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="http://www.michaelchambersmusic.com/"/>
  <meta property="og:site_name" content="Michael Chambers Film Composer"/>
  <meta property="og:description" content="Michael Chambers is a Film Composer, Songwriter, and Producer"/>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>


  <div class="main_container">
    <div class="title1"><span>Michael</span> CHAMBERS</div>

    <nav>
      <a href="index.html">Home</a>
      <a href="media.html">Media</a>
      <a href="concerts.html">Concerts</a>
      <a href="biography.html">Biography</a>
      <a href="contact.php">Contact</a>
    </nav>

<h2>Contact</h2>


<?php
if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
        <h1>Thanks for the email!</h1>
<?php } else { ?>


            <!-- <p>I&rsquo;d love to hear from you! Complete the form to send me an email.</p> -->

            <form method="post" action="contact.php">

                        <p>
                            <input type="text" name="name" id="name" placeholder="name">
                        </p>

                        <p>
                            <input type="text" name="email" id="email" placeholder="email">
                        </p>

                        <p>
                            <textarea name="message" id="message" placeholder="message me!"></textarea>
                        </p>

                        <p style="display: none;">
                            <input type="text" name="address" id="address">
                            <p style="display: none;">Humans: please leave this field blank.</p>
                        </p>
                <input type="submit" value="Send">
            </form>

<?php } ?>
