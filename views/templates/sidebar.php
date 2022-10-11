<?php 
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[1];

?>

<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<h1 id="colorlib-logo">
                <a href="index.html">
                    <img src="../../assets/img/icons/logo-clickmobile.png" class="img-responsive" alt="">
                </a>
            </h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li class="<?php if ($first_part=="index.php") {echo "colorlib-active"; } else  {echo "noactive";}?>"><a href="index.php">Home</a></li>
                    <li ><a href="https://ad.clickmobile.id/">Login</a></li>
					<li ><a href="https://ad.clickmobile.id/">Sign Up</a></li>
					<li class="<?php if ($first_part=="about.php") {echo "colorlib-active"; } else  {echo "noactive";}?>"><a href="about.php">About Us</a></li>
					<li class="<?php if ($first_part=="services.php") {echo "colorlib-active"; } else  {echo "noactive";}?>"><a href="services.php">Our Service</a></li>
					<li class="<?php if ($first_part=="contact.php") {echo "colorlib-active"; } else  {echo "noactive";}?>"><a href="contact.php">Contact Us</a></li>
				</ul>
			</nav>



		</aside>