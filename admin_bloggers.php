<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>admin_bloggers</title>
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
		<a style="color:white" href="#">Hii!!Ishu63.</a>
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
					<table align="center" >
						<tr>
							<th width="73"><center>No.</center></th>
							<th width="200"><center>Blogger UserName</center></th>
							<th width="200"><center>Date</center></th>
							<th width="200"><center>Allow or not</center></th>
						</tr>
						<?php
							include('connect.php');
							$sql="SELECT * FROM blogger_info WHERE bologger_is_active=0";
							$result=mysql_query($sql)or die('could not connect');
							while($row=mysql_fetch_array($result))
							{
						?>
						<tr>
							<td height="30" align="center"><?php $rr++; echo $rr; ?></td>
							<td align="center"><?php echo $row['blogger_username'];?></td>
							<td align="center"><?php echo $row['blogger_updated_date'];?></td>
							<td align="center"><a href="allow_blogger.php?id=<?php echo $row['blogger_id'];?>">allow</a></td>
						</tr>
						<?php } ?>
					</table>
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
