
<?php
include './_top.php'
?>

<?php
include '../../public/common/config.php';
global $conn;
$sql= "
SELECT `comment`.*, `user`.username AS username, `shop`.name AS name FROM `comment`, `user`, `shop` WHERE `comment`.user_id = `user`.id AND `comment`.shop_id = `shop`.id";
$rst = mysqli_query($conn, $sql);
mysqli_close($conn);
?>
<div class="main">
    <table>
        <tr>
            <th>编号</th>
            <th>用户</th>
            <th>商品</th>
            <th>评论</th>
            <th>时间</th>
            <th>删除</th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($rst)){
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['username']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['content']}</td>";
            echo "<td>".date('Y-m-d',$row['time'])."</td>";
            echo "<td><a href='delete.php?id={$row['id']}'>删除</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

<?php

include './_bottom.php'
?>