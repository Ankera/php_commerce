<?php
include  './_top.php';
include '../../public/common/config.php';
global $conn;

$user_id = $_SESSION['home_userid'];
$id = $_GET['id'];
$sql = "SELECT * FROM touch WHERE user_id = {$user_id} AND id = {$id}";
$rst = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($rst);
?>
    <div class='floorFooter2Right'>
        <div class="personUseraddLeft">
            <img src="../public/img/useradd.jpg" alt="">
        </div>
        <div class='personUseradd'>
            <form action="./userupdate.php" method="post">
                <p>姓名:</p>
                <p><label>
                        <input type="text" name='name' placeholder='姓名' value="<?php echo $row['name'] ?>">
                    </label></p>
                <p>地址:</p>
                <p><label>
                        <input type="text" name='addr' placeholder='地址' value="<?php echo $row['addr'] ?>">
                    </label></p>
                <p>电话:</p>
                <p><label>
                        <input type="text" name='tel' placeholder="电话" value="<?php echo $row['tel'] ?>">
                    </label></p>
                <p>邮箱:</p>
                <p><label>
                        <input type="text" name='email' placeholder="邮箱" value="<?php echo $row['email'] ?>">
                    </label></p>
                <p><input type="hidden" name="id" value='<?php echo $row['id']?>'></p>
                <p><input type="submit" value="提交"></p>
            </form>
        </div>
    </div>

<?php
include  './_bottom.php'
?>