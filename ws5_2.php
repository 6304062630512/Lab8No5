<?php include "connect.php"?>
<html>
 <head>
    <meta charset="utf-8">
    <style>
        .frame {
            display: flex;
            margin-top: 10%;
            margin-left: 30%;
        }
        .text{
            display: inline-block;
            font-size: 120%;
            padding-top: 5%;
            margin-left: 5%;
        }
    </style>
</head>
<body>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username =?");
    $stmt->bindParam(1, $_REQUEST["username"]);
    $stmt->execute();
    $row = $stmt->fetch();
    ?>

    <div class="frame">
        <img src="img/<?=$row["username"]?>.jpg" width="200">
        <div class="text">
            ชื่อสมาชิก: <?=$row["name"]?><br>
            ที่อยู่: <?=$row ["address"]?><br>
            อีเมล์: <?=$row ["email"]?><br>
        </div>
    </div>
</body>
</html>