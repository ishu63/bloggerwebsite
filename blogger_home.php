<?php
include('connect.php');
session_start();
if(!$_SESSION["user"])
{
	echo "<script> alert('Please Login First'); </script>";
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=my_login.php">';
}	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>blogger_home</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="ie.css" />
<script type="text/javascript">var clear="images/clear.gif";</script>
<script type="text/javascript" src="unitpngfix.js"></script>
<![endif]-->
</head>
<body>
<!-- BEGIN wrapper -->
<div id="wrapper">
  <!-- BEGIN header -->
  <div id="header">
    <p>
		<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a style="color:white;" href="#">HI!<?php echo $_SESSION["user"];?></a>
		<br><br><br>
		<a style="color:white" href="create.php">Write New One!!</a>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<a style="color:white" href="logout.php">LogOut</a>
	</p>
    <h1><a href="#">Silverlight</a></h1>
    <div class="break"></div>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="blogger_page.php">Blogger Page</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="contact.php">Contact Us</a></li>
    </ul>
    <form action="#">
      <input type="text" name="s" id="s" value="" />
      <button type="submit">Search</button>
    </form>
  </div>
  <!-- END header -->
  <!-- BEGIN body -->
	<div id="body">
		<!-- BEGIN content -->
		<div id="content">
			<?php
				$flag=0;
				$active=0;
				$user=$_SESSION["user"];
				$user_id=$_SESSION["id"];
				$sql="SELECT * FROM blog_master WHERE blogger_id= '$user_id' ORDER BY creation_date DESC";
				$result=mysql_query($sql);
				while($row=mysql_fetch_array($result))
				{
					$flag=1;
					$id1=$row['blogger_id'];
			?>
			<!-- begin post -->
			<div class="post">
				<div class="l"> 
						<?php $image_name=$row['blog_image']; ?>
						<a href="#"><?php echo "<img src='photos/$image_name'>"; ?></a>
						<p><strong><?php echo $row['creation_date']; ?></strong></p>
						<p><strong>Posted by:</strong> <a href="#">
								<?php 
									$sql1="SELECT * FROM blog_master,blogger_info WHERE blogger_info.blogger_id='$id1' && blog_master.blogger_id='$id1'";
									$result1=mysql_query($sql1);
									$row1=mysql_fetch_array($result1);
									echo $row1['blogger_username'];
								?>
						</a></p>
						<p><strong>Categories:</strong> <a href="#"><?php echo $row['blog_category']; ?></a></p>
				</div>
				<div class="r">
						<h2><a href="#"><?php echo $row['blog_title']; ?></a></h2>
						<p><?php echo $row['blog_desc']; ?></p>
						<p class="details"><a  class="link1" href="edit.php?no=<?php echo $row['blog_id']; ?>">Edit &raquo;</a></p>
				</div>
			</div>
			<?php }
				if($flag==0)
				{?>
					<div class="post">
						<h2 class="title">You dont have any posts!</h2>
					</div>
					<?php }?>
			<!-- end post -->
		</div>
		<!-- END content -->
		<!-- BEGIN sidebar -->
		<div id="sidebar">
			<!-- begin about  -->
			<div class="about"> <a href="#"><img src="images/about.jpg" alt="" /></a>
				<p><strong>Ishita Patel</strong><p>&nbsp;</p><p>&nbsp;</p><p>div : A</p><p>&nbsp;</p><p>Roll No. : U13CO009</p></p>
			</div>
			<!-- end about  -->
			<!-- begin categories -->
			<h2>Categories</h2>
				<ul>
					<?php
							include('connect.php');
							$sql="SELECT DISTINCT * FROM blog_master ORDER BY creation_date DESC LIMIT 7";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result))
							{
							?>
							<li><a href="onlysee2.php?blogno=<?php echo $row['blog_category'];?>"><?php echo $row['blog_category'];?></a></li>
							<?php } ?>
				</ul>
				<!-- end categories -->
				<!-- begin archives -->
				<h2>Recent Posts</h2>
				<ul>
					<?php
							include('connect.php');
							$sql="SELECT * FROM blog_master ORDER BY creation_date DESC LIMIT 7";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result))
							{
							?>
							<li><a href="onlysee1.php?blogno=<?php echo $row['blog_id'];?>"><?php echo $row['blog_title'];?></a></li>
							<?php } ?>
				</ul>
				<!-- end archives -->
			</div>
			<!-- END sidebar -->
			<div class="break"></div>
	</div>
  <!-- BEGIN footer -->
  <div id="footer">
    <p>Copyright &copy; 2009 - <a href="#">Website Name</a> &middot; All Rights Reserved | Template by: <a href="http://www.wpthemedesigner.com/">WordPress Designer</a> | Get More <a href="#">Free CSS Templates</a> </p>
  </div>
  <!-- END footer -->
</div>
<!-- END  -->
<div align=center>This template  downloaded form <a href='#'>free website templates</a></div></body>
</html>
