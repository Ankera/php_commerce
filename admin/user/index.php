
<?php
include './_top.php'
?>

<?php
include '../../public/common/config.php';
global $conn;
$sql= "SELECT * FROM `user`";
$rst = mysqli_query($conn, $sql);
mysqli_close($conn);
?>
<div class="main">
    <table>
        <tr>
            <th>编号</th>
            <th>用户名</th>
            <th>修改</th>
            <th>删除</th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($rst)){
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['username']}</td>";
            echo "<td><a href='edit.php?id={$row['id']}'>修改</a></td>";
            echo "<td><a href='delete.php?id={$row['id']}'>删除</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

<?php

include './_bottom.php'
?>