<?php
session_start();
include 'db_connect.php';
//include 'aheader.php';
 if(isset($_SESSION['l_id']))
{
    $l_id=$_SESSION['l_id'];
    //var_dump($l_id);
}



if(isset($_POST['add']))
{
   
    $p_category=$_POST['type'];
    $p_star=$_POST['star'];
    $p_ton=$_POST['ton'];
    $p_brand=$_POST['brand'];
    $p_price=$_POST['price'];
    $p_description=$_POST['description'];
     $p_model=$_POST['model'];
  $image=$_FILES['image']['name'];




      $q="INSERT INTO `product`( `p_category`,`p_star`,`p_ton`,`p_brand`,`p_price`,`p_description`,`p_model`,`image`)VALUES('$p_category','$p_star','$p_ton','$p_brand','$p_price','$p_description','$p_model','$image')";
   //var_dump($q);
  // exit();

    if(mysqli_query($con,$q))

    {
         $image="images/";
    $image=$image.basename($_FILES['image']['name']);
    if(move_uploaded_file( $_FILES['image']['tmp_name'],$image))
    {
       // echo "file upload";
        
    }
    //
    else
    {
        echo "error to upload file";
    }
       // echo '<script language="javascript">alert("Successfully Added")</script>';
       //      echo "<script>window.location.replace('patientbook.php')</script>";
      $_SESSION['msg']="Successfully Added....";

    }
}

?>

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title>profile </title>--->
    <!-- <link rel="stylesheet" type="text/css" href="./style.css"> -->
  <style type="text/css">
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background:  url('images/ac23.jpg') no-repeat;
  background-size: cover;
}

.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}
</style>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Product Registration</div>
    <div class="content">
      <form action="#" method="post" enctype="multipart/form-data">
        <br>
        <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
<p><label for="file" style="cursor: pointer;">Upload Image</label></p>
<p><img id="output" width="200" /></p>

<script>
var loadFile = function(event) {
  var image = document.getElementById('output');
  image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Product Brand</span>
            <input type="text" name="brand" placeholder="Enter brand" required>
          </div>
          <div class="input-box">
            <span class="details">Model no</span>
            <input type="text" name="model" placeholder="Enter the model no" required>
          </div>
          <div class="input-box">
            <span class="details">Price</span>
            <input type="text" name="price" placeholder="Enter product price" required>
          </div>
          <div class="input-box">
            <span class="details">Unit or Tonn</span>
            <input type="text" name="ton" placeholder="Enter unit of AC" required>
          </div>
          <div class="input-box">
            <span class="details">Star count</span>
            <input type="text" name="star" placeholder="Enter no of stars" required>
          </div>
          <div class="input-box">
            <span class="details">Special feature</span>
            <input type="text" name="description" placeholder="Enter details" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="type" value="Split Ac" id="dot-1">
          <input type="radio" name="type" value="Window Ac" id="dot-2">
          <input type="radio" name="type" value="Portable Ac" id="dot-3">
          <span class="gender-title">Category</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Split Ac</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Window Ac</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Portable Ac</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="add" value="Add Product">
        </div>
         <?php
            if(isset($_SESSION['msg']))
            {
                echo "<div class='alert alert_danger' style='background-color:skyblue';><front color='green'>".$_SESSION['msg']."</font></div>";
                unset($_SESSION['msg']);
            }
            ?>
      </form>
    </div>
  </div>

</body>
</html>
