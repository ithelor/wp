<!DOCTYPE html>
<html lang=en>
<head>
	<meta charset=UTF-8>
	<title>Fictive Company Blog | a blog showcasing the übercoolness of HTML5 &amp; CSS3</title>
	<!--[if lt IE 9]><script src=http://html5shiv.googlecode.com/svn/trunk/html5.js></script><![endif]-->
	<link href=styles.css rel=stylesheet />
	<!--[if lt IE 9]><link href=ie.css rel=stylesheet /><![endif]-->
</head>

<body>
<header>
	<?php
		include 'header.php';
		include 'links.php';
	?>
</header>

<div class=clearfix>
	<div id=content>
	
	<?php
		include 'posts.php';
	?>
	</div>
	
	<aside>
	<?php
		include 'stayintouch.php';
		include 'blogroll.php';
	?>
	</aside>
</div>

<footer class=clearfix>
	<?php	
		include 'popularposts.php';
		include 'recentcomments.php';
		include 'companybio.php';
	?>	
	<p class=copyright>Copyright &copy; 2010 <strong>Fictive Company</strong>. All Rights Reserved.</p>
</footer>

</body>
</html>