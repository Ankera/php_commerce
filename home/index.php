<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>电商商场</title>
    <link rel="stylesheet" href="public/css/index.css">
</head>
<body>
<div class="main">

    <?php
    include 'header.php';

    include "../public/common/config.php";
    global $conn;
    $sql = 'SELECT * FROM advert';
    $rst = mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($rst)){
        $rowAds[$row['pos']] = $row;
    }
    mysqli_close($conn);
    ?>

    <div class="nav"></div>
    <div class="ads">
        <img src="../public/uploads/<?php echo $rowAds['0']['img'] ?>" alt="">
    </div>
    <div class="nav"></div>
    <div class="content">
        <?php
            include "../public/common/config.php";
            global $conn;
            $sql = 'SELECT * FROM class';
            $rst = mysqli_query($conn, $sql);
            $f = 1;
            while($row=mysqli_fetch_assoc($rst)){
        ?>
                <div class="floor">
                    <div class="floorHeader">
                        <div class="left">
                            <span><?php echo $f ?>F <?php echo $row['name']?></span>
                        </div>
                        <div class="right">
                            <span>热销产品</span>
                            <span>
							<a href="">更多</a>
						</span>
                        </div>
                    </div>
                    <div class="floorFooter">
                    <?php
                    $sqlGoods = "SELECT shop.*, brand.`name` AS bname, class.`name` AS cname FROM shop, brand, class WHERE shop.brand_id = brand.id AND brand.class_id = class.id AND brand.class_id = {$row['id']} AND shop.shelf = 1 LIMIT 0, 4";
                    $rstGoods = mysqli_query($conn, $sqlGoods);
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
                    ?>
                    </div>
                </div>
        <?php
                $f+=1;
            }
            mysqli_close($conn);
        ?>

    </div>
    <div class="nav"></div>
    <div class="ads">
        <img src="../public/uploads/<?php echo $rowAds['1']['img'] ?>" alt="">
    </div>
    <div class="nav"></div>

    <?php
    include 'footer.php';
    ?>
</div>
</body>
</html>