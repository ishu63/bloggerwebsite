<?php
include('connect.php');
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM blogger_info WHERE blogger_username = '$username' AND blogger_password = '$password'";
$result=mysql_query($sql) or die('mysql error');

if(!mysql_fetch_array($result))
{
echo "<script> alert('Wrong username or password'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=my_login.php">'; 
//header('location:login.php?rc=1');
//alert('wrong username or password');
//echo "wrong username or password";
}
else
{
//echo "hello" . $username;
$sql="SELECT * FROM blogger_info WHERE blogger_username = '$username' AND blogger_password = '$password'";
$result=mysql_query($sql) or die('mysql error');
$row=mysql_fetch_array($result);
echo "<script> alert('Welcome $username'); </script>";
$_SESSION["user"] = $username;
$_SESSION["id"] = $row['blogger_id'];
//print_r($_SESSION);
if($username=='ishu63')
{
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin_home.php">'; 
}
else
{
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=blogger_home.php">'; 
}
}

?>