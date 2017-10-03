<html>
<head>
<title>DELETE</title>
     </head>
 	<body bgcolor="lightgreen"><CENTER><H1>DISPLAYING THE RESPECTED EMPLOYEE RECORD</H1>  
         <?php
		  $rn=$_POST['semester'];
          $mysql_port=getenv('S2G_MYSQL_PORT');
          $dbhost="localhost:".$mysql_port;
          $dbuser='root';
          $dbpass='';
          $conn=mysql_connect($dbhost,$dbuser,$dbpass) or die("Connection is Failed");
          mysql_select_db('bookberries');   
          $query_select="select * from book where semester=$rn";
          $result=mysql_query($query_select);
        ?>
<table width="2" height="3" border="3">
<tr>
<th> DEPARTMENT</th>
<th> SEMESTER</th>
<th> SUBJECT</th>
<th> BOOK</th>

</tr>
         <?php ($row=mysql_fetch_array($result,MYSQL_ASSOC)) ?>
               <tr>
               <td> <?php echo $row['department']; ?> </td>
               <td> <?php echo $row['semester']; ?> </td>
               <td> <?php echo $row['subject']; ?> </td>
               <td> <?php echo $row['book']; ?> </td>
              
               </tr>
          <br>
                        <form name="home" action="Home.html">
                        <input type="submit" name="home" value="HOME"></form>
                        <input type="text" name="empid" value="<?php echo $rn; ?>" hidden>
			
			 </form></CENTER>
       </body>
        </html>
