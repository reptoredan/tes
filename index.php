<?php
session_start();
$username=$_SESSION['username'];
$isLoggedIn=$_SESSION['isLoggedIn'];

if($isLoggedIn !='1')
	{
		session_destroy();
		header('location: login.php');
	}
?>

<!-- Selamat Datang <?php echo $username;?>
<a href="logout.php">Logout</a>;
 -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">







    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>


    
  </head>
  <body>


   <header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="../" class="navbar-brand">Bootstrap</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li class="active">
          <a href="../getting-started/">Getting started</a>
        </li>
        <li>
          <a href="../css/">CSS</a>
        </li>
        <li>
          <a href="../components/">Components</a>
        </li>
        <li>
          <a href="../javascript/">JavaScript</a>
        </li>
        <li>
          <a href="../customize/">Customize</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://expo.getbootstrap.com" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Expo');">Expo</a></li>
        <li><a href="http://blog.getbootstrap.com" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Blog');">Blog</a></li>
      </ul>
    </nav>
  </div>
</header>

<div class="container">
    <div class="rot">
    
</div>
    <h1>Hello, world!</h1>


    <!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    Action <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>

   
  </body>
</html>