
<?php
include './_top.php'
?>

<?php
include '../../public/common/config.php';
global $conn;
$sql= "SELECT indent.*, `user`.username, `status`.`name` FROM indent, `user`, `status` WHERE indent.user_id = `user`.id AND indent.status_id = `status`.id";
$rst = mysqli_query($conn, $sql);
mysqli_close($conn);
?>
<div class="main">
    <table>
        <tr>
            <th>订单号</th>
            <th>用户</th>
            <th>下单时间</th>
            <th>订单状态</th>
            <th>联系方式</th>
            <th>客户确认</th>
            <th>修改</th>
            <th>删除</th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($rst)){
            echo "<tr>";
            echo "<td><a href='./code.php?code={$row['code']}'>{$row['code']}</a></td>";
            echo "<td>{$row['username']}</td>";
            echo "<td>".date('Y-m-d H:i:s',$row['time'])."</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td><a href='./touch.php?touch_id={$row['touch_id']}'>联系方式</a></td>";
            if($row['confirm']){
                echo "<td><a href='./touch.php?touch_id={$row['touch_id']}'>是</a></td>";
            }else{
                echo "<td><a href='./touch.php?touch_id={$row['touch_id']}'>否</a></td>";
            }
            echo "<td><a href='./edit.php?code={$row['code']}&status_id={$row['status_id']}'>修改</a></td>";
            echo "<td><a href='./delete.php?code={$row['code']}'>删除</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

<?php

include './_bottom.php'
?>