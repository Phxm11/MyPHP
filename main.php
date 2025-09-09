<?php
 include 'conn.php';  // เรียกใช้ไฟล์ conn.php เพื่อเชื่อมต่อฐานข้อมู
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
        <div class="col-5">
        <div class="card">
            <div class="card-header">
                ฟอร์มกรอกข้อมูล
            </div>
            <div class="card-body ">

            <form action="insert.php" method="post">
                <div class="mb-3">
                    <label class="form-label">ชื่อ</label>
                    <input type="text" class="form-control" name ="fname">
                </div>

                 <div class="mb-3">
                    <label class="form-label">สกุล</label>
                    <input type="text" class="form-control" name = "sname">
                </div> 
                
                <button type="submit" class="btn btn-primary ">บันทึก</button>
            </form>
            </div>
        </div>
</div>

<div class="col-5">
        <div class="card">
            <div class="card-header">
                ตารางแสดงข้อมูล
            </div>
            <div class="card-body">
            <table class="table tabble-hover">
                <tr>
                    <th>ไอดี</th>
                    <th>ชื่อ</th>
                    <th>สกุล</th>
                    <th>จัดการ</th>
                </tr>
                <?php
                 $sql = "SELECT * FROM `student`";
                 $result = $conn->query($sql);
                 while ($row=$result->fetch_assoc()){
                    echo "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["Fname"]."</td>
                    <td>".$row["Sname"]."</td>
                    <td>
                    <a href='delete.php?id=".$row["id"]."' class='btn btn-danger'>ลบ</a> 
                    <a href='edit.php?id=".$row["id"]."' class='btn btn-success'>แก้ไข</a> 
                    </td>
                    </tr>";  
                 }
                
                ?>


            </table>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>