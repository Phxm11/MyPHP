<?php
include 'conn.php';  // เรียกใช้ไฟล์ conn.php เพื่อเชื่อมต่อฐานข้อมูล
$Fname = $_POST["fname"];
$Sname = $_POST["sname"];

$sql = "INSERT INTO `student` (`Fname`, `Sname`) VALUES ('$Fname', '$Sname');";
$result = $conn->query($sql);

header('location:main.php');


?>