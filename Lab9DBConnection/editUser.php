<?php include "connect.php" ?>

<?php
$stmt = $pdo->prepare("UPDATE member SET password=?, name=?, address=?, mobile=?, email=? WHERE username=?");
$stmt->bindParam(1, $_POST["password"]);
$stmt->bindParam(2, $_POST["name"]);
$stmt->bindParam(3, $_POST["address"]);
$stmt->bindParam(4, $_POST["mobile"]);
$stmt->bindParam(5, $_POST["email"]);
$stmt->bindParam(6, $_POST["username"]);
$changed = $stmt->execute();
if($_FILES["uploadimage"]["tmp_name"]){
    $target_file = 'img'.$_POST["username"].'.jpg';
    $is_uploaded = move_uploaded_file($_FILES["uploadimage"]["tmp_name"], $target_file);
    if($is_uploaded){
        header("location: workshop5-1.php?username=" . $_POST["username"]);
        die();
    }
}
if($changed)
    header("location: workshop5-1.php?username=" . $_POST["username"]);
?>