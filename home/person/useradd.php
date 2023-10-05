<?php
include  './_top.php'
?>
<div class='floorFooter2Right'>
    <div class="personUseraddLeft">
        <img src="../public/img/useradd.jpg" alt="">
    </div>
    <div class='personUseradd'>
        <form action="./userinsert.php" method="post">
            <p>姓名:</p>
            <p><label>
                    <input type="text" name='name' placeholder='姓名'>
                </label></p>
            <p>地址:</p>
            <p><label>
                    <input type="text" name='addr' placeholder='地址'>
                </label></p>
            <p>电话:</p>
            <p><label>
                    <input type="text" name='tel' placeholder="电话">
                </label></p>
            <p>邮箱:</p>
            <p><label>
                    <input type="text" name='email' placeholder="邮箱">
                </label></p>

            <p><input type="submit" value="提交"></p>
        </form>
    </div>
</div>

<?php
include  './_bottom.php'
?>