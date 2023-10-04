
<?php
include './_top.php'
?>

<?php
include '../../public/common/config.php';
global $conn;
$sql= "
SELECT `shop`.*, `brand`.name AS bname, `class`.name AS cname FROM `shop`, `brand`, `class` WHERE `shop`.brand_id = `brand`.id AND `brand`.class_id = `class`.id";
$rst = mysqli_query($conn, $sql);
mysqli_close($conn);
?>
<div class="main">
    <table>
        <tr>
            <th>编号</th>
            <th>名称</th>
            <th>图片</th>
            <th>价格</th>
            <th>库存</th>
            <th>货架</th>
            <th>品牌</th>
            <th>分类</th>
            <th>修改</th>
            <th>删除</th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($rst)){
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td><img alt='' src='../../public/uploads/{$row['img']}' width='50px'></td>";
            echo "<td>{$row['price']}</td>";
            echo "<td>{$row['stock']}</td>";
            if($row['shelf']){
                echo "<td>上架</td>";
            }else{
                echo "<td>下架</td>";
            }
            echo "<td>{$row['bname']}</td>";
            echo "<td>{$row['cname']}</td>";
            echo "<td><a href='./edit.php?id={$row['id']}'>修改</a></td>";
            echo "<td><a href='./delete.php?id={$row['id']}&img={$row['img']}'>删除</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

<?php

include './_bottom.php'
?>