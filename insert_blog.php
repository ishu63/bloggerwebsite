<?php
include('connect.php');
session_start();
if(!$_SESSION["user"])
{
echo "please login" ;
}
$userid=$_SESSION["id"];

$title=$_POST['blogtitle'];
$related=$_POST['blogcategory'];
$content=$_POST['blogdesc'];
$content = stripslashes(nl2br($content));
//echo $content;
$image_name = $_FILES['blogimg']['name'];
$image_type = $_FILES['blogimg']['type'];
$image_size = $_FILES['blogimg']['size'];
$image_tmp_name= $_FILES['blogimg']['tmp_name'];
move_uploaded_file($image_tmp_name,"photos/$image_name");

$sql = "INSERT INTO blog_master VALUES('', '$userid', '$title' , '$related' , '$content', '$image_name', '0', now(), now())";
$result=mysql_query($sql) or die('mysql error');
echo "<script>alert('Your Post has recorded successfully');</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=blogger_home.php">'; 
echo " " . $sql . "<br>";
?>