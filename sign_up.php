<?php
include('connect.php');
$username=$_POST['username'];
$password=$_POST['password'];
$date = date("Y-m-d");
$sql="INSERT INTO blogger_info(blogger_username,blogger_password,blogger_creation_date,blogger_updated_date) VALUES ('$username','$password','$date','$date')";
$result=mysql_query($sql);

//if(mysql_fetch_array($result) == FALSE)
//{
//echo "<script> alert('please signup again there was some error'); </script>";
//echo '<META HTTP-EQUIV="Refresh" Content="0; URL=sign_up.php">'; 
//header('location:login.php?rc=1');
//alert('wrong username or password');
//echo "wrong username or password";
//}
//else
//{
//echo "hello" . $username;
echo "<script> alert('Welcome $username'.'    '.'Now you can login and enjoy!!'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=my_login.php">'; 
//}

?>