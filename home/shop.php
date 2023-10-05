<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>分类页面</title>
    <link rel="stylesheet" href="public/css/index.css">
</head>
<body>
<div class="main">
    <?php
    include 'header.php';
    include "../public/common/config.php";
    global $conn;
    $sqlShop = "SELECT shop.*, brand.`name` AS bname FROM shop, brand WHERE shop.brand_id = brand.id AND shop.id = 4";
    $rstShop = mysqli_query($conn, $sqlShop);
    $rowShop = mysqli_fetch_assoc($rstShop);
    ?>
    <div class="nav"></div>
    <div class="content">
        <div class="floor">
            <div class="floorHeader">
                <div class="left">
                    <span><a href=''>品牌</a> &raquo; <?php echo $rowShop['bname']?></span>
                </div>

            </div>

            <div class="floorFooter2">
                <table width='100%'>
                    <tr>
                        <th>图片</th>
                        <th>价格</th>
                        <th>库存</th>
                        <th>购物车</th>
                    </tr>
                    <tr>
                        <td>
                            <img style="width: 120px; height: 120px;" src="../public/uploads/<?php echo $rowShop['img']?>" alt="">
                        </td>
                        <td><?php echo $rowShop['price']?>元</td>
                        <td><?php echo $rowShop['stock']?></td>
                        <td>
                            <a href="">
                                <img src="public/img/cart.jpg" alt="">
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>


        <div class="floor">
            <div class="floorHeader">
                <div class="left">
                    <span>商品评论:</span>
                </div>

            </div>

            <div class="floorFooter2">
                <?php
                $id = $_GET['shop_id'];
                $sqlComment = "SELECT `comment`.*, `user`.username as username FROM `comment`, `user` WHERE `comment`.user_id = `user`.id AND comment.shop_id = '$id'";
                $rstComment = mysqli_query($conn, $sqlComment);
                while ($rowComment = mysqli_fetch_assoc($rstComment)){
                    ?>
                    <div class="comment">
                        <div class='left'>
                            <div class="logo">
                                <img src="public/img/logo2.png" alt="">
                            </div>
                            <div class="name"><?php echo $rowComment['username'] ?></div>
                        </div>
                        <div class="right">
                            <span><?php echo $rowComment['content'] ?></span>
                        </div>
                    </div>
                <?php
                }
                mysqli_close($conn);
                ?>
            </div>
        </div>
    </div>

    <?php
    include 'footer.php';
    ?>
</div>
</body>
</html>