<html>
<head>
<title>EMPLOYEE  DETAILS</TITLE>
</head>
<body bgcolor="lavendar">
   <Form name="display1" METHOD="POST" ACTION="display1.php">
    <center><u><h1>DISPLAYING THE EMPLOYEE RECORDS BY EMPLOYEE ID</H1></u></center>
     <font face="ALGERIAN" size=5 color=blue>
<?php
          $mysql_port=getenv('S2G_MYSQL_PORT');
          $dbhost="localhost:".$mysql_port;
          $dbuser='root';
          $dbpass='';
          $conn=mysql_connect($dbhost,$dbuser,$dbpass) or die("Connection is Failed");
          mysql_select_db('Bookberries'); 
            
          $query_select="select subject,semester from book order by semester";
          $result=mysql_query($query_select);
        ?><BR>
	SELECT THE EMPLOYEE ID TO BE displayed:	
	<select name="semester">
	<?php
             while($row=mysql_fetch_array($result,MYSQL_ASSOC))
              {
           ?>
	<option value="<?php echo $row['subject']; ?>"><?php echo $row['semester']; ?></option> 
		<?php } ?>	</SELECT>
		<input type="submit" name="display" value="DISPLAY">				
                        		<a href="index.php">HOMEPAGE</a>
                        		
  </font>
 </body>
</form>
</html>

