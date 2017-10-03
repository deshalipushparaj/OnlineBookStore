<!doctype html>
<html>
<head>
 <title>BookBerries</title>
       <LINK REL="SHORTCUT ICON"
       HREF="images/image.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
          #bgcolor {
	background: url(css/book7.jpg);
}
	#uberbar {
		position: fixed;
		background: white;
		width: 100%;
		z-index: 99;
}
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>


</script>
<title>Bookberries</title>
   
            
        
    </style>
</head>
<body>
<div id="bgcolor">
<div id="uberbar">
<nav class="navbar">

  <div class="container-fluid">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style = "padding-top:25px;">
        <span class="icon-bar" style="color:black;"><b>&#9776;</b></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
  <a class="navbar-brand" href="index.php" style="background:white;color:white;padding-bottom:80px;border-radius:15px;"><img src = "images/bookberries.png" class = "img-responsive" style = "width:300px;height:300;"/></a>
    </div>
    <div class="collapse navbar-collapse" style = "padding-top:25px;" id="myNavbar"><h5 style="font-size:100%">
      <ul class="nav navbar-nav navbar-right" style = "padding-left:2px;">
    <li><a href="contact.html" style="color:black;background:;border-style:;border-width:1px;" target = "_blank">Contact</a></li>
		</ul>
     <ul class="nav navbar-nav navbar-right" style = "padding-left:2px;">
        <li><a href="book.html" style="color:black;background:white;border-style:;border-width:3px;">Get Book</a></li>
       
</ul><ul class="nav navbar-nav navbar-right" style = "padding-left:2px;"> <li><a href="index.html" style="color:black;background:white;border-style:;border-width:3px;">Home</a></li>
</ul>
          </b>

    </div>
  </div>
          </nav></div>
<br><br><br><br><br><br>
  <div class = "container">
	<div class = "row text-center" style = "color:black;">
		<div class = "col-sm-4">
		</div>
<div class = "col-sm-4" style = "background:white;border-radius:2px;box-shadow:2px 2px 5px 10px #e6e6e6;"><br>
<h3>Login Form</h3><br><br><br>
<form action="" method="POST">
Username: <input type="text" name="user"><br /><br><br><br>
Password: <input type="password" name="pass"><br /><br><br><br>	
<input type="submit" value="Login" name="submit" />
</form></div></div>
<div class = "col-sm-4">
		</div>


</div>
<br><br><br>
<h3 style="color:white;">
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$con=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('Bookberries') or die("cannot select DB");

	$query=mysql_query("SELECT * FROM student WHERE username='".$user."' AND password='".$pass."'");
echo $query;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($query))
	{
	$dbusername=$row['username'];
	$dbpassword=$row['password'];
	}

	if($user == $dbusername && $pass == $dbpassword)
	{
	session_start();
	$_SESSION['sess_user']=$user;

	/* Redirect browser */
	header("Location: member.php");
	}
	} else {
	echo "Invalid username or password!";
	}

} else {
	echo "All fields are required!";
}
}
?></h3>
<footer class="container-fluid text-center" style = "background:rgba(0,0,0,0.8);">
      
  <div class = "row">
  <div class = "col-sm-1">
  </div>
  <div class = "col-sm-2">
  <center>
  <a href = ""><img src = "images/facebook_icon.png" style = "width:30px;height:30px;padding-bottom:1px;"/></a>
  </center>
  </div>
  <div class = "col-sm-2">
  <center>
  <a href = ""><img src = "images/instagram_icon.png" style = "width:30px;height:30px;padding-bottom:1px;"/></a>
  </center>
  </div>
  <div class = "col-sm-2">
  <center>
  <a href = ""><img src = "images/linkedin_icon.png" style = "width:30px;height:30px;padding-bottom:1px;"/></a>
  </center>
  </div>
  <div class = "col-sm-2">
  <center>
  <a href = ""><img src = "images/google_plus_icon.png" style = "width:30px;height:30px;padding-bottom:1px;"/></a>
  </center>
  </div>
  <div class = "col-sm-2">
  <center>
  <a href = ""><img src = "images/twitter.png" style = "width:30px;height:30px;padding-bottom:1px;"/></a>
  </center>
  </div>
  <div class = "col-sm-3">
  </div>
  </div><br><br>
  <div class = "row" style = "color:white;">
  <center>
		Copyright © BOOKBERRIES - All Rights Reserved.
  </center>
      </div>
</footer>
</html>
