<?php
session_start();

session_unset();
session_destroy();
echo '<a href="page2.php">ไปหน้า page2</a>';
?>