<?php
session_start();
include 'db_connect.php';
include 'aheader.php';
?>
<style type="text/css">
	/*
** reseting 
*/
/*body{
  background: #2c3e50;
}*/
a1{
  color: #2ecc71;
  font-family: tahoma;
}
/*
** timeline css codes
*/
.comments{
  width: 700px;
  margin: 100px auto;
  padding: 0px 10px 0px 50px;
  border-left: 2px solid #34495e;
}
.p{
  padding: 20px;
  background: #34495e;
  color: #ecf0f1;
  font-family: tahoma;
  line-height: 1.7;
  position: relative;
}
.p1{
  padding: 50px;
  background: #333;
  color: #ecf0f1;
  font-family: tahoma;
  line-height: 1.7;
  position: relative;
}
span {
    display: block;
    padding: 5px 5px 10px 5px;
    color: #7f8c8d;
    font-style: italic;
    font-size: 13px;
}

button{
  background: #2ecc71;
  color: #fff;
  width: 100px;
  padding: 10px;
  border-radius: 2px;
  border: 0;
  font-weight: bold;
  cursor: pointer;
}
.p:before{
  content: "";
  display: block;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background: #2ecc71;
  top: -9px;
  left: -61px;
  position: absolute;
}
.p:after{
  content: "";
  display: block;
  width: 0;
  height: 0;
  border-style: solid;
  border-color: #34495e #34495e transparent       transparent ;
  border-width: 15px;
  position: absolute;
  top: 0px;
  left: -29px;
}
</style>
<div class="comments">
	<?php
	$s="SELECT * FROM customer INNER JOIN feedback ON customer.cl_id=feedback.fl_id ORDER BY f_feedback DESC";
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
  // $a_id=$row['a_id'];
  // $al_id=$row['al_id'];

  // $subject=$row['subject'];
  $c_name=$row['c_name'];
  $f_feedback=$row['f_feedback'];
  // $aq_reply=$row['aq_reply'];


	?>
  <p class="p">
    <?php echo $c_name;?>
    <p class="p1"><?php echo $f_feedback;?></p>
    <!-- <span>in 08.09.2016</span>
    <button >repley</button> -->
  </p>
  <?php
}
?>
 

</div>
<?php
include 'footer.php';
?>
