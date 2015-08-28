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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<body>

  <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Michael Chambers</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class= <?php if($pageTitle == "index.php"){ echo "active"; }?>><a href="index.php">Home</a></li>
            <li class= <?php if($pageTitle == "media.php"){ echo "active"; }?>><a href="media.php">Media</a></li>
            <li class= <?php if($pageTitle == "concerts.php"){ echo "active"; }?>><a href="concerts.php">Concerts</a></li>
            <li class= <?php if($pageTitle == "biography.php"){ echo "active"; }?>><a href="biography.php">Biography</a></li>
            <li class= <?php if($pageTitle == "contact.php"){ echo "active"; }?>><a href="contact.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->

      </div>
    </nav>
