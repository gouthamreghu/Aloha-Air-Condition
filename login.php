<?php 
session_start();
include('db_connect.php');
    // include ('header.php');

if(isset($_POST['login']))
{
    
    $l_uname=$_POST['l_uname'];
    $l_password=$_POST['l_password'];
    $q="SELECT * FROM login where l_uname='$l_uname' and l_password='$l_password'";
    //var_dump($q);
    $eqr=mysqli_query($con,$q);
    $r=$eqr->fetch_assoc();
    if($r)
    {
        if($r['l_type']=="admin" and $r['l_approve']=="approve")
        {
         $l_id=$r['l_id'];
         $_SESSION['l_id']=$l_id;
        //header("Location:adminprofile.php");
        //echo '<script language="javascript">alert("Successfuly Login")</script>';
       echo "<script>window.location.replace('adminprofile.php');</script>";
       }
       else if($r['l_type']=="user" and $r['l_approve']=="approve")
       {
         $l_id=$r['l_id'];
        $_SESSION['l_id']=$l_id;
        //header("Location:guideprofile.php");
        echo "<script>window.location.replace('userprofile.php');</script>";
       }
       else if($r['l_type']=="technician" and $r['l_approve']=="approve")
       {
        $l_id=$r['l_id'];
         $_SESSION['l_id']=$l_id;
        //header("Location:customerprofile.php");
        echo "<script>window.location.replace('technicianprofile.php');</script>";
       }
        
        
        
       else
       {
         $_SESSION['msg']="username and password mismatch";
       }
    }
    else
    {
         $_SESSION['msg']="username and password mismatch";
     
    }
}
    
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- <link rel="stylesheet" type="text/css" href="./style.css"> -->
	<style type="text/css">
		* {
	padding: 0;
	margin: 0;
	font-family: sans-serif;
}

body{
	background: url('images/AC.jpg') no-repeat;
	background-size: cover;
	height: 100%;
}

.login{
	width: 350px;
	top: 5%;
	left: 50%;
	transform: translate(-50%, 50%);
	position: absolute;
	color: #fff;

}

.login h1 {
	font-size: 30px;
	text-align: center;
	text-transform: uppercase;
	margin: 40px 0;
}

.login p {
	font-size: 20px;
	margin: 15px 0;
}

.login input {
	font-size: 16px;
	width: 100%;
	padding: 15px 10px;
	border: 0;
	outline: none;
	border-radius: 5px;
}

.login button {
	font-size: 18px;
	font-weight: bold;
	margin: 20px 0;
	padding: 10px 15px;
	width: 50%;
	border-radius: 5px;
	border: 0;
}a:link {
  color: skyblue;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: skyblue;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: red;
  background-color: transparent;
  text-decoration: none;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}
	</style>
}
</head>
<body>
	<div class="login">
	<h1>Welcome to Aloha</h1>	
	<form action="#" method="post">
		<p>User name</p>
		<input type="email" name="l_uname" placeholder="Email" required="">
		<p>Password</p>
		<input type="Password" name="l_password" placeholder="Password" required="">
		<button type="submit" name="login">Login</button>
		<p align="center">
		<h4 align="center">Don't have an account?<a href="customerreg.php"> sign up</a></p><br></h5>
								
	</form><br>
								<?php
            if(isset($_SESSION['msg']))
            {
                echo "<div class='alert alert_danger' style='background-color:skyblue';><front color='green'>".$_SESSION['msg']."</font></div>";
                unset($_SESSION['msg']);
            }
            ?>
	</div>
</body>
</html>