<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:login.php");
} else {
?>
<!doctype html>
<html>
<head>
<title>BookBerries</title>
<meta charset="utf-8">
        <LINK REL="SHORTCUT ICON"
       HREF="images/image.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <style>

          #bgcolor {
	background:white;
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
  div.background {
  background:url(choose_barber_shop.jpg);
  border: 2px;
}

div.transbox {
  margin: 30px;
  opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: white;
}
.image { 
   position: relative; 
   width: 100%; /* for IE 6 */
}

h2 { 
   position: absolute; 
   top: 100px; 
   left: 0; 
   width: 100%; 
   text-align: top;
}


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
<ul class="nav navbar-nav navbar-right" style = "padding-left:2px;"> <li><a href="logout.php" style="color:black;background:white;border-style:;border-width:3px;">Log Out</a></li>
</ul>
     <ul class="nav navbar-nav navbar-right" style = "padding-left:2px;">
        <li><a href="book.html" style="color:black;background:white;border-style:;border-width:3px;">Get Book</a></li>
       
</ul><ul class="nav navbar-nav navbar-right" style = "padding-left:2px;"> <li><a href="index.html" style="color:black;background:white;border-style:;border-width:3px;">Home</a></li>
</ul>
          </b>

    </div>
  </div>
          </nav>

</div>
<br><br><br><br><br><br><br><br>
<center>
<h2>Welcome, 
<?=$_SESSION['sess_user'];?>! <br><br>

<div class = "row text-center">
			<h3 style="color:black"><a href = "selectdept.php" style="color:black;border-style:solid;border-width:4px;padding: 15px;margin: 15px;text-decoration:none;">GET STARTED</a></h3><br><br>
      </div>

</h3></h2><br><br><br><br><br><br>
</div></div>
<div class = "col-sm-4">
		</div>


</div></center>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
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
</body>
</html>
<?php
}
?>


