<?php
     $id = $_GET["id"];
     include 'conn.php';  // เรียกใช้ไฟล์ conn.php เพื่อเชื่อมต่อฐานข้อมูล
     $sql = "DELETE FROM `student` WHERE `id` = $id";
     $result = $conn->query($sql);
     header('location:main.php');

     
?>