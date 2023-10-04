
<?php

include './_top.php'
?>

<div class="main">
    <div class="title"><span>添加分类</span></div>
    <form action="./insert.php" method='post'>
        <p>用户名:</p>
        <p><label>
                <input type="text" name='name'>
            </label></p>

        <p><input type="submit" value="添加"></p>
    </form>
</div>
<?php

include './_bottom.php'
?>