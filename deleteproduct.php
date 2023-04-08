<?php
session_start();
include("db_connect.php");
if(isset($_GET['p_id']))
{
	$p_id=$_GET['p_id'];
	 

 $query="DELETE FROM product  WHERE p_id=$p_id";
 
	$result=$con->query($query);
	if($result)
	{
		header('Location:viewproduct.php');
	}
}
?>