<?php
session_start();
include 'db_connect.php';
//include 'header.php';
 if(isset($_SESSION['l_id']))
{
    $l_id=$_SESSION['l_id'];
    //var_dump($l_id);
}

?>
 	<?php
  	if (isset($_POST['card'])) 
{
	$name=$_POST['name'];
    $landmark=$_POST['landmark'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $phone=$_POST['phone'];
    $status='credit/debit';

   
    $s="INSERT INTO `credit_debit`(`crl_id`, `cr_name`, `cr_phone`, `cr_landmark`, `cr_town`, `cr_address`,`cr_status`) VALUES ($l_id,'$name','$phone','$landmark','$city','$address','$status')";
	
	// var_dump($s);
	if (mysqli_query($con,$s)) 
	{
		
		$id=mysqli_insert_id($con);
		// var_dump($id);
		// $cr="UPDATE credit_debit SET ad_quantity='$add',ad_total='$price1' WHERE ad_id=$c_id";
		
					header("Location:credit.php?cr_id=".$id);
						
					
	}
	
}
if (isset($_POST['cash'])) 
{
	$name=$_POST['name'];
    $landmark=$_POST['landmark'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $phone=$_POST['phone'];
    $status='cash on delivery';

   
    $s="INSERT INTO `credit_debit`(`crl_id`, `cr_name`, `cr_phone`, `cr_landmark`, `cr_town`, `cr_address`,`cr_status`) VALUES ($l_id,'$name','$phone','$landmark','$city','$address','$status')";
	
	// var_dump($s);
	if (mysqli_query($con,$s)) 
	{
		
		//$id=mysqli_insert_id($con);
		// var_dump($id);
		// $cr="UPDATE credit_debit SET ad_quantity='$add',ad_total='$price1' WHERE ad_id=$c_id";
		$v="UPDATE addcart SET ad_status='payed' WHERE adl_id=$l_id";
    $result1=$con-> query($v);
if($result1)
{
	echo '<script type ="text/JavaScript">';  
							echo 'alert("Successfully Payed")';  
							echo '</script>'; 
}
		
					//header("Location:credit.php?cr_id=".$id);
						
					
	}
	
}
?>
<?php
if (isset($_POST['add'])) {
    $quantity=$_POST['quan'];
    $price=$_POST['price'];

    $c_id=$_POST['c_id'];

    $add=($quantity+1);
    $price1=($price*$add);
    //echo $ad_id;
    $q="UPDATE addcart SET ad_quantity='$add',ad_total='$price1' WHERE ad_id=$c_id";
    //var_dump($q);
$result=$con->query($q);

}
if (isset($_POST['sub'])) {
    $quantity=$_POST['quan'];
    $price=$_POST['price'];

    $c_id=$_POST['c_id'];

    $sub=($quantity-1);
    $price1=($price*$sub);
    $q="UPDATE addcart SET ad_quantity='$sub',ad_total='$price1' WHERE ad_id=$c_id";
$result=$con->query($q);
// if($result)
// {
//           echo "<script> window.location.replace('viewmycart.php') </script>";

// }
}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Checkout</title>
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
	<link rel="stylesheet" href="css/shop.css" type="text/css" media="screen" property="" />
	<link href="css/style7.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Owl-carousel-CSS -->
	<link rel="stylesheet" type="text/css" href="css/checkout.css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
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
							<li><a href="contact1.php">Contact</a></li>
						</ul>
					</nav>
				</div>
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
				<!-- cart details -->
				<div class="top_nav_right">
					<div class="shoecart shoecart2 cart cart box_1">
						<form action="#" method="post" class="last">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">
							<button class="top_shoe_cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
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
					<li>Check Out</li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>
	
 <!--  <form action="paysuss.php" method="post">
  <input type="text" name="pids" value="<?php echo $adp_id=$row['adp_id'];?>" >
  <input type="submit" name="pay">
</form> -->
	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="privacy about">
				<h3>Chec<span>kout</span></h3><?php
				$sql7="SELECT * FROM addcart WHERE adl_id=$l_id and ad_status='not payed'";
				//var_dump($sql7);
  $count1 = mysqli_query($con, $sql7);
                            $numcount1= mysqli_num_rows($count1);
                            ?>

				<div class="checkout-right">
					<h4>Your shopping cart contains: <span><?php echo $numcount1;?> Products</span></h4>
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Product</th>
								<th>Quality</th>
								<th>Product Name</th>

								<th>Price</th>
								<th>Remove</th>
							</tr>
						</thead>
						<?php

$s="SELECT * FROM addcart WHERE adl_id=$l_id and ad_status='not payed' ";
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;


 $ad_id=$row['ad_id'];
   $adl_id=$row['adl_id'];
 $ad_name=$row['ad_name'];
 $ad_price=$row['ad_price'];
 $ad_quantity=$row['ad_quantity'];
 $ad_name=$row['ad_name'];
 $ad_total=$row['ad_total'];
 $adp_id=$row['adp_id'];

  $s1="SELECT * FROM  product WHERE p_id=$adp_id";
		// if(!$stmt=mysqli_query($con,$s))
 	// 	{
 	// 		die("prepare statement error1");
		// }
  $stmt1=mysqli_query($con,$s1);
		$result1=mysqli_fetch_array($stmt1);

                                ?>

						<tbody>
							<tr class="rem1">
								<td class="invert">1</td>
								<td class="invert-image"><a href="single.html"><img src="images/<?php echo $result1['image']?>" alt=" " class="img-responsive"></a></td>
								<td class="invert">
									<!-- <div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div> -->

<div class="quantity">
<div class="quantity-select">
<form method="post" >
<input type="submit" name="add" class="entry value-minus" value="+" style="color:black;" />
<input type="hidden" name="c_id" value="<?php echo $ad_id;?>" />


<input type="hidden" name="quan" class="entry value" style="color:black;" value="<?php echo $ad_quantity;?>"/>
<input type="hidden" name="price" class="entry value" style="color:black;" value="<?php echo $ad_price;?>"/>

<input type="text" class="entry value" style="color:black;" value="<?php echo $ad_quantity;?>" disabled/>

<input type="submit" name="sub" class="entry value-minus" value="-" style="color:black;" />
</form>
</div>
</div>
								</td>
								<td class="invert"><?php echo $ad_name;?></td>


								<td class="invert">Rs.<?php echo $ad_total;?></td>
								<td >
    <a href="cartdelete.php?ad_id=<?php echo $ad_id;?>"><i class="fa fa-trash"></i></a>

									<!-- <div class="rem" style="color:black;">
										<div class="close1"> </div>
									</div> -->

								</td>
							</tr>
							
							

						</tbody>
						<?php
					}
					?>
					</table>
				</div>
				<div class="checkout-left">
					<div class="col-md-4 checkout-left-basket">
						<h4>Continue to basket</h4>
						<ul>
							<?php

$s="SELECT * FROM addcart WHERE adl_id=$l_id and ad_status='not payed'";
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
  
   $adp_id=$row['adp_id'];
   $ad_id=$row['ad_id'];
   $adl_id=$row['adl_id'];
 $ad_name=$row['ad_name'];
 $ad_price=$row['ad_price'];
 $ad_quantity=$row['ad_quantity'];
 $ad_name=$row['ad_name'];
 $ad_total=$row['ad_total'];
 ?>

							<li><?php echo $ad_name;?> <i>-</i> <span>Rs.<?php echo $ad_total;?> </span></li>
							<?php
						}
						?>
							<!-- <li>Total Service Charges <i>-</i> <span>$55.00</span></li> -->
							<li>Total <i>-</i> <span>Rs.<?php
        $sql1 = "SELECT sum(ad_total) from addcart WHERE adl_id=$l_id and ad_status='not payed'";
        //var_dump($sql);
// 
     $q1=mysqli_query($con,$sql1);
     $row1 = mysqli_fetch_array($q1);

echo $row1[0];

    // {
    //   die("prepare statement error1");
    // }
    // $result5=mysqli_fetch_array($stmt);
    // echo $result5;
      ?></span></li>
						</ul>
					</div>
					<div class="col-md-8 address_form">
						<h4>Add a new Details</h4>
						<form action=" " method="post" class="creditly-card-form agileinfo_form">
							<section class="creditly-wrapper wrapper">
								<div class="information-wrapper">
									<div class="first-row form-group">
										<div class="controls">
											<label class="control-label">Full name: </label>
											<input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
										</div>
										<div class="card_number_grids">
											<div class="card_number_grid_left">
												<div class="controls">
													<label class="control-label">Mobile number:</label>
													<input class="form-control" type="text" placeholder="Mobile number" name="phone">
												</div>
											</div>
											<div class="card_number_grid_right">
												<div class="controls">
													<label class="control-label">Landmark: </label>
													<input class="form-control" type="text" placeholder="Landmark" name="landmark">
												</div>
											</div>
											<div class="clear"> </div>
										</div>
										<div class="controls">
											<label class="control-label">Town/City: </label>
											<input class="form-control" type="text" placeholder="Town/City" name="city">
										</div>
										<div class="controls">
											<label class="control-label">Address : </label>
											<input class="form-control" type="text" placeholder="Address" name="address">
											<!-- <label class="control-label">Address type: </label>
											<select class="form-control option-w3ls">
											<option>Office</option>
											<option>Home</option>
											<option>Commercial</option>
							
											</select> -->
										</div>
									</div>
									<!-- <button class="submit check_out">Delivery to this Address</button> -->
									<div class="checkout-right-basket">
										<button type="submit" name="card" class="submit check_out">Credit/debit</button></div>
										<div class="checkout-right-basket"><button type="submit" name="cash" class="submit check_out">Cash On Delivery</button>
							<!-- <a href="payment.html">Make a Payment </a> -->
						</div>
						<!-- <div class="checkout-right-basket">
							<a href="payment.html">Make a Payment </a>
						</div> -->
								</div>
							</section>
						</form>
						<!-- - -->
					</div>

					<div class="clearfix"> </div>


					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		
		<!-- footer -->
		<div class="footer_agileinfo_w3">
			<div class="footer_inner_info_w3ls_agileits">
				<div class="col-md-3 footer-left">
					<h2><a href="index1.php">Aloha Air Conditioner</a></h2>
				<p>Aloha Limited is a six decade old company in India with expertise in Air Conditioning & Cooling technology. The company is broadly structured into projects and products business</p>
					<ul class="social-nav model-3d-0 footer-social social two">
						<li>
							<a href="#" class="facebook">
								<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							</a>
						</li>
						<li>
							<a href="#" class="twitter">
								<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							</a>
						</li>
						<li>
							<a href="#" class="instagram">
								<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							</a>
						</li>
						<li>
							<a href="#" class="pinterest">
								<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-9 footer-right">
					<div class="sign-grds">
						<div class="col-md-4 sign-gd">
							<h4>Our <span>Information</span> </h4>
							<ul>
								<li><a href="about1.php">About</a></li>
							<li><a href="contact1.php">Contact</a></li>
							</ul>
						</div>

						<div class="col-md-5 sign-gd-two">
							<h4>Store <span>Information</span></h4>
							<div class="address">
								<div class="address-grid">
									<div class="address-left">
										<i class="fa fa-phone" aria-hidden="true"></i>
									</div>
									<div class="address-right">
										<h6>Phone Number</h6>
										<p>6282521034</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="address-grid">
									<div class="address-left">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
									<div class="address-right">
										<h6>Email Address</h6>
										<p>Email :<a href="mailto:example@email.com"> vinukoola@gmail.com</a></p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="address-grid">
									<div class="address-left">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
									</div>
									<div class="address-right">
										<h6>Location</h6>
										<p>Aloha Thrissur,Kerala

										</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="col-md-3 sign-gd flickr-post">
							<h4>Flickr <span>Posts</span></h4>
							<ul>
								<li><a href="index1.php"><img src="images/ALOHA_Logo.jpg" width="220" height="150"></a></li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>

				<p class="copy-right-w3ls-agileits">Copyright © 2022 Aloha, Inc. All Rights Reserved.</p>
			</div>
		</div>
	</div>
	<!-- //footer -->
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		shoe.render();

		shoe.cart.on('shoe_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<!-- /nav -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/demo1.js"></script>
	<!-- //nav -->
	<!--search-bar-->
	<script src="js/search.js"></script>
	<!--//search-bar-->
	<!--quantity-->
	<script>
		$('.value-plus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
		});
	</script>
	<!--quantity-->
	<script>
		$(document).ready(function (c) {
			$('.close1').on('click', function (c) {
				$('.rem1').fadeOut('slow', function (c) {
					$('.rem1').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close2').on('click', function (c) {
				$('.rem2').fadeOut('slow', function (c) {
					$('.rem2').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close3').on('click', function (c) {
				$('.rem3').fadeOut('slow', function (c) {
					$('.rem3').remove();
				});
			});
		});
	</script>

	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smoth-scrolling -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>

</html>