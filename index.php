<!DOCTYPE HTML>

<?php 
include ("conn.php");
include ("funcs.php");?>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php
	$vanname = "Doris";
?>
<html>
	<head>
		<title><?php echo($vanname);?> the Brick</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<!-- Header -->
			<header id="header">
				<div class="logo"><span>A VW T25 named </span><a href="index.html"><?php echo($vanname);?> </a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>
<?php include ("menu.php");?>

			<section id="banner" class="bg-img" data-bg="<?php echo(fetchpic(1,1));?>">
				<div class="inner">
					<header>
						<h1>This is <?php echo($vanname);?></h1>
					</header>
				</div>
				<a href="#one" class="more">Learn More</a>
			</section>

		<?php
         for ($i = 2; $i <=4 ; $i++) {
         echo ("<section id='s".$i."' class='wrapper post bg-img' data-bg='".fetchpic($i,1)."'><div class='inner'><article class='box'><header><h2>".fetchtit(1)."</h2><p>01.01.2017</p></header><div class='content'><p>".fetchtxt($i-1,1)."</p></div><footer><a href='text.php?d=h&p=".$i."' class='button alt'>Learn More</a></footer></article</div><a href='s".($i+1) ."' class='more'>Learn More</a></section>");
			}?>

<?php include ("footer.php");?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>