<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <link rel="stylesheet" href="public/css/index.css">
</head>
<body>
<div class="main">
    <?php
    include 'header.php';
    if (session_status() === PHP_SESSION_NONE) {
        // 如果会话未启动，则调用 session_start()
        session_start();
    }
    ?>
    <div class="nav"></div>
    <div class="content2">
        <div class="login">
            <div class='loginForm2'>
                <form action="./reginsert.php" method="post">
                    <p><label>
                            <input type="text" name='username' placeholder='用户名'>
                        </label></p>

                    <p><label>
                            <input type="password" name='password' placeholder='密码'>
                        </label></p>

                    <p><label>
                            <input type="password" name='repassword' placeholder='确认密码'>
                        </label></p>

                    <p class='vcodeImg'><img src="vcode.php" onclick="this.src='vcode.php?rand='+Math.random()"></p>
                    <p><label>
                            <input type="text" placeholder='验证码' name='fcode'>
                        </label></p>

                    <p><input type="submit" value="登录"></p>
                </form>
            </div>
        </div>
    </div>
    <div class="nav"></div>
    <?php
    include 'footer.php';
    ?>
</div>
</body>
</html>