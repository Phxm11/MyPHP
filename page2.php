<?php
session_start();

if(isset($_SESSION["std_id"])) {
    echo "สร้างSession แล้ว.<br>";

echo 'ตัวแปร session std_id = ' . $_SESSION["std_id"];
echo "<br>";
echo 'ตัวแปร session fullname = ' . $_SESSION["fullname"];
}else {
    echo "ไม่ได้สร้าง Session<br>";
}
?>