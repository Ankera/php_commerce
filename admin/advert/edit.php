
<?php

include './_top.php'
?>
<?php
include '../../public/common/config.php';
global $conn;

$id=$_GET['id'];
$sql="select * from `advert` where id={$id}";
$rst=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($rst);
mysqli_close($conn);
?>

<div class="main">
    <form action="./update.php" method='post' enctype='multipart/form-data'>
        <p>位置:</p>
        <p>
            <label>
                <select name="pos">
                    <?php
                    switch($row['pos']){
                        case 0:
                            echo "<option value='0' selected>0</option>";
                            echo "<option value='1'>1</option>";
                            break;

                        case 1:
                            echo "<option value='0'>0</option>";
                            echo "<option value='1' selected>1</option>";
                            break;
                    }
                    ?>

                </select>
            </label>
        </p>

        <p>原图:</p>
        <p><img alt="" src="../../public/uploads/<?php echo $row['img']?>" width='200px'></p>

        <p>图片:</p>
        <p><input type="file" name="img"></p>

        <p>URL:</p>
        <p><label>
                <input type="text" name='url' value='<?php echo $row['url']?>'>
            </label></p>

        <input type="hidden" name="id" value='<?php echo $row['id']?>'>
        <input type="hidden" name="imgsrc" value='<?php echo $row['img']?>'>

        <p><input type="submit" value="修改"></p>
    </form>
</div>
<?php

include './_bottom.php'
?>