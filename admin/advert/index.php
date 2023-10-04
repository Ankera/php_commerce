
<?php
include './_top.php'
?>

<?php
include '../../public/common/config.php';
global $conn;
$sql= "SELECT * FROM advert";
$rst = mysqli_query($conn, $sql);
mysqli_close($conn);
?>
<div class="main">
    <table>
        <tr>
            <th>编号</th>
            <th>图片</th>
            <th>位置</th>
            <th>URL</th>
            <th>修改</th>
            <th>删除</th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($rst)){
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td><img alt='' src='../../public/uploads/{$row['img']}' width='100px'></td>";
            echo "<td>{$row['pos']}</td>";
            echo "<td>{$row['url']}</td>";
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