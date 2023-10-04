
<?php

include './_top.php'
?>
<div class="main">
    <div class="title"><span>添加商品</span></div>
    <form action="./insert.php" method='post' enctype='multipart/form-data'>
        <p>位置:</p>
        <p>
            <label>
                <select name="pos">
                    <option value="0">0</option>
                    <option value="1">1</option>
                </select>
            </label>
        </p>

        <p>图片:</p>
        <p><input type="file" name="img"></p>

        <p>URL:</p>
        <p><label>
                <input type="text" name='url'>
            </label></p>

        <p><input type="submit" value="添加"></p>
    </form>
</div>
<?php

include './_bottom.php'
?>