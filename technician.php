<?php
session_start();
include 'db_connect.php';
 include 'aheader.php';
 if(isset($_SESSION['l_id']))
{
    $l_id=$_SESSION['l_id'];
    
}
if(isset($_POST['submit']))
{
  $name=$_POST['user'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $image=$_FILES['image']['name'];
  

  $phone=$_POST['phone'];
   $qualification=$_POST['qualification'];
   $experiance=$_POST['experiance'];
  

  
  $address=$_POST['address'];
  $type='technician';

  $approve='approve';

  $b="INSERT INTO login(l_uname,l_password,l_approve,l_type)VALUES('$email','$password','$approve','$type')";
  //var_dump($b);

  if($con->query($b))

  {
    $id=mysqli_insert_id($con);
   // echo $id;

    $q="INSERT INTO `technician`(`tl_id`, `t_name`, `t_email`, `t_address`, `t_password`, `t_phone`, `t_qualification`, `image`, `t_experience`)VALUES($id,'$name','$email','$address','$password','$phone','$qualification','$image','$experiance')";
   //var_dump($q,$b);
    //var_dump($q);
   //exit();
    if(mysqli_query($con,$q))

    {
      
      $image="images/";
    $image=$image.basename($_FILES['image']['name']);
    if(move_uploaded_file( $_FILES['image']['tmp_name'],$image))
    {
        echo "file upload";
        
    }
    //
    else
    {
        echo "error to upload file";
    }
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

	</style>
</head>
<body style="background: url('images/AC.jpg') no-repeat; background-size: cover; background-attachment: fixed;">
<div class="login" style="width: 400px; height: 600px; margin-left: 30%;">
	<h1>Welcome to Aloha</h1>	
	<form action="#" method="post" enctype="multipart/form-data">
		<p> Name</p>
		<input type="text" name="user" placeholder=" Name" style="font-size: 16px;
	width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
		<p>Email</p>
		<input type="text" name="email" placeholder="Email" style="font-size: 16px;
	width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
		<p>Address</p>
		<input type="text" name="address" placeholder="Address" style="font-size: 16px;
	width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
		<p>Password</p>
		<input type="Password" name="password" placeholder="Password" style="font-size: 16px;
	width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
	<p>qualification</p>
		<input type="text" name="qualification" placeholder="qualification" style="font-size: 16px;
	width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
	<p>experiance</p>
		<input type="text" name="experiance" placeholder="experiance" style="font-size: 16px;
	width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
        <p>phone</p>
        <input type="text" name="phone" placeholder="phone" style="font-size: 16px;
    width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
	<p>Photo</p>

		<input type="file" name="image" placeholder="image" style="font-size: 16px;
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
<?php
include 'footer.php';
?>
