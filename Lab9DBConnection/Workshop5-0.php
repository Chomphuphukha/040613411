<?php include "connect.php" ?>
    <html>
        <head>
            <meta charset="utf-8">
        </head>
        <body>
            <?php
            $stmt = $pdo->prepare("SELECT username,name,address,email FROM member");
            $stmt->execute();
            while($row = $stmt->fetch()):
            ?>
                <?= "ชื่อสมาชิก: {$row["name"]}<br>ที่อยู่: {$row["address"]}<br>อีเมล์: {$row["email"]}" ?><br>
                คลิกที่รูปเพื่อดูข้อมูล<br>
                <a href="Workshop5-1.php?username=<?="{$row["username"]}"?>">
                     <img src='img/<?="{$row["username"]}"?>.jpg'/><hr>
                </a>
            <?php
            endwhile;
            ?>
    </body>
</html>