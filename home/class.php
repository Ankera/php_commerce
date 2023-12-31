<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>分类</title>
    <link rel="stylesheet" href="public/css/index.css">
</head>
<body>
<div class="main">
    <?php
    include 'header.php';
    include "../public/common/config.php";
    global $conn;

    if (session_status() === PHP_SESSION_NONE) {
        // 如果会话未启动，则调用 session_start()
        session_start();
    }

    $id = $_GET['class_id'];
    $sqlGoods = "SELECT shop.*, brand.`name` AS bname, class.`name` AS cname FROM shop, brand, class WHERE shop.brand_id = brand.id AND brand.class_id = class.id AND brand.class_id = {$id} AND shop.shelf = 1 LIMIT 0, 4";
    $rstGoods = mysqli_query($conn, $sqlGoods);
    ?>
    <div class="nav"></div>
    <div class="content">
        <div class="floor">
            <div class="floorHeader">
                <div class="left">
                    <span>品牌
                    <?php
                    $bname = $_GET['bname'];
                    echo $bname;
                    ?>
                    </span>
                </div>
                <div class="right">
                </div>
            </div>

            <div class="floorFooter2">
                <?php
                while($rowGoods=mysqli_fetch_assoc($rstGoods)){
                  ?>
                    <a href="./shop.php?shop_id=<?php echo $rowGoods['id']?>">
                        <div class='shop'>
                            <div class="shopImg">
                                <img src="../public/uploads/<?php echo $rowGoods['img']?>" alt="">
                            </div>
                            <div class="nav"></div>
                            <div class="shopInfo">
                                <span class='shopName'><?php echo $rowGoods['name']?></span>
                                <span class='shopPrice'><?php echo $rowGoods['price']?>元</span>
                            </div>
                        </div>
                    </a>
                <?php
                }
                mysqli_close($conn);
                ?>

                <div class='clear'></div>
            </div>
        </div>
    </div>

    <?php
    include 'footer.php';
    ?>
</div>
</body>
</html>