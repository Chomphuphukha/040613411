<?php include "connect.php" ?>
<?php
$stmt = $pdo->prepare("INSERT INTO member VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bindParam(1, $_POST["username"]);
$stmt->bindParam(2, $_POST["password"]);
$stmt->bindParam(3, $_POST["name"]);
$stmt->bindParam(4, $_POST["address"]);
$stmt->bindParam(5, $_POST["mobile"]);
$stmt->bindParam(6, $_POST["email"]);
$stmt->execute();  // เริ่มเพิ่มข้อมูล
if($_FILES["uploadimage"]["tmp_name"]){
    $target_file = 'img'.$_POST["username"].'.jpg';
    $is_uploaded = move_uploaded_file($_FILES["uploadimage"]["tmp_name"], $target_file);
    if($is_uploaded){
        header("location: workshop5-1.php?username=" . $_POST["username"]);
        die();
    }
}
header("location: workshop5-1.php?username=" . $_POST["username"]);

?>