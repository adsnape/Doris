<!DOCTYPE HTML>
<?php include ("conn.php");
include("funcs.php");
?>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php
$pagetype = $_GET["d"]; $pageid = $_GET["p"];
switch ($pagetype){
	case "d":
	$pagetypetext = "Data";
	break;
	case "h":
	$pagetypetext = "History";
	break;
	default:
	$pagetypetext = "Unknown";
	break;
}

?>
<html>
	<head>
		<title><?php echo($pagetypetext); ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.html"><span>Doris' </span><?php echo($pagetypetext); ?> </a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>


<?php include ("menu.php");?>

		<!-- Content -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
			<section id="post" class="wrapper bg-img" data-bg="<?php echo(fetchpic(1,$pageid)); ?>">
				<div class="inner">
					<article class="box">
						<header>
							<h2><?php echo(fetchtit($pageid)); ?></h2>
							<p>01.01.2017</p>
						</header>
						<div class="content">
                        <?php                      
						for ($i = 1; $i < 4; $i++){
							echo ("<p>".fetchtxt($i, $pageid)."</p>");
						}
						 ?>	
                        
							

							
						</div>
						<footer>
							<ul class="actions">
								<li><a href="#" class="button alt icon fa-chevron-left"><span class="label">Previous</span></a></li>
								<li><a href="#" class="button alt icon fa-chevron-right"><span class="label">Next</span></a></li>
							</ul>
						</footer>
					</article>
				</div>
			</section>

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