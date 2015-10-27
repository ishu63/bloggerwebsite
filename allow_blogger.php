<?php
include('connect.php');
$id=$_GET["id"];
$sql="UPDATE blogger_info SET blogger_is_active='1' WHERE blogger_id='$id'";
$result=mysql_query($sql)or die('ERROR');
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin_bloggers.php">'; 
?>