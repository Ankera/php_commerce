
<?php
include './_top.php'
?>

<?php
include '../../public/common/config.php';
global $conn;

$touch_id = $_GET['touch_id'];
$sql = "SELECT * FROM touch WHERE id = {$touch_id}";
$rst = mysqli_query($conn, $sql);

mysqli_close($conn);
?>

<div class="main">
    <table>
        <tr>
            <th>编号</th>
            <th>姓名</th>
            <th>地址</th>
            <th>电话</th>
            <th>邮箱</th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($rst)){
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['addr']}</td>";
            echo "<td>{$row['tel']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

<?php

include './_bottom.php'
?>
