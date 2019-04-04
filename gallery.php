<!DOCTYPE HTML>
<?php include ("conn.php");
include ("funcs.php");?>


<!--
	Visualize by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Doris' Portfolio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/gallerymain.css" />
	</head>
	<body>
    <?php $result = mysql_query("SELECT * FROM justpics");
			?>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<span class="avatar"><img src="images/avatar.jpg" alt="" /></span>
					  <h1>This is <strong>Doris</strong>, a 40 year old VW camper</h1>
						<ul class="icons">
							<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
							<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
					</header>
				<?php include ("menu.php");?>
				<!-- Main -->
					<section id="main">

						<!-- Thumbnails-->
							<section class="thumbnails">
                                <!-- two images per div, three divs per section-->
                                <?php
								$result = mysql_query("SELECT * FROM justpics");
								$num_im = mysql_num_rows($result)/3;
								$num_row = 0;echo("<div>");
								while($row = mysql_fetch_array($result))
		  								{$num_row++;
										if($num_row%$num_im==0){echo "</div><div>";} 
											echo('
												<a href="images/'.$row['D_location'].'">
													<img src="images/'.$row['D_location'].'" alt="" />
													<h3>'.$row['D_title'].'</h3>
												</a>');
											}
											echo("</div>");
										
									?><!-- Thumbnails -->
								</div>

							</section>

					</section>

				<!-- Footer -->
					<footer id="footer">
						<p>&copy; Untitled. All rights reserved. Design: <a href="http://templated.co">TEMPLATED</a>. Demo Images: <a href="http://unsplash.com">Unsplash</a>.</p>
					</footer>

			</div>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.poptrox.min.js"></script>
<script type="text/javascript" src="assets/js/skel.min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>


		<!-- Scripts >
			<script src="galleryindexassets/js/jquery.min.js"></script>
			<script src="galleryindexassets/js/jquery.poptrox.min.js"></script>
			<script src="galleryindexassets/js/skel.min.js"></script>
			<script src="galleryindexassets/js/main.js"></script-->
            

	</body>
</html>