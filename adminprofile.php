<?php
session_start();
include 'db_connect.php';
include 'aheader.php';
 if(isset($_SESSION['l_id']))
{
	$l_id=$_SESSION['l_id'];
	//var_dump($l_id);
}
// $s="SELECT * FROM  customer WHERE cl_id=$l_id";
// 		if(!$stmt=mysqli_query($con,$s))
//  		{
//  			die("prepare statement error1");
// 		}
// 		$result=mysqli_fetch_array($stmt);
?>	

	</div>
	<div class="mid_services">
		<div class="col-md-6 according_inner_grids">
			<div class="container">
    <div class="main-body">
    
         
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>Krishnendhu </h4>
                      <p class="text-secondary mb-1">Admin</p>
                      <p class="text-muted font-size-sm">Konathukunnu,Thrissur,Kerala</p>
                     
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Krishnendhu K S
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      admin@gamil.com
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (239) 816-9029
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (320) 380-4539
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     Konathukunnu,Thrissur,Kerala
                    </div>
                  </div>
                    </div>
                  </div>
                </div>
              </div>

             



            </div>
          </div>

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
