<?php
session_start();
//สร้างตัวแปร session
$_SESSION["std_id"] = "12345";

//สร้างตัวแปรsession ชื่อ fullname เก็บค่านักศึกษาในหน้า page1 และ page2
$_SESSION["fullname"] = "Thammarat";

echo "สร้างsession เรียบร้อย <br>";
echo "Session ID: " .$_SESSION["std_id"];
echo "<br>";
echo '<a href="page2.php">Go to page 2</a>';
echo "<br>";
echo "Session Fullname: " .$_SESSION["fullname"];
echo "<br>";
echo '<a href="logout.php">ไปหน้า logout</a>';

?>
