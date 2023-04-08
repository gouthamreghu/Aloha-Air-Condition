<?php
session_start();
include 'db_connect.php';
include 'aheader.php';
 if(isset($_SESSION['l_id']))
{
    $l_id=$_SESSION['l_id'];
    //var_dump($l_id);
}
 if(isset($_GET['cl_id']))
{
    $cl_id=$_GET['cl_id'];
    //var_dump($l_id);
}

?>
<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="privacy about">
				<h3>Buy<span>Product History</span></h3>

				<div class="checkout-right">
					<!-- <h4>Your shopping cart contains: <span>3 Products</span></h4> -->
					<table class="timetable_sub">
						<thead>
							<tr>
								<!-- <th>SL No.</th> -->
								<th>Name</th>
								<th>Phone</th>
								<th>Landmark</th>
								<th>Town</th>
								<th>Address</th>
								<th>Status</th>
								<th>Time</th>


							</tr>
						</thead>
						<?php

$s="SELECT * FROM credit_debit WHERE crl_id=$cl_id";
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;


 $cr_id=$row['cr_id'];
   $crl_id=$row['crl_id'];
 $cr_name=$row['cr_name'];
 $cr_phone=$row['cr_phone'];
 $cr_landmark=$row['cr_landmark'];
 $cr_town=$row['cr_town'];
 $cr_address=$row['cr_address'];
 $cr_status=$row['cr_status'];
 $cr_time=$row['cr_time'];


 

                                ?>

						<tbody>
							<tr class="rem1">
								<!-- <td class="invert">1</td> -->
								
								
								<td class="invert"><?php echo $cr_name;?></td>
								<td class="invert"><?php echo $cr_phone;?></td>
								<td class="invert"><?php echo $cr_landmark;?></td>
								<td class="invert"><?php echo $cr_town;?></td>
								<td class="invert"><?php echo $cr_address;?></td>
								<td class="invert"><?php echo $cr_status;?></td>
								<td class="invert"><?php echo $cr_time;?></td>



								
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