<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Home</title>
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
				<br><br><br><br><br>
				<a style="color:white" href="my_login.php">login</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a style="color:white" href="signup.php">Signup</a>
			</p>
			<h1><a href="#">Silverlight</a></h1>
			<div class="break"></div>
			<ul>
				<li><a href="#">Home</a></li>
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
		<?php
	
		?>
		<div id="body">
			<!-- BEGIN content -->
			<div id="content">
				<!-- begin post -->
				<?php
				include('connect.php');
				//session_start();
				//$user=$_SESSION["user"];
				$sql="SELECT * FROM blog_master WHERE blog_is_active=1 ORDER BY creation_date DESC";
				$result=mysql_query($sql);
				while($row=mysql_fetch_array($result))
				{
					$id1=$row['blogger_id'];
				?>
				<div class="post">
					<div class="l"> 
						<?php $image_name=$row['blog_image']; ?>
						<a href="#"><?php echo "<img src='photos/$image_name'>"; ?></a>
						<p><strong><?php echo $row['creation_date']; ?></strong></p>
						<p><strong>Posted by:</strong> <a href="blogger_page.php">
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
					</div>
				</div>
				<?php } ?>
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
							$sql="SELECT DISTINCT * FROM blog_master ORDER BY creation_date DESC WHERE blog_is_ative=1 LIMIT 7";
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
							$sql="SELECT * FROM blog_master ORDER BY creation_date DESC WHERE blog_is_ative=1 LIMIT 7";
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
		<!-- END body -->
		<!-- BEGIN footer -->
		<div id="footer">
		</div>
		<!-- END footer -->
	</div>
	<!-- END  -->
	<div align=center>This template  downloaded form 
		<a href='#'>free website templates</a>
	</div>
</body>
</html>
