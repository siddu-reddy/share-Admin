<?php
$username= $_POST['admin_id'];
$password= $_POST['admin_psw']; 
$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);
mysql_connect("localhost","root","");
mysql_select_db("id5097464_shareyourproblem");
$result=mysql_query("select * from admin where admin_id='$username' and admin_psw='$password'")
or die("failed to query database".mysql_error());
$row=mysql_fetch_array($result);
if($row['admin_id'] == $username && $row['admin_psw'] == $password){
	echo"Login success!!!!! ".$row['admin_id'];
}
else{
	echo"Failed to login";
}
?>