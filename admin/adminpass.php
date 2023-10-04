<?php
include "./lock.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改密码</title>
    <link rel="stylesheet" href="./public/css/index.css">
</head>
<body>
<?php
include '../public/common/config.php';

global $conn;

session_start();

$id = $_SESSION['admin_userid'];

$sql= "SELECT * FROM `user` WHERE id = '$id'";
$rst = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($rst);

mysqli_close($conn);
?>
<div class="main">
    <form action="./adminupdate.php" method='post'>
        <p>用户名:</p>
        <p><label>
                <input type="text" name='username' value='<?php echo $row['username']?>' disabled>
            </label></p>

        <p>密码:</p>
        <p><label>
                <input type="password" name='password' placeholder="请输入">
            </label></p>

        <input type="hidden" name="id" value='<?php echo $row['id']?>'>

        <p><input type="submit" value="修改"></p>
    </form>
</div>

</body>
</html>