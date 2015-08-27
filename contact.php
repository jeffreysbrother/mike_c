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

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $phone = trim($_POST["phone"]);
        $message = trim($_POST["message"]);

        if ($name == "" OR $email == "" OR $message == ""){
          $error_message = "Please specify a value for the NAME, EMAIL, and MESSAGE fields";
        }

        if (!isset($error_message)) {
          foreach( $_POST as $value ){
            if(stripos($value, 'Content-Type:') !== FALSE ){
              $error_message = "There was a problem with the information submitted.";
            }
          }
        }

        if (!isset($error_message) && $_POST["address"] != "") {
          $error_message = "Your form submission has an error. Please try again.";
        }

        require_once("inc/class.phpmailer.php");
        $mail = new PHPMailer();

        if (!isset($error_message) && !$mail->ValidateAddress($email)){
          $error_message = "Please specify a valid email address.";
        }

        if (!isset($error_message)) {
          $email_body = "";
          $email_body = $email_body . "Name: " . $name . "<br />";
          $email_body = $email_body . "Email: " . $email . "<br />";
          $email_body = $email_body . "Message: " . $message;

          $mail->SetFrom($email, $name);
          $address = "michaelchambersmusic@gmail.com";
          $mail->AddAddress($address, "jeffreysbrother");
          $mail->Subject    = "jeffreysbrother: Contact Form Submission | " . $name;
          $mail->MsgHTML($email_body);

          if($mail->Send()){
              header("Location: " localhost/ "contact/?status=thanks");
              exit;
          } else {
            $error_message = "There was a problem sending the email: " . $mail->ErrorInfo;
          }
        }
      }

    ?>

    <?php

    $pageTitle = "contact.php";
    $pageDescription = "Contact me for music, photo, or video projects.";
    $fbURL = "http://jeffreysbrother.com/contact.php";
    ?>

      <?php
        if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>

          <div class="container">
                <h1>Thanks for the email!</h1>
          </div>
        <?php } else { ?>



                    <?php
                      if (isset($error_message)){
                        echo '
                        <div>
                        <p><strong>' . $error_message . '</strong></p></div>';
                      }
                    ?>

                    <form class="form-horizontal" method="post" action="contact/">
                      <fieldset>
                                <!-- <legend class="text-center header">//Contact</legend> -->
                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-1 text-center">
                                    </span>
                                    <div class="col-md-8">
                                        <input id="name" name="name" type="text" placeholder="Name" class="form-control" value="<?php if(isset($name)) { echo htmlspecialchars($name); } ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-1 text-center">
                                    </span>
                                    <div class="col-md-8">
                                        <input id="email" name="email" type="text" placeholder="Email" class="form-control" value="<?php if(isset($email)) { echo htmlspecialchars($email); } ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-1 text-center">
                                    </span>
                                    <div class="col-md-8">
                                        <textarea class="form-control" id="message" name="message" placeholder="Enter your message here." rows="7"> <?php if (isset($message)) { echo htmlspecialchars($message); } ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group" style="display: none;">
                                    <span class="col-md-1 col-md-offset-1 text-center">
                                    </span>
                                    <div class="col-md-8">
                                        <textarea class="form-control" id="address" name="address" placeholder="Humans: please leave this field blank." rows="7"></textarea>
                                    </div>
                                </div>

                                <div class="form-group last-paragraph">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                    </div>
                                </div>
                            </fieldset>
                    </form>

      <?php } ?>






  </div>
