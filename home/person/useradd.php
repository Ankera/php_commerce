<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>分类页面</title>
	<link rel="stylesheet" href="../public/css/index.css">
</head>
<body>
	<div class="main">
		<?php 
			include '../header.php';
		?>
		<div class="nav"></div>
		<div class="content">
			<div class="floor">
				<div class="floorHeader">
					<div class="left">
						<span>个人中心:</span>	
					</div>
				</div>

				<div class="floorFooter2">
					<div class='floorFooter2Left'>
						<ul>
							<li><a href="">查看联系方式</a></li>
							<li><a href="">添加联系方式</a></li>
							<li><a href="">查看我的订单</a></li>
						</ul>
					</div>

					<div class='floorFooter2Right'>
						<div class="personUseraddLeft">
							<img src="../public/img/useradd.jpg" alt="">
						</div>
						<div class='personUseradd'>
							<p>姓名:</p>
							<p><input type="text" name='username' placeholder='姓名'></p>
							<p>地址:</p>
							<p><input type="text" name='addr' placeholder='地址'></p>
							<p>电话:</p>
							<p><input type="text"></p>
							<p>邮箱:</p>
							<p><input type="text"></p>

							<p><input type="submit" value="提交"></p>
						</div>
					</div>
					<div class='clear'></div>
				</div>
			</div>
		</div>	

		<?php 
			include '../footer.php';
		?>
	</div>	
</body>
</html>