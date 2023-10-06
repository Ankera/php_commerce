<?php
include  './_top.php';
?>

<div class='floorFooter2Right'>
    <table style="width: 100%">
        <tr>
            <th>订单号</th>
            <th>下单时间</th>
            <th>订单状态</th>
            <th>操作</th>
        </tr>
        <?php
        include '../../public/common/config.php';
        global $conn;

        if (session_status() === PHP_SESSION_NONE) {
            // 如果会话未启动，则调用 session_start()
            session_start();
        }

        $user_id=$_SESSION['home_userid'];
        $sql = "SELECT indent.*, `status`.`name` as name FROM indent, `status` WHERE indent.status_id = `status`.id AND user_id = '{$user_id}'";

        $rst=mysqlI_query($conn, $sql);

        while($row=mysqli_fetch_assoc($rst)){
            echo "<tr>";
            echo "<td><a href='./code.php?code={$row['code']}' class='cartNum'>{$row['code']}</a></td>";
            echo "<td>".date('Y-m-d H:i:s',$row['time'])."</td>";
            echo "<td>{$row['name']}</td>";
            if($row['confirm']){
                echo "<td><a href='./code.php?code={$row['code']}' class='cartNum'>评论</a></td>";
            }else{
                echo "<td><a href='./confirm.php?code={$row['code']}' class='cartNum'>确认</a></td>";
            }
            echo "</tr>";
        }

        mysqli_close($conn);
        ?>

    </table>
</div>

<?php
include  './_bottom.php'
?>