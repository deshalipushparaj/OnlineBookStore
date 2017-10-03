<html>
<head>
<title>EMPLOYEE  DETAILS</TITLE>
</head>
<body bgcolor="lavendar">
   <Form name="display1" METHOD="POST" ACTION="search.php">
    <center><u><h1>DISPLAYING THE EMPLOYEE RECORDS BY EMPLOYEE ID</H1></u></center>
     <font face="ALGERIAN" size=5 color=blue>
<?php
          $mysql_port=getenv('S2G_MYSQL_PORT');
          $dbhost="localhost:".$mysql_port;
          $dbuser='root';
          $dbpass='';
          $conn=mysql_connect($dbhost,$dbuser,$dbpass) or die("Connection is Failed");
          mysql_select_db('Bookberries'); 
            
          $query_select="select department from book";
          $result=mysql_query($query_select);
	$query_select1="select semester from book";
          $result1=mysql_query($query_select1);
        ?><BR>
	SELECT THE EMPLOYEE ID TO BE displayed:	
	<select name="department">
	<?php
             while($row=mysql_fetch_array($result,MYSQL_ASSOC))
              {
           ?>
	<option value="<?php echo $row['department']; ?>"><?php echo $row['department']; ?></option> 
		<?php } ?>	</SELECT>
<select name="semester">
	<?php
             while($row1=mysql_fetch_array($result1,MYSQL_ASSOC))
              {
           ?>
	<option value="<?php echo $row1['semester']; ?>"><?php echo $row1['semester']; ?></option> 
		<?php } ?>	</SELECT>
		<input type="submit" name="display" value="DISPLAY">				
                        		<a href="http://localhost/emp/Home.html">HOMEPAGE</a>
                        		
  </font>
 </body>
</form>
</html>

