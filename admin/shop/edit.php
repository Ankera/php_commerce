
<?php

include './_top.php'
?>
<?php
include '../../public/common/config.php';
global $conn;

$id=$_GET['id'];
$sqlShop="select * from shop where id={$id}";
$rstShop=mysqli_query($conn, $sqlShop);
$rowShop=mysqli_fetch_assoc($rstShop);
mysqli_close($conn);
?>

<div class="main">
    <form action="update.php" method='post' enctype='multipart/form-data'>
        <p>名称:</p>
        <p><label>
                <input type="text" name='name' value='<?php echo $rowShop['name']?>'>
            </label></p>

        <p>价格:</p>
        <p><label>
                <input type="text" name='price' value='<?php echo $rowShop['price']?>'>
            </label></p>

        <p>库存:</p>
        <p><label>
                <input type="text" name='stock' value='<?php echo $rowShop['stock']?>'>
            </label></p>

        <p>货架:</p>
        <p>
            <?php
            if($rowShop['shelf']){
                ?>
                <label>
                    <input type="radio" name="shelf" value='1' checked> 上架
                </label>
                <label>
                    <input type="radio" name="shelf" value='0'> 下架
                </label>
                <?php
            }else{
                ?>
                <label>
                    <input type="radio" name="shelf" value='1'> 上架
                </label>
                <label>
                    <input type="radio" name="shelf" value='0' checked> 下架
                </label>
                <?php
            }
            ?>

        </p>

        <p>品牌:</p>
        <p>
            <label>
                <select name="brand_id">
                    <?php
                    include '../../public/common/config.php';
                    global $conn;

                    $sqlClass="select * from class";
                    $rstClass=mysqli_query($conn, $sqlClass);
                    while($rowClass=mysqli_fetch_assoc($rstClass)){
                        echo "<option disabled>{$rowClass['name']}</option>";

                        $sqlBrand="select * from brand where class_id={$rowClass['id']}";
                        $rstBrand=mysqli_query($conn, $sqlBrand);

                        while($rowBrand=mysqli_fetch_assoc($rstBrand)){
                            if($rowBrand['id']==$rowShop['brand_id']){
                                echo "<option value='{$rowBrand['id']}' selected>|--{$rowBrand['name']}</option>";
                            }else{
                                echo "<option value='{$rowBrand['id']}'>|--{$rowBrand['name']}</option>";
                            }
                        }
                    }

                    mysqli_close($conn)
                    ?>
                </select>
            </label>
        </p>
        <p>原图:</p>
        <p><img alt="" src="../../public/uploads/<?php echo $rowShop['img']?>" width="100px"></p>

        <p>图片:</p>
        <p><input type="file" name="img"></p>

        <input type="hidden" name="id" value='<?php echo $rowShop['id']?>'>
        <input type="hidden" name="imgsrc" value='<?php echo $rowShop['img']?>'>

        <p><input type="submit" value="修改"></p>
    </form>
</div>
<?php

include './_bottom.php'
?>