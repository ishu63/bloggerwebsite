<?php
include('connect.php');
$blogid=$_GET["blogid"];
$sql="UPDATE blog_master SET blog_is_active='1' WHERE blog_id='$blogid'";
$result=mysql_query($sql)or die('ERROR');
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin_blogs.php">'; 
?>