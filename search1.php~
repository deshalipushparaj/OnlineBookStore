<!DOCTYPE html>
<html lang="en">
<head>
  <title>BookBerries</title>
          <LINK REL="SHORTCUT ICON"
       HREF="images/image.jpg">
  <meta charset="utf-8">
       
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="css/style.css">
                        <link href="css/main.css" rel="stylesheet" type="text/css" />

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <style>

          #bgcolor {
	background: black;
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
.select-style {
  box-shadow: 0px 0px 0px 0px #7a0920;
	height:50px;
    width: 300px;
    border-radius: 3px;
    overflow: hidden;
    background: #7a0920;
	color:white;
font-size:150%;

}

.select-style select {
    padding: 5px 8px;
    width: 130%;
    border: none;
    box-shadow: none;
    background: transparent;
    background-image: none;
    -webkit-appearance: none;
}

.select-style select:focus {
    outline: none;
}
.red {
  background-color: #cecece;
  box-shadow: 0px 0px 0px 0px #cecece;
  color:black;
width:200px;
height:50px;
}

.red:hover {
  background-color: #cecece;
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
        <span class="icon-bar" style="color:white;"><b>&#9776;</b></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>

      <a class="navbar-brand" href="index.php" style="background:white;color:white;padding-bottom:80px;border-radius:15px;"><img src = "images/bookberries.png" class = "img-responsive" style = "width:300px;height:300;"/></a>
    </div>
    <div class="collapse navbar-collapse" style = "padding-top:25px;" id="myNavbar"><h5 style="font-size:100%">
      <ul class="nav navbar-nav navbar-right" style = "padding-left:2px;">
    <li><a href="contact.html" style="color:black;background:;border-style:;border-width:1px;" target = "_blank">Contact</a></li>
		</ul>
      <ul class="nav navbar-nav navbar-right" style = "padding-left:20px;">
	 
	<li><a href="login.php" style="color:black;background:;border-style:;border-width:1px;">Log in</a></li>
	   <li><a href="signup.html" style="color:black;background:;border-style:;border-width:3px;">Sign up</a></li>
		
            </ul><ul class="nav navbar-nav navbar-right" style = "padding-left:2px;">
        <li><a href="selectdept.php" style="color:black;background:white;border-style:;border-width:3px;">Get Book</a></li>
       
</ul><ul class="nav navbar-nav navbar-right" style = "padding-left:2px;"> <li><a href="index.html" style="color:white;background:black;border-style:;border-width:3px;">Home</a></li>
</ul>
          </b>
    </div>
  </div>
          </nav></div>
<br><br>
   <div class="pic-wrapper">

  <figure class="pic-1"></figure>
  <figure class="pic-2"></figure>
  <figure class="pic-3"></figure>
  <figure class="pic-4"></figure>
<div class="image">         <br><br><br><br>  <br><br><br>
     
<br><br>
      
	<div class = "row text-center" style = "color:black;">

		<div class = "col-sm-3">
		</div>
<div class = "col-sm-6" style = "background:white;border-radius:2px;box-shadow:2px 2px 5px 10px #e6e6e6;"><br>
                  		<b><h1 style = "font-size:200%;color:black;">Subject</h1></b><br><br>
<form action="fetchbooks.php" method="post">

<?php
$department=$_POST['department'];
			  $semester=$_POST['semester'];
          $mysql_port=getenv('S2G_MYSQL_PORT');
          $dbhost="localhost:".$mysql_port;
          $dbuser='root';
          $dbpass='';
          $conn=mysql_connect($dbhost,$dbuser,$dbpass) or die("Connection is Failed");
          mysql_select_db('Bookberries'); 
            
        $result = mysql_query("SELECT subject FROM book WHERE department='$department' and semester='$semester'") OR DIE(mysql_error());
        ?>
       
           <h4 style="color:black;size:200%;position:center;">Select Subject :</h4><br><br><br><br>
 <div class="select-style" style="position:absolute;right:25%;top:45%;">

<select name="subject">
	<?php
             while($row=mysql_fetch_array($result,MYSQL_ASSOC))
              {
           ?>
	<option value="<?php echo $row['subject']; ?>"><?php echo $row['subject']; ?></option> 
		<?php } ?>	</SELECT>

</div><BR><BR>
           
<input type = "submit" id = "submit" name = "submit" value = "FETCH BOOKS" class = "red">
                        <input type="text" name="department" value="<?php echo $department; ?>" hidden>
                        <input type="text" name="semester" value="<?php echo $semester; ?>" hidden>
      </form><br><br><br>

        </div>
			
		
<br><br><br>
            
            
            </div>

      </div></div>
		<div class = "col-sm-4">
		</div>
	</div>
</div>
     
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		
     
            </div>
      </body>
      </html>
