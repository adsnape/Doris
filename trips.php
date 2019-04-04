<!DOCTYPE HTML>
<?php 
include ("funcs.php");
include ("conn.php");

?>
<!--
	Gallery
-->
<html>
	<head>
		<title>Trip Index</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/gallmain.css" />
	</head>
	<body>

		<!-- Header-->
			<header id="header">
				<div class="inner">
					<div class="content">
						<h1>Doris</h1>
						<h2>On her days<br />
						playing out</h2>
						<a href="#" class="button big alt"><span>Show me</span></a>
					</div>
					<a href="#" class="button hidden"><span>Show me</span></a>
				</div>
			</header >
<?php include ("menu.php");?>
		<!-- Main -->
			<div id="main">
				<div class="inner">
					<div class="columns">
						<?php
						
						for ($x = 0; $x <= 4; $x++) {
                        $qry = mysql_query("SELECT * FROM justpics WHERE D_trip = ".$x);
						while ($row = mysql_fetch_assoc($qry)){
							echo ('<div class="image fit">
								<a href="detail1.html"><img src="images/'.$row['D_location'].'" alt="'.$x.'" />'.$row['D_location'].'</a>
							</div>');
							}
						}
						?>
						<!-- Column 1 (horizontal, vertical, horizontal, vertical) -->
							
							

					</div>
				</div>
			</div>

		<!-- Footer -->
			<?php include ("footer.php");?>

		<!-- Scripts -->
			<script src="galleryassets/js/jquery.min.js"></script>
			<script src="galleryassets/js/skel.min.js"></script>
			<script src="galleryassets/js/util.js"></script>
			<script src="galleryassets/js/main.js"></script>

	</body>
</html>