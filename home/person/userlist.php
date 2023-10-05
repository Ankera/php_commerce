<?php
if (session_status() === PHP_SESSION_NONE) {
    // 如果会话未启动，则调用 session_start()
    session_start();
}
include  './_top.php';
include '../../public/common/config.php';
global $conn;

$id = $_SESSION['home_userid'];
$sql = "SELECT * FROM touch WHERE user_id = {$id}";
$rst = mysqli_query($conn, $sql);

mysqli_close($conn);
?>

<div class='floorFooter2Right'>
    <table style="width: 100%">
        <tr>
            <th>姓名</th>
            <th>地址</th>
            <th>电话</th>
            <th>邮箱</th>
            <th>修改</th>
            <th>删除</th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($rst)){
            echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['addr']}</td>
                <td>{$row['tel']}</td>
                <td>{$row['email']}</td>
                <td><a href='./useredit.php?id={$row['id']}'>修改</a></td>
                <td><a href='./userdel.php?id={$row['id']}'>删除</a></td>
            </tr>";
        }
        ?>

    </table>
</div>
<?php
include  './_bottom.php'
?>