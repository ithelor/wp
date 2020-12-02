<!DOCTYPE html>
<html lang=en>
<link href=styles.css rel=stylesheet />

<?php

		$content_per_page = 5;

		$temp_array=array();
		$array_final=array();
		$step = 0; $page_num = 0;

		$i = 10;
		for($i; $i >= 1; $i--)
		{
			$step++;
			$row = '
			<!DOCTYPE html>
			<html lang=en>
			<link href=styles.css rel=stylesheet />
			<article>
				<header>
					<div class=time>
						<div class=year>2010</div>
						<div class=date>16<span>apr</span></div>
					</div>
					<h1>Sample Post ' .$i. '</h1>
					<div class=comments>38</div>
				</header>
				<p>Curabitur ut congue hac, diam turpis maecenas id vestibulum nulla nisl, libero leo, ut scelerisque maecenas id, ornare magna orci. In blandit sed et sagittis non, ullamcorper nec metus felis vel, vestibulum a in sit. Leo non odio fermentum lectus cubilia, mauris aliquam nunc eu neque ac sollicitudin. Tincidunt nisl morbi nulla rutrum, adipisicing tellus integer nunc massa id quis. Cursus sagittis massa ac sociis interdum, sem cursus, enim aptent sit, semper mauris, quam urna sed quis vivamus&hellip;</p>
				<footer>
					<em>Written by:</em> <strong>Author Name</strong>
					<span class=newLine><em>Tags:</em> <a class=tags href=#>cool</a><a class=tags href=#>modern</a><a class=tags href=#>hype-friendly</a></span>
					<a class=button href=#>Continue Reading</a>
				</footer>
			</article>
			</html>';
			array_push($temp_array, $row);

			if ($step == $content_per_page)
			{
				// $array_final=array(
				// 	$page_num => $temp_array,
				// );
				array_push($array_final, $temp_array);
				$page_num++;
				$temp_array=array();
			}
		}
		array_push($array_final, $temp_array);

		//var_dump($array_final);
		if ($i % $content_per_page != 1) $page_num++;
		
		// $array_final=array(
		// 	$page_num => $temp_array,
		// );
		
		for($loop_counter = 0; $loop_counter < $page_num; $loop_counter++)
		{
			$content = implode("", $array_final[$loop_counter]);
			$file = fopen("pages/".($loop_counter+1).".php", "w");
			fwrite($file, $content); fclose($file);
		}

		// $newrows =  file_get_contents("pages/" . $files[0]);
		// $newrows .=  '<!--  Add here  -->';
		
		// $file = 'home.php';
		// $FileSourse = file_get_contents($file);
		// $FileSourse = str_replace('<!--  Add here  -->', $newrows, $FileSourse);
		// file_put_contents($file, $FileSourse);
		
		// $i = 5;
		// for($i; $i >= 1; $i--)
		// echo '
		// <article>
		// 	<header>
		// 		<div class=time>
		// 			<div class=year>2010</div>
		// 			<div class=date>16<span>apr</span></div>
		// 		</div>
		// 		<h1>Sample Post ' .$i. '</h1>
		// 		<div class=comments>38</div>
		// 	</header>
		// 	<p>Curabitur ut congue hac, diam turpis maecenas id vestibulum nulla nisl, libero leo, ut scelerisque maecenas id, ornare magna orci. In blandit sed et sagittis non, ullamcorper nec metus felis vel, vestibulum a in sit. Leo non odio fermentum lectus cubilia, mauris aliquam nunc eu neque ac sollicitudin. Tincidunt nisl morbi nulla rutrum, adipisicing tellus integer nunc massa id quis. Cursus sagittis massa ac sociis interdum, sem cursus, enim aptent sit, semper mauris, quam urna sed quis vivamus&hellip;</p>
		// 	<footer>
		// 		<em>Written by:</em> <strong>Author Name</strong>
		// 		<span class=newLine><em>Tags:</em> <a class=tags href=#>cool</a><a class=tags href=#>modern</a><a class=tags href=#>hype-friendly</a></span>
		// 		<a class=button href=#>Continue Reading</a>
		// 	</footer>
		// </article> ';
?>
	
</html>