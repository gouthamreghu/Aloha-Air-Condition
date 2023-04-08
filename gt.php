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
		<p> Name</p>
		<input type="text" name="user" placeholder=" Name" style="font-size: 16px;
	width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
		<p>Email</p>
		<input type="text" name="Email" placeholder="Email" style="font-size: 16px;
	width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
		<p>Address</p>
		<input type="text" name="Address" placeholder="Address" style="font-size: 16px;
	width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
		<p>Password</p>
		<input type="Password" name="Password" placeholder="Password" style="font-size: 16px;
	width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
	<p>qualification</p>
		<input type="text" name="qualification" placeholder="qualification" style="font-size: 16px;
	width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
	<p>experiance</p>
		<input type="text" name="experiance" placeholder="experiance" style="font-size: 16px;
	width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
	<p>Photo</p>

		<input type="file" name="image" placeholder="image" style="font-size: 16px;
	width: 100%;padding: 15px 10px;border: 0;outline: none;border-radius: 5px;">
		<button type="Submit" style="font-size: 18px;font-weight: bold;margin: 20px 0;padding: 10px 15px;width: 50%;border-radius: 5px;border: 0;">Create account</button>
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