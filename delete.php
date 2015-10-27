<?php
include('connect.php');
$blogid=$_GET["blogid"];
$sql="DELETE FROM blog_master WHERE blog_id = '$blogid'";
$result=mysql_query($sql)or die('ERROR');
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin_home.php">'; 
?>