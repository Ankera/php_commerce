
<?php

include './_top.php'
?>

<div class="main">
    <div class="title"><span>添加用户</span></div>
    <form action="./insert.php" method='post'>
        <p>用户名:</p>
        <p><input type="text" name='username'></p>

        <p>密码:</p>
        <p><input type="password" name='password'></p>

        <p><input type="submit" value="添加"></p>
    </form>
</div>
<?php

include './_bottom.php'
?>