<?php 
    include 'conn.php';
    $id = $_POST["id"];
    $Fname = $_POST["fname"];
    $Sname = $_POST["sname"];
    $sql = "UPDATE `student` 
    SET `Fname` = '$Fname', `Sname` = '$Sname' WHERE `student`.`id` = $id";
    $result = $conn->query($sql);
    //ถ้าแก้ไขได้ค่อยใส่ header

    header('location:main.php');

?>