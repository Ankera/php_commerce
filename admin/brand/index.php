
<?php
include './_top.php'
?>

<?php
include '../../public/common/config.php';
global $conn;
$sql= "SELECT `brand`.*, `class`.name AS cname FROM `brand`, `class` WHERE `brand`.class_id=`class`.id";
$rst = mysqli_query($conn, $sql);
mysqli_close($conn);
?>
<div class="main">
    <table>
        <tr>
            <th>编号</th>
            <th>品牌名称</th>
            <th>分类名称</th>
            <th>修改</th>
            <th>删除</th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($rst)){
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['cname']}</td>";
            echo "<td><a href='./edit.php?id={$row['id']}'>修改</a></td>";
            echo "<td><a href='./delete.php?id={$row['id']}'>删除</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

<?php

include './_bottom.php'
?>