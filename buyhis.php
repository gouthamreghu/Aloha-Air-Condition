<?php
session_start();
include 'db_connect.php';
include 'aheader.php';
 if(isset($_SESSION['l_id']))
{
    $l_id=$_SESSION['l_id'];
    //var_dump($l_id);
}
//  if(isset($_GET['cl_id']))
// {
//     $cl_id=$_GET['cl_id'];
//     //var_dump($l_id);
// }

?>
<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="privacy about">
				<h3>Buy<span>Product</span></h3>

				<div class="checkout-right">
					<!-- <h4>Your shopping cart contains: <span>3 Products</span></h4> -->
					<table class="timetable_sub">
						<thead>
							<tr>
								<!-- <th>SL No.</th> -->
								<th>Product</th>
								<th>Product Name</th>
								<th>Price</th>
								<th>Quality</th>
								<th>Total Amount</th>
							</tr>
						</thead>
						<?php

$s="SELECT * FROM addcart WHERE adl_id=$l_id and ad_status='payed' ";
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
								<!-- <td class="invert">1</td> -->
								<td class="invert-image"><a href="single.html"><img src="images/<?php echo $result1['image']?>" alt=" " class="img-responsive"></a></td>
								
								<td class="invert"><?php echo $ad_name;?></td>
								<td class="invert"><?php echo $ad_price;?></td>
								<td class="invert"><?php echo $ad_quantity;?></td>
								<td class="invert">Rs.<?php echo $ad_total;?></td>


								
							</tr>
							

						</tbody>
						<?php
					}
					?>
					</table>
				</div>
			</div>
		</div>
	</div>


	<?php
include 'footer.php';
?>