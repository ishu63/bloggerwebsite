<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Create_page</title>
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
			<a style="color:white;" href="#">HI!<?php session_start(); echo $_SESSION["user"];?></a>
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
      <!-- begin post -->
      <div class="first post">
        <center><h2>Update Your post</h2></center>
      </div>
	  <div id="comments">
        <div class="box" id="respond">
			<div class="buffer">
				<div style="clear: both;">&nbsp;</div>
				<?php
					include('connect.php');
					//session_start();
					$user=$_SESSION["user"];
					$blog_no=$_GET["no"];
					$sql="SELECT * FROM blog_master WHERE blog_id= '$blog_no'";
					$result=mysql_query($sql);
					$row=mysql_fetch_array($result)
				?>
				<form method="post">
				<br>
				<p>
					<label style="font-size:15px"><b>Blog Title :</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" name="title" value ="<?php echo $row['blog_title'];?>" size="30" tabindex="1" />
				</p>
				<br>
				<p>
					<label style="font-size:15px"><b>Blog Category :</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input name="related" value="<?php echo $row['blog_category'];?>"  size="30" tabindex="2" />
				</p>
				<br>
				<p>
					<label style="font-size:15px"><b>Main Content :</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<textarea name="content"  tabindex="3" rows="20" cols="70"  tabindex="3"><?php echo $row['blog_desc'];?></textarea> 
				</p>
				<br>
				<p>
					<label  style="font-size:15px"><b>Image :</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="file" name="image"  value="" tabindex="4" />
				</p>
				<br>
				<p>
					<center><button value="save" name="save" type="submit" id="submit" style="align:center">UpLoad</button></center>
				</p>
            </form>
			
			<?php
				if(isset($_POST["save"]))
				{
					$title=$_POST['title'];
					$related=$_POST['related'];
					$content=$_POST['content'];
					$sql="UPDATE blog_master SET blog_title= '$title' , blog_category= '$related' , blog_desc= '$content' , updated_date=now() WHERE blog_id= '$blog_no'";
					$result=mysql_query($sql) or die('could not connect');
					echo "<script> alert('Your blog is updated');</script>";
					echo '<META HTTP-EQUIV="Refresh" Content="0; URL=blogger_home.php">'; 
					//echo "blog is edited";
					//header("location:create.php");
				}
			?>
          </div>
        </div>
      </div>
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
  <!-- END body -->
  <!-- BEGIN footer -->
  <div id="footer">
  </div>
  <!-- END footer -->
</div>
<!-- END  -->
<div align=center>This template  downloaded form <a href='#'>free website templates</a></div></body>
</html>
