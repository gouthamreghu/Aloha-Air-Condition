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
	background-color:black ;
	background-size: cover;
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
}
	</style>
</head>
<body>
	<div class="login" style="margin-top: 1px;">
	<h1>Welcome to Aloha</h1>	
	<form action="#" method="post">
		<p>User name</p>
		<input type="text" name="user" placeholder="User Name">
		<p>Email</p>
		<input type="text" name="Email" placeholder="Email">
		<p>Address</p>
		<input type="text" name="Address" placeholder="Address">
		<p>Password</p>
		<input type="Password" name="Password" placeholder="Password">
		<button type="Submit">Create account</button>
		
	</form>
	</div>
</body>
</html>