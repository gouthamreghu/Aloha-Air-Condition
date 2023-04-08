<?php
session_start();
include 'db_connect.php';
// include 'dheader.php';
if(isset($_GET['cl_id']))
  {
   	$cl_id=$_GET['cl_id'];
   	}

   	$w="SELECT * FROM customer WHERE cl_id=$cl_id";
// var_dump($w);
		if(!$stmt=mysqli_query($con,$w))
 		{
			die("prepare statement error1");
		}
		$result=mysqli_fetch_array($stmt);
if(isset($_POST['submit']))
{
  $name=$_POST['user'];
  $email=$_POST['email'];
  $password=$_POST['password'];
 
  $phone=$_POST['phone'];



  
  $address=$_POST['address'];
 
  $qu="UPDATE customer SET c_name='$name',c_phone='$phone',c_email='$email',c_address='$address',c_password='$password' WHERE cl_id=$cl_id";
  var_dump($qu);

 $result1=$con->query($qu);
  if($result1)
  {
	
     echo "<script>
    window.location.replace('userprofile.php')
    </script>";  

  	
       
       //$_SESSION['msg']="Successfully Updated....";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">

    </style>
</head>
<body style="background: url('images/AC.jpg') no-repeat;  background-attachment: fixed;">
<div class="login" style="width: 400px; height: 600px; margin-left: 30%;">
    <h1>Welcome to Aloha</h1>   
    <form action="#" method="post">
        <p>User name</p>
        <input type="text" name="user" placeholder="User Name" value="<?php echo $result['c_name'];?>"style="font-size: 16px;
    width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
        <p>Email</p>
        <input type="text" name="email" placeholder="Email" value="<?php echo $result['c_email'];?>"style="font-size: 16px;
    width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
        <p>Address</p>
        <input type="text" name="address" placeholder="Address" value="<?php echo $result['c_address'];?>" style="font-size: 16px;
    width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
        <p>Password</p>
        <input type="text" name="password" placeholder="Password" value="<?php echo $result['c_password'];?>" style="font-size: 16px;
    width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
    <p>Phone No</p>
        <input type="text" name="phone" placeholder="Phone" value="<?php echo $result['c_phone'];?>" style="font-size: 16px;
    width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
        <button type="submit" name="submit" style="font-size: 18px;font-weight: bold;margin: 20px 0;padding: 10px 15px;width: 50%;border-radius: 5px;border: 0;">Edit account</button>
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