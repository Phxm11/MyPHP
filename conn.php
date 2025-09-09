<?php
$host = "localhost";      // ชื่อโฮสต์ ฐานข้อมูล
$user = "root";       // ชื่อผู้ใช้ ฐานข้อมูล 
$password = "";           // รหัสผ่าน ฐานข้อมูล
$dbname = "db168b"; // ชื่อ ฐานข้อมูล
 
// Create connection
   $conn = new mysqli($host, $user, $password, $dbname);
   $conn->query("SET NAMES UTF8");

// Check connection
if ($conn->connect_error) {
    echo "เกิด error ติดต่อ ฐานข้อมูล ไม่ได้: " . $conn->connect_error;
} else {
    echo "ติดต่อ ฐานข้อมูล สำเร็จ";
}
 
       


?>