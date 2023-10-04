<?php
include "./lock.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>电商</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        .home-top {
            height: 64px;
            line-height: 64px;
            font-size: 24px;
            padding-left: 16px;
            background-color: #272822;
            color:#fff;
            margin-bottom: 24px;
        }
        .container {
            width: 100%;
            display: flex;
        }
        .container .left {
            width: 120px;
        }

        .left-inner {
            width: 90%;
        }
        .container .right {
            width: calc(100% - 120px);
        }
    </style>
</head>

<body>
<div class="home-top">
    <?php
    include './top.php';
    ?>
</div>
<div class="container">
    <div class="left">
        <div class="left-inner">
            <?php
            include './left.php';
            ?>
        </div>
    </div>
    <div class="right">

<?php
include './right.php';
?>

    </div>
</div>
</body>
</html>