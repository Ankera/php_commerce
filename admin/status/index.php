
<?php
include './_top.php'
?>

<?php
include '../../public/common/config.php';
global $conn;
$sql= "SELECT * FROM `status`";
$rst = mysqli_query($conn, $sql);
mysqli_close($conn);
?>
<div class="main">
    <table>
        <tr>
            <th>编号</th>
            <th>名称</th>
            <th>修改</th>
            <th>删除</th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($rst)){
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td><a href='edit.php?id={$row['id']}'>修改</a></td>";
            if($row['id']==1){
                echo "<td><a href='javascript:' style='background:#888'>删除</a></td>";
            }else{
                echo "<td><a href='delete.php?id={$row['id']}'>删除</a></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</div>

<?php

include './_bottom.php'
?>