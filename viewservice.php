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
			<div class="left-ads-display col-md-12" >
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

$s="SELECT * FROM service";
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
   $s_id=$row['s_id'];
   $sp_id=$row['sp_id'];

   $sl_id=$row['sl_id'];

   $s_type=$row['s_type'];
    $s_pcategory=$row['s_pcategory'];
    $s_serialno=$row['s_serialno'];
    $s_purchasedate=$row['s_purchasedate'];
    $s_productmodel=$row['s_productmodel'];
     $s_visitdate=$row['s_visitdate'];
    $s_description=$row['s_description'];
     $s_fname=$row['s_fname'];
     $s_status=$row['s_status'];

     $s_lname=$row['s_lname'];
     $s_phone=$row['s_phone'];
     $s_telephone=$row['s_telephone'];
    $s_state=$row['s_state'];
     $s_city=$row['s_city'];
     $s_pincode=$row['s_pincode'];
     $s_address=$row['s_address'];
     $s_landmark=$row['s_landmark'];
     $s_email=$row['s_email'];
     $s_visittime=$row['s_visittime'];
   


                                ?>
						<div class="col-md-4 product-men">
							<div class="product-shoe-info shoe">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<!-- <img src="images/<?php echo $image;?>" alt=""> -->
										<!-- <div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div> -->
										<!-- <span class="product-new-top">New</span> -->
									</div>
									<div class="item-info-product">
										<h4>
											<a href="single.html"><?php echo $s_type;?> </a>
										</h4>

										<div class="info-product-price">
											<div class="grid_meta">
												<p>Product Category:<?php echo $s_pcategory;?></p>
												<p>Serial Number:<?php echo $s_serialno;?></p>
												<p>Product Model:<?php echo $s_productmodel;?></p>
												<p>Purchase Date :<?php echo $s_purchasedate;?></p>
												<p>Preferred Visit Date:<?php echo $s_visitdate;?></p>
												<p>Preferred Visit Time :<?php echo $s_visittime;?></p>
												<p>Issue Description :<?php echo $s_description;?></p>
												<p>Status :<?php echo $s_status;?></p>


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
											<h4>
											Contact Details
										</h4>

										<div class="info-product-price">
											<div class="grid_meta">
												<p>Name:<?php echo $s_fname;?>&nbsp;<?php echo $s_lname;?></p>
												<p>Mobile No:<?php echo $s_phone?></p>
												<p>Telephone No:<?php echo $s_telephone;?></p>
												<p>State :<?php echo $s_state;?></p>
												<p>City:<?php echo $s_city;?></p>
												<p>Pincode:<?php echo $s_pincode;?></p>
												<p>Address :<?php echo $s_address;?></p>
												<p>Landmark:<?php echo $s_landmark;?></p>
												<p>Email :<?php echo $s_email;?></p>
											</div>
										
										</div>
</div>

											<div class="grid_meta">
							 <a href="distech.php?s_id=<?php echo $s_id;?>&sp_id=<?php echo $sp_id;?>&sl_id=<?php echo $sl_id;?>"><button class="btn btn-success">Disibute</button></a>
							<!-- <a href="deleteproduct.php?p_id=<?php echo $p_id;?>"><button class="btn-danger">Delete</button></a>  -->
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