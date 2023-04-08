<?php
session_start();
include 'db_connect.php';

 if(isset($_SESSION['l_id']))
{
    $l_id=$_SESSION['l_id'];
    
}
if(isset($_POST['submit']))
{
  $name=$_POST['user'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  

  $phone=$_POST['phone'];
  
  $address=$_POST['address'];
  $type='user';

  $approve='approve';

  $b="INSERT INTO login(l_uname,l_password,l_type,l_approve)VALUES('$email','$password','$type','$approve')";
  //var_dump($b);

  if($con->query($b))

  {
    $id=mysqli_insert_id($con);
   // echo $id;

    $q="INSERT INTO `customer`( `cl_id`, `c_name`, `c_email`, `c_address`, `c_password`, `c_phone`)VALUES($id,'$name','$email','$address','$password','$phone')";
   //var_dump($q,$b);
    //var_dump($q);
   //exit();
    if(mysqli_query($con,$q))

    {
      
      
    $_SESSION['msg']="Successfully Register";
    }
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
	a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}


.previous {
  background-color: #f1f1f1;
  color: black;
}


.round {
  border-radius: 50%;
}

	</style>
</head>
<body style="background: url('images/AC.jpg') no-repeat; background-size: cover; background-attachment: fixed;">
	<a href="login1.php" class="previous round">&#8249;BACK</a>
<div class="login" style="width: 400px; height: 600px; margin-left: 30%;">
	<h1>Welcome to Aloha</h1>	
	<form action="#" method="post">
		<p>User name</p>
		<input type="text" name="user" placeholder="User Name" required="" style="font-size: 16px;
	width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
		<p>Email</p>
		<input type="text" name="email" placeholder="Email" required="" style="font-size: 16px;
	width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
		<p>Address</p>
		<input type="text" name="address" placeholder="Address" required="" style="font-size: 16px;
	width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
		<p>Password</p>
		<input type="Password" name="password" placeholder="Password" required="" style="font-size: 16px;
	width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
	<p>Phone No</p>
		<input type="text" name="phone" placeholder="Phone" required="" style="font-size: 16px;
	width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
		<button type="submit" name="submit" style="font-size: 18px;font-weight: bold;margin: 20px 0;padding: 10px 15px;width: 50%;border-radius: 5px;border: 0;">Create account</button>
		<br>
								<?php
            if(isset($_SESSION['msg']))
            {
                echo "<div class='alert alert_danger' style='background-color:skyblue';><front color='green'>".$_SESSION['msg']."</font></div>";
                unset($_SESSION['msg']);
            }
            ?>
		
	</form>
	</div>
</body>
</html>