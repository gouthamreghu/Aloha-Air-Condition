<?php
session_start();
include 'db_connect.php';
 if(isset($_SESSION['l_id']))
{
    $l_id=$_SESSION['l_id'];
    //var_dump($l_id);
}

 if(isset($_GET['p_id']))
{
    $p_id=$_GET['p_id'];
    //var_dump($l_id);
}
 if(isset($_GET['ad_id']))
{
    $ad_id=$_GET['ad_id'];
    //var_dump($l_id);
}
?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Service Section</title>
		   <!-- <link rel="stylesheet" type="text/css" href="./style.css"> -->
    <style type="text/css">
      body{
	margin:0px;
	padding: 0px;
	background-color: #FFFFFF;
	font-family: calibri;
}
a{
	text-decoration: none;
}
.services{
	width: 100%;
	height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}
.s-heading h1{
	color: #576975;
	font-size: 3rem;
	font-weight: 400;
	text-align: center;
	letter-spacing: 1px;
	margin: 0px;
}
.s-heading p{
	color: rgba(87, 105, 117, 0.6);
	font-size: 1rem;
	margin: 5px;
	text-align: center;
}
.s-box-container{
	width: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
}
.s-box img{
	height: 75px;
}
.s-box{
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	border-radius: 10px;
	width: 300px;
	height: 400px;
	padding: 20px 25px;
	box-sizing: border-box;
	margin: 30px;
	box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.2);
	position: relative;
	
}
.s-box h1{
	color: #576975;
	letter-spacing: 1px;
	font-size: 1.5rem;
	margin-bottom: 8px;
}
.s-box p{
	color: rgba(87, 105, 117, 0.9);
	text-align: center;
}
.s-btn{
	width: 140px;
	height: 40px;
	border-radius: 20px;
	border: 1px solid rgba(74, 144, 226, 0.5);
	display: flex;
	justify-content: center;
	align-items: center;
	color: #576975;
	margin-top: 10px;
}
.s-box:hover{
	box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.08);
	transition: all ease 0.3s;
}
.s-btn:hover{
	background-color: #4a90e2;
	border: 1px solid #4a90e2;
	color: #FFFFFF;
	transition: all ease 0.3s;
}
.bar{
	width: 100px;
	height: 6px;
	position: absolute;
	left: 50%;
	top: 0px;
	transform: translateX(-50%);
	background-color: #4a90e2;
	border-radius: 0px 0px 10px 10px;
	display: none;
	animation: bar 0.5s;
}
.s-box:hover .bar{
	display: block;
}
@keyframes bar{
	0%{
		width: 0px;
	}
	100%{
		width: 100px;
	}
}

     </style>
	</head>
	<body>
		<section class="services">
			<!--heading---------->
			<div class="s-heading">
				<h1>SER<font color="#4a90e2">VIC</font>ES</h1>
				<p>We Provide The Best In Class Services For Our Customers.</p>
			</div>
			<!--services-box-container---------->
			<div class="s-box-container">
				<!--box-------------------->
				
				<!--box-2------------------->
				<div class="s-box">
					<!--top-bar------->
					<div class="bar"></div>
					<!--img------------->
					<img src="images/ser.jpg" alt="2">
					<!--services-name----------->
					<h1>Service Appointment</h1>
					<!--details------------->
					<p>Book a service repair online or Arrange an engineer visit.</p>
					<!--btn----------------->
					<a href="servicerequest.php?p_id=<?php echo $p_id;?>&ad_id=<?php echo $ad_id;?>&l_id=<?php echo $l_id;?>" class="s-btn">Submit now</a>
				</div>
			</div>

		</section>
	
	</body>
	</html>