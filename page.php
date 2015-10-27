<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Demo Page</title>
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
		<a style="color:white" href="my_login.php">login</a>
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
        <h2>Sample Page</h2>
        <p>Ristiedonec nisl tellus pellus vel lobortor cursus quis semper sapibus curabitudin. Massacondimentum amet intesque ullamcorper facilis congue dolor amet ligula justo non.</p>
        <p><img class="alignright" src="images/200x150.gif" width="200" height="150" alt="" /></p>
        <p>Consequeet tor massa et tellentesque nasce et laorem mauristiquam mus sed. Odiopartur quisque nisl pellus dictus auctor ant quis odio nam sed.</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur quam augue, vehicula quis, tincidunt vel, varius vitae, nulla. Sed convallis orci. Duis libero orci, pretium a, <a href="#">convallis quis</a>, pellentesque a, dolor. Curabitur vitae nisi non dolor vestibulum consequat.</p>
        <p>Aliquatpretium antesque accumst euismod nunc vitae cras interdum sed donec ipsum. Integetnunc cumst vel gravida sit accumst lobortor congue accumst estas et. Laciliswisi cursus sed sociis curabitur intesque orci phasellus purus estibulum sagittis. Nuncut congue consequat ligula consecteturpis et ipsum sed id id augue. Curabitaesit orci laoreet libero vestas sit faucibus iacus curabitudin vestas tellus.</p>
        <blockquote>
          <p>Proin vestibulum. Ut ligula. Nullam sed dolor id odio volutpat pulvinar. Integer a leo. In et eros at neque pretium sagittis. Sed sodales lorem a ipsum suscipit gravida. Ut fringilla placerat arcu. Phasellus imperdiet. Mauris ac justo et turpis pharetra vulputate.</p>
        </blockquote>
        <p><cite><a href="#">Quote Source</a></cite></p>
        <p>Inquisquet urna proin vel volutpat velit tellus vivamus nas nam ac. Atauctortor ligula nulla volutpat laorem a sed curabitur et congue enim. Faciniacurabitudin estibulum montesque consequam sent phasellentesque feugiat tristibulum et curabitur aliquat. Vestpartur ligula urna eu curabitae egestassa nibh elit.</p>
        <h3>An Ordered List</h3>
        <ol>
          <li>Vestibulum in mauris semper tortor interdum ultrices.</li>
          <li>Sed vel lorem et justo laoreet bibendum. Donec dictum.</li>
          <li>Etiam massa libero, lacinia at, commodo in, tincidunt a, purus.</li>
          <li>Praesent volutpat eros quis enim blandit tincidunt.</li>
          <li>Aenean eu libero nec lectus ultricies laoreet. Donec rutrum, nisi vel egestas ultrices, ipsum urna sagittis libero, vitae vestibulum dui dolor vel velit.</li>
        </ol>
        <p>Inquisquet urna proin vel volutpat velit tellus vivamus nas nam ac. Atauctortor ligula nulla volutpat laorem a sed curabitur et congue enim. Faciniacurabitudin estibulum montesque consequam sent phasellentesque feugiat tristibulum et curabitur aliquat. Vestpartur ligula urna eu curabitae egestassa nibh elit.</p>
        <h3>An Unordered List</h3>
        <ul>
          <li>Vestibulum in mauris semper tortor interdum ultrices.</li>
          <li>Sed vel lorem et justo laoreet bibendum. Donec dictum.</li>
          <li>Etiam massa libero, lacinia at, commodo in, tincidunt a, purus.</li>
          <li>Praesent volutpat eros quis enim blandit tincidunt.</li>
          <li>Aenean eu libero nec lectus ultricies laoreet. Donec rutrum, nisi vel egestas ultrices, ipsum urna sagittis libero, vitae vestibulum dui dolor vel velit.</li>
        </ul>
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
