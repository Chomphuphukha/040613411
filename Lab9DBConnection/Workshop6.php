<?php include "connect.php" ?>
<html>

<head>
    <meta charset="utf-8">
    <script>
        function confirmDelete(username) { // ฟังก์ชนจะถูกเรียกถ้าผู้ใช ั คลิกที่ ้ link ลบ
            var ans = confirm("ต้องการลบสมาชิก" + username); // แสดงกล่องถามผู้ใช ้
            if (ans == true) // ถ้าผู้ใชกด ้ OK จะเข ้าเงื่อนไขนี้
                document.location = "delete.php?username=" + username; // ส่งusernameไปให ้ไฟล์ ิ delete.php
        }
    </script>
</head>

<body>
    <?php
    $stmt = $pdo->prepare("SELECT username,name,address,email FROM member");
    $stmt->execute();
    while($row = $stmt->fetch()): 
    ?>
        <?= "ชื่อสมาชิก: {$row["name"]}<br>" ?>
        <?= "ที่อยู่: {$row["address"]}<br>" ?>
        <?= "อีเมล์: {$row["email"]}<br>" ?>
        <a href='workshop9.php?username=<?= $row["username"] ?>'>แก้ไข</a> |
        <a href='#' onclick='confirmDelete("<?= $row["username"] ?>")'>ลบ</a>
        <hr>
    <?php
    endwhile;
    ?>
</body>

</html>