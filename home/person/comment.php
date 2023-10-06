<?php
include  './_top.php'
?>
    <div class='floorFooter2Right'>
        <form action="./commentinsert.php" method='post'>
            <p>请发表评论:</p>
            <p>
                <label>
                    <textarea name="content" class='PersonComment'></textarea>
                </label>
            </p>

            <input type="hidden" name="shop_id" value='<?php echo $_GET['shop_id']?>'>
            <p>
                <input type="submit" value="提交" class='commit'>
            </p>
        </form>

    </div>

<?php
include  './_bottom.php'
?>