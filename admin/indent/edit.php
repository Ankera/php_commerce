
<?php

include './_top.php'
?>
<?php
include '../../public/common/config.php';
global $conn;
$code=$_GET['code'];
$status_id=$_GET['status_id'];

$sql="select * from status";

$rst = mysqli_query($conn, $sql);

mysqli_close($conn);
?>

<div class="main">
    <div class="title"><span>编辑订单</span></div>
    <form action="update.php" method='post'>
        <p>订单号:</p>
        <p><label>
                <input type="text" name='code' value='<?php echo $code?>'>
            </label></p>

        <p>选择状态:</p>
        <p>
            <label>
                <select name="status_id">
                    <?php
                    while($row=mysqli_fetch_assoc($rst)){
                        if($status_id==$row['id']){
                            echo "<option selected value='{$row['id']}'>{$row['name']}</option>";
                        }else{
                            echo "<option value='{$row['id']}'>{$row['name']}</option>";
                        }
                    }
                    ?>
                </select>
            </label>
        </p>

        <p><input type="submit" value="修改"></p>
    </form>
</div>
<?php

include './_bottom.php'
?>