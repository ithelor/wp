
<!DOCTYPE html>
<html lang=en>
<link href=styles.css rel=stylesheet />

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

<?php include 'pages.php'; ?>

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
				