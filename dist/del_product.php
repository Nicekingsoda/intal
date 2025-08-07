<?php
  $pro_id=$_GET['pro_id']; //รับข้อมูลจากurl
  require '../conect.php'; //เชื่อมต่อฐานข้อมูล
  $sql = "DELETE FROM products WHERE pro_id='$pro_id'";
  $result = $con->query($sql);
  if(!$result){
    echo "<script>alert('ไม่สามารถลบข้อมูลได้')</script>";
  }else{
    echo"<script>window.location.href='index.php?page=product'</script>";
  }
?>