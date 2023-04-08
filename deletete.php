<?php
session_start();
include("db_connect.php");
if(isset($_GET['tl_id']))
{
	$tl_id=$_GET['tl_id'];
	 

 $query="DELETE s,n FROM technician AS s INNER JOIN login AS n ON s.tl_id=n.l_id WHERE s.tl_id=$tl_id";
 
	$result=$con->query($query);
	if($result)
	{
		header('Location:viewtechnician.php');
	}
}
?>