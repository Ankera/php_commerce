
<?php

include './_top.php'
?>
<?php
include '../../public/common/config.php';
global $conn;
$code=$_GET['code'];


$sql="select indent.price,indent.num,shop.name,shop.img,indent.confirm, indent.shop_id from indent,shop where indent.shop_id=shop.id and indent.code='{$code}'";

$rst = mysqli_query($conn, $sql);

mysqli_close($conn);
?>

<div class='floorFooter2Right'>
    <table style="width: 100%">
        <tr>
            <th>名称</th>
            <th>图片</th>
            <th>价格</th>
            <th>数量</th>
            <th>合计</th>
            <th>评论</th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($rst)){
            echo "<tr>";
            echo "<td>{$row['name']}</td>";
            echo "<td><img alt='' src='../../public/uploads/thumb_{$row['img']}' width='100px'></td>";
            echo "<td>{$row['price']}</td>";
            echo "<td>{$row['num']}</td>";
            echo "<td>".$row['price']*$row['num']."元</td>";
            if($row['confirm']){
                echo "<td><a href='./comment.php?shop_id={$row['shop_id']}' class='cartNum'>评论</a></td>";
            }else{
                echo "<td><a href='./orderlist.php' class='cartNum' style='background:#888' onclick=\"alert('请您先确认该订单!')\">评论</a></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</div>

<?php

include './_bottom.php'
?>