<?php
session_start();
include 'db_connect.php';
include 'theader.php';
 if(isset($_SESSION['l_id']))
{
	$l_id=$_SESSION['l_id'];
	//var_dump($l_id);
}
$s="SELECT * FROM  technician WHERE tl_id=$l_id";
		if(!$stmt=mysqli_query($con,$s))
 		{
 			die("prepare statement error1");
		}
		$result=mysqli_fetch_array($stmt);
?>	

	</div>
	<div class="mid_services">
		<div class="col-md-6 according_inner_grids">
			<h3 class="heading two">Who We Are</h3>
			<div class="according_info">
				<div class="panel-group about_panel" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title asd">
								<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
								    aria-controls="collapseOne">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Profile
							</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body panel_text">
							<p>Name: <?php echo $result['t_name'];?></p>

							<p>Phone : <?php echo $result['t_phone'];?></p>
							<p>Email : <?php echo $result['t_email'];?></p>
							<p>Experience : <?php echo $result['t_experience'];?></p>
							<p>Qualification : <?php echo $result['t_qualification'];?></p>

							<p>Address : <?php echo $result['t_address'];?></p>

							</div>
							<a href="edittechnician.php?tl_id=<?php echo $l_id;?>"><button class="btn-success">Edit</button></a>
							<a href="deletetech.php?tl_id=<?php echo $l_id;?>"><button class="btn-danger">Delete</button></a>
						</div>
						<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
								    aria-controls="collapseTwo">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Profile Photo
							</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body panel_text">
								<img src="images/<?php echo $result['image'];?>">
							</div>
						</div>
					</div>
						
					</div>
					
					
				</div>
			</div>

		</div>
		<div class="col-md-6 mid_services_img">
			<div class="bar-grids">
				<h3 class="heading two three">Our Skills</h3>
				<div class="skill_info">
					<h6>Development<span> 95% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 95%">
						</div>
					</div>
					<h6>Pricing<span> 85% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 85%">
						</div>
					</div>
					<h6>Production <span>90% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 90%">
						</div>
					</div>
					<h6>Advertising <span>86% </span></h6>
					<div class="progress prgs-last">
						<div class="progress-bar progress-bar-striped active" style="width: 86%">
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="clearfix"> </div>
	</div>
	<?php
	include 'footer.php';
	?>
