 <?php
session_start();
include 'db_connect.php';
include 'aheader.php';
 if(isset($_SESSION['l_id']))
{
    $l_id=$_SESSION['l_id'];
    //var_dump($l_id);
}

?>
	<!-- top Products -->
	<div class="ads-grid_shop" >
		<div class="shop_inner_inf">
			<!-- tittle heading -->

			<!-- //tittle heading -->
		
			<!-- product right -->
			<div class="left-ads-display col-md-9" >
				<div class="wrapper_top_shop">
					<div class="col-md-6 shop_left">
						<img src="images/a1.jpg" alt="">
						<h6>40% off</h6>
					</div>
					<div class="col-md-6 shop_right">
						<img src="images/a2.jpg" alt="">
						<h6>50% off</h6>
					</div>
					<div class="clearfix"></div>
					<!-- product-sec1 -->
					<div class="product-sec1">
						<!--/mens-->
						<?php

$s="SELECT * FROM technician";
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
  
  $t_id=$row['t_id'];
  $tll_id=$row['tl_id'];

  $t_name=$row['t_name'];
  $image=$row['image'];


$t_address=$row['t_address'];
$t_phone=$row['t_phone'];
$t_email=$row['t_email'];
$t_experience=$row['t_experience'];
$t_qualification=$row['t_qualification'];


                                ?>
						<div class="col-md-4 product-men">
							<div class="product-shoe-info shoe">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="images/<?php echo $image;?>" alt="">
										<!-- <div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div> -->
										<!-- <span class="product-new-top">New</span> -->
									</div>
									<div class="item-info-product">
										<h4>
											<a href="single.html"><?php echo $t_name;?> </a>
										</h4>

										<div class="info-product-price">
											<div class="grid_meta">
												<p>Email :<?php echo $t_email;?></p>
												<p>Experience :<?php echo $t_experience;?></p>
												<p>Qualification :<?php echo $t_qualification;?></p>
												<p>Address :<?php echo $t_address;?></p>
												<p>Phone :<?php echo $t_phone;?></p>
												<!-- <p><?php echo $t_address;?></p> -->


												<!-- <div class="product_price">
													<div class="grid-price ">
														<span class="money ">$675.00</span>
													</div>
												</div>
												<ul class="stars">
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												</ul> -->
											</div>
										
										</div>

											<div class="grid_meta">
										<a href="editte.php?tl_id=<?php echo $tll_id;?>"><button class="btn-success">Edit</button></a>
							<a href="deletete.php?tl_id=<?php echo $tll_id;?>"><button class="btn-danger">Delete</button></a>
						</div>
					
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
						<?php
					}
					?>
						<div class="clearfix"></div>

					</div>

				
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<?php
include 'footer.php';
?>