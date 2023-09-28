<?php include "connect.php" ?>
<?php
$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1, $_GET["username"]);
$stmt->execute();
$row = $stmt->fetch()
?>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <form action="edituser.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="username" value="<?= "{$row["username"]}" ?>">
        password: <input type="text" name="password" value="<?= "{$row["password"]}" ?>"><br>
        name: <input type="text" name="name" value="<?= "{$row["name"]}" ?>"><br>
        address: <textarea type="text" name="address" rows="3" cols="40" value="<?= "{$row["address"]}" ?>"></textarea><br>
        tel: <input type="text" name="mobile" value="<?= "{$row["mobile"]}" ?>"><br>
        email: <input type="text" name="email" value="<?= "{$row["email"]}" ?>"><br>
        image: <input type="file" name="uploadimage" id="uploadimage"><br>
        <input type="submit" value="แก้ไขบัญชี">
    </form>
</body>

</html>