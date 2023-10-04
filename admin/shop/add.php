
<?php

include './_top.php'
?>
<div class="main">
    <div class="title"><span>添加商品</span></div>
    <form action="./insert.php" method='post' enctype='multipart/form-data'>
        <p>名称:</p>
        <p><label>
                <input type="text" name='name' placeholder="请输入">
            </label></p>

        <p>价格:</p>
        <p><label>
                <input type="text" name='price' placeholder="请输入">
            </label></p>

        <p>库存:</p>
        <p><label>
                <input type="text" name='stock' placeholder="请输入">
            </label></p>

        <p>货架:</p>
        <p>
            <label>
                <input type="radio" name="shelf" value='1' checked> 上架
            </label>
            <label>
                <input type="radio" name="shelf" value='0'> 下架
            </label>
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
                            echo "<option value='{$rowBrand['id']}'>|--{$rowBrand['name']}</option>";
                        }
                    }

                    mysqli_close($conn)
                    ?>
                </select>
            </label>
        </p>

        <p>图片:</p>
        <p><input type="file" name="img"></p>

        <p><input type="submit" value="添加"></p>
    </form>
</div>
<?php

include './_bottom.php'
?>