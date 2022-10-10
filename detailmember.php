<?php include "connect.php"?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $stmt=$pdo->prepare("SELECT username,name,address,mobile,email FROM member WHERE username = ?");
        $stmt->bindParam(1,$_GET["uname"]);
        $stmt->execute();
        $row=$stmt->fetch();
        ?>
        Username : <?=$row["username"]?><br>
        ชื่อ : <?=$row["name"]?><br>
        ที่อยู่ : <?=$row["address"]?><br>
        เบอร์โทรศัพท์ : <?=$row["mobile"]?><br>
        อีเมล์ : <?=$row["email"]?>
    </body>
</html>