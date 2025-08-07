<?php
  $username=$_GET['username']; //รับข้อมูลจากurl
  require '../conect.php'; //เชื่อมต่อฐานข้อมูล
  $sql = "DELETE FROM users WHERE username='$username'";
  $result = $con->query($sql);
  if(!$result){
    echo "<script>alert('ไม่สามารถลบข้อมูลได้')</script>";
  }else{
    echo"<script>window.location.href='index.php?page=users'</script>";
  }
?>