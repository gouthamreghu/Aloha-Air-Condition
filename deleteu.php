<?php
session_start();
include("db_connect.php");
if(isset($_GET['cl_id']))
{
	$cl_id=$_GET['cl_id'];
	 

 $query="DELETE s,n FROM customer AS s INNER JOIN login AS n ON s.cl_id=n.l_id WHERE s.cl_id=$cl_id";
 
	$result=$con->query($query);
	if($result)
	{
		header('Location:viewuser.php');
	}
}
?>