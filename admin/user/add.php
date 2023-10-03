
<?php

include './_top.php'
?>

<div class="main">
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