<!DOCTYPE html>
<?php
include('connect.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>LogIn</title>
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Marvel' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Marvel|Delius+Unicase' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css' />
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
		<a style="color:white" href="#">login</a>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<a style="color:white" href="signup.php">Signup</a>
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
		<br>
        <h2><p style="text-align:center">LogIn<p></h2>
      </div>
      <!-- end post -->
      <div id="comments">
        <div class="box" id="respond">
          <div class="buffer">
            <form action="log.php" method="post" id="loginform">
				<br>
				<center>
				<p>
					<label for="username" style="font-size:15px"><b>Username :</b></label>
					<input type="text" name="username" id="username" value="" size="30" tabindex="1" />
				</p>
				<br>
				<p>
					<label for="password" style="font-size:15px"><b>Password :&nbsp;</b></label>
					<input type="password" name="password" id="password" value="" size="30" tabindex="2" />
				</p>
				<br>
				<p>
					<button name="submit" type="submit" id="submit" style="align:center">LogIN</button>
				</p>
				</center>
            </form>
          </div>
        </div>
      </div>
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
