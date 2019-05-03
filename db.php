<?php  
$name=$_POST['name'];
$branch=$_POST['branch'];
$college=$_POST['college'];
$phno=$_POST['phno'];
$con=mysql_connect("localhost","root","");
$dbs=mysql_select_db("details",$con);

$sql="insert into  register (NAME,BRANCH,COLLEGE,PHNO) VALUES ('$name','$branch','$college','$phno')";

mysql_query($sql);

 

mysql_close($con);

?> 