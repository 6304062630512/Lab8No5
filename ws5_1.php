<?php include "connect.php" ?>
<html>
 <head>
    <meta charset="utf-8">
    <style>
        .frame {
            text-align: center;
            background-color: pink;
            margin-left: 20%;
            margin-right: 20%;
            margin-top: 10%;
        }
        .box {
            text-align: center;
            padding: 3%;
            display: inline-block;
         }
        a, a:visited {
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <div class="frame">
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();
    ?>

    <?php
        while($row = $stmt->fetch()){ ?>
            <div class="box">
            <a href="ws5_2.php?username=<?=$row["username"]?>">
            <img src='img/<?=$row['username']?>.jpg' width='100'><br><br>
            <?=$row["name"]?>
        </a><br>
        </div>
        <?php
        }
        ?>
        </div>
    </body>
</html>