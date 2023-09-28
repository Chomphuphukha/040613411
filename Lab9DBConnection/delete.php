<?php include "connect.php" ?>
<?php
// เตรียมคำสั่งSQL สาหรับลบข้อมูล

$stmt = $pdo->prepare("DELETE FROM member WHERE username=?");
$stmt->bindParam(1, $_GET["username"]); // ก าหนดค่าลงในต าแหน่ง ?
if ($stmt->execute()) // เริ่มลบข้อมูล
    header("location: Workshop5-0.php"); // กลับไปแสดงผลหน้าข้อมูล

?>