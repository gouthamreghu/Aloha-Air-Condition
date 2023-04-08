<?php
//session_start();
 include("db_connect.php");
 if(isset($_GET['ad_id']))
 	{
 		$ad_id=$_GET['ad_id'];
 		$query="DELETE FROM addcart WHERE ad_id=$ad_id";
 		$result=$con->query($query);
 		if($result)
 			{
 				header('Location:viewmycart.php');
 			}
 		}
?>