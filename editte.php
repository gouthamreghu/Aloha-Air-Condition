<?php
session_start();
include 'db_connect.php';
// include 'aheader.php';
if(isset($_GET['tl_id']))
  {
   	$tl_id=$_GET['tl_id'];
   	}

   	$w="SELECT * FROM technician WHERE tl_id=$tl_id";
// var_dump($w);
		if(!$stmt=mysqli_query($con,$w))
 		{
			die("prepare statement error1");
		}
		$result=mysqli_fetch_array($stmt);
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  // $password=$_POST['password'];
  $image=$_FILES['image']['name'];
  
  $phone=$_POST['phone'];
   $experience=$_POST['experience'];
   $qualification=$_POST['qualification'];


  
  $address=$_POST['address'];
 
  
  if($image=="")
    {
        $image=$_POST['image1'];
    }
  $qu="UPDATE technician SET t_name='$name',t_qualification='$qualification',t_experience='$experience',t_phone='$phone',t_email='$email',t_address='$address',image='$image' WHERE tl_id=$tl_id";
  var_dump($qu);

 $result1=$con->query($qu);
  if($result1)
  {
    //echo "<script>window.location.replace('viewsubjecten.php');</script>";
    $image="images/";
    $image=$image.basename($_FILES['image']['name']);
    if(move_uploaded_file( $_FILES['image']['tmp_name'],$image))
    {
        echo "file upload";
        
    }
    //$_SESSION['msg']="Successfully Updated";
    else
    {
        echo "error to upload file";
    }
     echo "<script>
    window.location.replace('viewtechnician.php')
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
    <form action="#" method="post" enctype="multipart/form-data">
        <p>User name</p>
        <input type="text" name="name" placeholder="User Name" value="<?php echo $result['t_name'];?>"style="font-size: 16px;
    width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
        <p>Email</p>
        <input type="text" name="email" placeholder="Email" value="<?php echo $result['t_email'];?>"style="font-size: 16px;
    width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
      <p>Qualification</p>
        <input type="text" name="qualification" placeholder="Qualification" value="<?php echo $result['t_qualification'];?>"style="font-size: 16px;
    width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
      <p>Experience</p>
        <input type="text" name="experience" placeholder="Experience" value="<?php echo $result['t_experience'];?>"style="font-size: 16px;
    width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
        <p>Address</p>
        <input type="text" name="address" placeholder="Address" value="<?php echo $result['t_address'];?>" style="font-size: 16px;
    width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
      <!--   <p>Password</p>
        <input type="text" name="password" placeholder="Password" value="<?php echo $result['t_password'];?>" style="font-size: 16px;
    width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;"> -->
    <p>Phone No</p>
        <input type="text" name="phone" placeholder="Phone" value="<?php echo $result['t_phone'];?>" style="font-size: 16px;
    width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
    <img width="20%" height="40%" src="images/<?php echo $result['image'];?>">
          <input placeholder="Image" name="image" type="file"  value="<?php echo $result['image'];?>">
                        <input type="hidden" name="image1" value="<?php echo $result['image'];?>" >
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