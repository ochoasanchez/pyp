<?php
if (isset($_REQUEST['submitted'])) {
  $name = $_REQUEST['name'];
  $company = $_REQUEST['company'];
  $email = $_REQUEST['email'];
  $description = $_REQUEST['description'];
  $from = "From: Ochoasanchez.com "; //Site name
  // Change this to your email address you want to form sent to
  $to = "juanluis182@gmail.com";
  $subject = "Contact information for " . $name . "";

  $message = "Message from " . $name . "\n
  Company: " . $company . "\n
  Email: " . $email ."\n
  Description: " . $description ."";

  mail($to,$subject,$message,$from);
  }
?>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thanks!</title>

    <!-- MDL -->
    <!--<link rel="stylesheet" href="css/materialize.min.css" />-->

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,700,900' rel='stylesheet' type='text/css'>



    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <div class="container">
    <div class="col-xs-12" style="padding:1em;">
      <img src="img/current.png" class="img-responsive center-block" />
    </div>
    <div class="col-md-12 text-center" style=";margin-top:4em;padding:4em 0;">
      <p class="light" style="font-size:2em;">Thank you! Your information has been sent.<br /> I will be contacting you soon.</p>
      <a href="index.php"><button class="btn bold" style="color:#212121;"><span class='glyphicon glyphicon-home'></span>HOME</button></a>
    </div>
  </div>
</body>
</html>
