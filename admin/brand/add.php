
<?php

include './_top.php'
?>

<?php

include '../../public/common/config.php';
global $conn;

$sql= "SELECT * FROM `class`";
$rst = mysqli_query($conn, $sql);

mysqli_close($conn)

?>
<div class="main">
    <div class="title"><span>添加品牌</span></div>
    <form action="./insert.php" method='post'>
        <p>品牌名称:</p>
        <p><label>
                <input type="text" name='name' placeholder="请输入">
            </label></p>

        <p>选择分类:</p>
        <p>
            <label>
                <select name="class_id">
                    <?php
                    while($row=mysqli_fetch_assoc($rst)){
                        echo "<option value='{$row['id']}'>{$row['name']}</option>";
                    }
                    ?>
                </select>
            </label>
        </p>

        <p><input type="submit" value="添加"></p>
    </form>
</div>
<?php

include './_bottom.php'
?>