
<?php

include './_top.php'
?>
<?php
include '../../public/common/config.php';
global $conn;

$id=$_GET['id'];
$sqlBrand="select * from `brand` where id='$id'";
$rstBrand=mysqli_query($conn, $sqlBrand);
$rowBrand=mysqli_fetch_assoc($rstBrand);

$sqlClass="select * from `class`";
$rstClass=mysqli_query($conn, $sqlClass);

mysqli_close($conn);
?>

<div class="main">
    <form action="./update.php" method='post'>
        <p>品牌名称:</p>
        <p><label>
                <input type="text" name='name' value='<?php echo $rowBrand['name']?>'>
            </label></p>

        <p>选择分类:</p>
        <p>
            <label>
                <select name="class_id">
                    <?php
                    while($rowClass=mysqli_fetch_assoc($rstClass)){
                        if($rowClass['id']==$rowBrand['class_id']){
                            echo "<option selected value='{$rowClass['id']}'>{$rowClass['name']}</option>";
                        }else{
                            echo "<option value='{$rowClass['id']}'>{$rowClass['name']}</option>";
                        }
                    }
                    ?>
                </select>
            </label>
        </p>

        <input type="hidden" name="id" value='<?php echo $rowBrand['id']?>'>

        <p><input type="submit" value="修改"></p>
    </form>
</div>
<?php

include './_bottom.php'
?>