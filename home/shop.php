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

    if (session_status() === PHP_SESSION_NONE) {
        // 如果会话未启动，则调用 session_start()
        session_start();
    }

    $id = isset($_GET['shop_id']) ? $_GET['shop_id'] : -1;
    $sqlShop = "SELECT shop.*, brand.`name` AS bname FROM shop, brand WHERE shop.brand_id = brand.id AND shop.id = {$id}";
    $rstShop = mysqli_query($conn, $sqlShop);
    $rowNum = mysqli_num_rows($rstShop);
    $rowShop = mysqli_fetch_assoc($rstShop);
    ?>
    <div class="nav"></div>
    <div class="content">
        <div class="floor">
            <div class="floorHeader">
                <div class="left">
                    <?php
                    if($rowNum > 0){
                        ?>
                        <span><a href=''>品牌</a> &raquo; <?php echo $rowShop['bname']?></span>
                    <?php
                    } else {
                        ?>
                        <span><a href=''>首页</a> &raquo; 去购物</span>
                    <?php
                    }
                    ?>
                </div>
                <div class="right"></div>

            </div>

            <div class="floorFooter2">
                <?php
                if($rowNum === 0){
                    echo '<div>购物车为空</div>';
                } else {
                    ?>
                    <table style="width: 100%">
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
                                <a href="./cart/insert.php?id=<?php echo $rowShop['id'] ?>">
                                    <img src="public/img/cart.jpg" alt="">
                                </a>
                            </td>
                        </tr>
                    </table>
                <?php
                }
                ?>
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
                $id = isset($_GET['shop_id']) ? $_GET['shop_id'] : -1;
                $sqlComment = "SELECT `comment`.*, `user`.username as username FROM `comment`, `user` WHERE `comment`.user_id = `user`.id AND comment.shop_id = '$id'";
                $rstComment = mysqli_query($conn, $sqlComment);
                $rowCommentNum = mysqli_num_rows($rstComment);
                if($rowCommentNum === 0){
                    echo '<div>暂无评论</div>';
                }
                while ($rowCommentNum > 0 && $rowComment = mysqli_fetch_assoc($rstComment)){
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