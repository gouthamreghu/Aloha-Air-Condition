<?php
session_start();
include 'db_connect.php';
 if(isset($_SESSION['l_id']))
{
	$l_id=$_SESSION['l_id'];
	//var_dump($l_id);
}
$s="SELECT * FROM  customer WHERE cl_id=$l_id";
		if(!$stmt=mysqli_query($con,$s))
 		{
 			die("prepare statement error1");
		}
		$result=mysqli_fetch_array($stmt);
?>	
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Aloha air conditioning</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Downy Shoes Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/about.css" type="text/css" media="screen" property="" />
	<link rel="stylesheet" href="css/shop.css" type="text/css" media="screen" property="" />
	<link href="css/style7.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
 <!-- <link rel="stylesheet" type="text/css" href="./style.css"> -->
    <style type="text/css">
article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
    display: block;
}
*, *::before, *::after {
    box-sizing: border-box;
}
user agent stylesheet
section {
    display: block;
}
body, html {
    margin: 0;
    padding: 0;
    color: var(--para-color);
    background-color: var(--bg-color);
    font-family: 'Open Sans', sans-serif;
}
body {
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
}
:root {
    --para-color: #616161;
    --heading-color: #232323;
    --bg-border: #ddd;
    --primary-color: #0c5adb;
    --nav-color: #fff;
    --bg-light: #f8f8f8;
    --bg-white: #fff;
    --bg-white-1: #fff;
    --bg-white-3: #fff;
    --gun-color: #fff;
    --gun-color-1: #2d2d2d;
    --border-radius: 8px;
    --bg-color: #fff;
    --footer-para: #afafaf;
    --footer-bg: #2d2d2d;
    --breadcrumb-bg: #e9e9e9;
}
:root {
    --blue: #007bff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #dc3545;
    --orange: #fd7e14;
    --yellow: #ffc107;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #007bff;
    --secondary: #6c757d;
    --success: #28a745;
    --info: #17a2b8;
    --warning: #ffc107;
    --danger: #dc3545;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}
html {
    font-family: 'Open Sans', sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
*, *::before, *::after {
    box-sizing: border-box;
}
*, *::before, *::after {
    box-sizing: border-box;
}
.pb-5, .py-5 {
    padding-bottom: 3rem !important;
}
.pt-5, .py-5 {
    padding-top: 3rem !important;
}
*, *::before, *::after {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.sub-titlehny {
    font-size: 16px;
    font-weight: 700;
    margin-bottom: 12px;
    color: var(--primary-color);
    text-transform: uppercase;
}
h1, h2, h3, h4, h5, h6 {
    margin: 0;
    padding: 0;
    color: var(--heading-color);
    font-family: 'Open Sans', sans-serif;
    font-weight: 600;
}
h6, .h6 {
    font-size: 1rem;
}
h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
}
h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
    margin-bottom: 0.5rem;
}
*, *::before, *::after {
    box-sizing: border-box;
}
user agent stylesheet
h6 {
    display: block;
    font-size: 0.67em;
    margin-block-start: 2.33em;
    margin-block-end: 2.33em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
body, html {
    margin: 0;
    padding: 0;
    color: var(--para-color);
    background-color: var(--bg-color);
    font-family: 'Open Sans', sans-serif;
}
body {
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
}
:root {
    --para-color: #616161;
    --heading-color: #232323;
    --bg-border: #ddd;
    --primary-color: #0c5adb;
    --nav-color: #fff;
    --bg-light: #f8f8f8;
    --bg-white: #fff;
    --bg-white-1: #fff;
    --bg-white-3: #fff;
    --gun-color: #fff;
    --gun-color-1: #2d2d2d;
    --border-radius: 8px;
    --bg-color: #fff;
    --footer-para: #afafaf;
    --footer-bg: #2d2d2d;
    --breadcrumb-bg: #e9e9e9;
}
:root {
    --blue: #007bff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #dc3545;
    --orange: #fd7e14;
    --yellow: #ffc107;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #007bff;
    --secondary: #6c757d;
    --success: #28a745;
    --info: #17a2b8;
    --warning: #ffc107;
    --danger: #dc3545;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}
html {
    font-family: 'Open Sans', sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
*, *::before, *::after {
    box-sizing: border-box;
}
*, *::before, *::after {
    box-sizing: border-box;
}
@media (max-width: 1080px)
h3.hny-title, h3.hny-title.two {
    font-size: 30px;
    line-height: 35px;
}
h3.hny-title, h3.hny-title.two {
    font-size: 34px;
    font-weight: 700;
    line-height: 42px;
    margin-bottom: 20px;
    text-transform: capitalize;
}
h1, h2, h3, h4, h5, h6 {
    margin: 0;
    padding: 0;
    color: var(--heading-color);
    font-family: 'Open Sans', sans-serif;
    font-weight: 600;
}
@media (max-width: 1200px)
h3, .h3 {
    font-size: calc(1.3rem + 0.6vw);
}
h3, .h3 {
    font-size: 1.75rem;
}
h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
}
h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
    margin-bottom: 0.5rem;
}
*, *::before, *::after {
    box-sizing: border-box;
}
user agent stylesheet
h3 {
    display: block;
    font-size: 1.17em;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
ul {
    margin: 0;
    padding: 0;
}
ol, ul, dl {
    margin-top: 0;
    margin-bottom: 1rem;
}
*, *::before, *::after {
    box-sizing: border-box;
}
user agent stylesheet
ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}
.w3l-services1 ul.cont-4 li span.fa {
    color: var(--primary-color);
    margin-right: 12px;
    background: var(--breadcrumb-bg);
    font-size: 10px;
    padding: 8px;
    border-radius: 50%;
    display: inline-block;
}
*, *::before, *::after {
    box-sizing: border-box;
}
.w3l-services1 .cwp4-text ul li {
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 26px;
    color: var(--heading-color);
    margin: 15px 0;
    font-weight: 600;
}
li {
    list-style-type: none;
}
button, input, select, label, li {
    -webkit-appearance: none;
    outline: none;
    font-family: 'Open Sans', sans-serif;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
.mt-5, .my-5 {
    margin-top: 3rem !important;
}
*, *::before, *::after {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.btn-style {
    padding: 12px 35px;
    font-size: 16px;
    line-height: 28px;
    text-transform: capitalize;
    font-weight: 700;
    transition: 0.3s ease-in;
    border-radius: 8px;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    -o-border-radius: 8px;
    -ms-border-radius: 8px;
}

</style>
</head>
<body>
	<!-- banner -->
<div class="banner_top innerpage" id="home">
		<div class="wrapper_top_w3layouts">
			<div class="header_agileits">
				<div class="logo inner_page_log">
					<h1><a class="navbar-brand" href="index1.php"><span>ALOHA</span> <i>AC</i></a></h1>
				</div>
				<div class="overlay overlay-contentpush">
					<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

					<nav>
						<ul>
							<li><a href="index1.php" class="active">Home</a></li>
							<li><a href="about1.php">About</a></li>
							<li><a href="userprofile.php">Account</a></li>
              <li><a href="buyproduct.php">buyproduct</a></li>
              <li><a href="feedback.php">Feedback</a></li>


							<li><a href="distritech.php">Technician</a></li>
							<li><a href="buyhis.php">Buy History</a></li>
							<li><a href="support.php">Support</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
				<!-- cart details -->
					<div class="top_nav_right">
					<div class="shoecart shoecart2 cart cart box_1">
						<form action="viewmycart.php" method="post" >
							<!-- <input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1"> -->
							<button class="top_shoe_cart"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
						</form>
					</div>

				</div>
			</div>
		</div>
		<!-- //cart details -->
		<!-- search -->
		<div class="search_w3ls_agileinfo">
			<div class="cd-main-header">
				<ul class="cd-header-buttons">
					<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
				</ul>
			</div>
			<div id="cd-search" class="cd-search">
				<form action="#" method="post">
					<input name="Search" type="search" placeholder="Click enter after typing...">
				</form>
			</div>
		</div>
		<!-- //search -->
		<div class="clearfix"></div>
		<!-- /banner_inner -->
		<div class="services-breadcrumb_w3ls_agileinfo">
			<div class="inner_breadcrumb_agileits_w3">

				<ul class="short">
					<li><a href="index1.php">Home</a><i>|</i></li>
					<li><a href="about1.php">About</li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>



  <section class="w3l-services1">
    <div id="content-with-photo4-block" class="py-5">
      <div class="container py-md-5 py-3">
        <div class="cwp4-two row">
          <div class="cwp4-text col-lg-6">
            <h6 class="sub-titlehny"></h6>
            <h3 class="hny-title">Profile</h3><br>
          <!--   <p>Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad
              minim veniam, quis nostrud.
            </p> -->

            <ul class="cont-4">
              <li><span class="fa fa-check"></span>Name :<?php echo $result['c_name'];?></li>
              <li><span class="fa fa-check"></span>Phone No :<?php echo $result['c_phone'];?> </li>
              <li><span class="fa fa-check"></span>Email :<?php echo $result['c_email'];?></li>
              <li><span class="fa fa-check"></span>Address :<?php echo $result['c_address'];?> </li>
              

            </ul>
              <div class="buttons mt-5">
            <a href="edituser.php?cl_id=<?php echo $l_id;?>" class="btn btn-style btn-success">Edit</a>
            <a href="deleteuser.php?cl_id=<?php echo $l_id;?>" class="btn btn-style btn-danger">Delete</a>

          </div>
         
          </div>
          <div class="cwp4-image col-lg-6 pl-lg-5 mt-lg-0 mt-5">
            <img src="images/5.jpg" class="img-curve img-fluid" alt="" width=100% />
          </div>
        </div>

     </div>
 </div>
</section>

	</div>
	
						
	<?php
	include 'ufooter.php';
	?>
