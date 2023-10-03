
<?php

include './_top.php'
?>
<?php
include '../../public/common/config.php';
global $conn;
$id = $_GET['id'];
$sql= "SELECT * FROM `class` WHERE id = '$id'";
$rst = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($rst);

mysqli_close($conn);
?>

<div class="main">
    <form action="./update.php" method='post'>
        <p>用户名:</p>
        <p><label>
                <input type="text" name='name' value='<?php echo $row['name']?>'>
            </label></p>

        <input type="hidden" name="id" value='<?php echo $row['id']?>'>

        <p><input type="submit" value="修改"></p>
    </form>
</div>
<?php

include './_bottom.php'
?>