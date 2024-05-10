<?php
 session_start();
  include('connection.php');
  $num=$_POST['tickets'];
  $pname=$_SESSION['destination'];
  $arrdate=$_POST['arrivals'];
  $userid=$_SESSION['userid'];
  
  $_SESSION['bid']= $_SESSION['bid']+1;
  $sql="INSERT into booking (bid,pname,userid,numtickets,arrdate) values('2','$pname','$userid','$num','$arrdate')";
  $result=mysqli_query($conn,$sql);
  if($result)
  {
    header('location:payment.php');
  }

?>