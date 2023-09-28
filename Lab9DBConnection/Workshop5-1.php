<?php include "connect.php" ?>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <div style="display:flex">
        <?php
        $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
        $stmt->bindParam(1, $_GET["username"]);
        $stmt->execute();
        $row = $stmt->fetch()
        ?>
        <div style="padding: 15px; text-align: center">
            <img src='img/<?= $row["username"] ?>.jpg' width='100'><br>
            ชื่อสมาชิก:<?= $row["name"] ?><br>
            ที่อยู่:<?= $row["address"] ?><br>
            อีเมล์:<?= $row["email"] ?><br>
        </div>
    </div>
</body>

</html>