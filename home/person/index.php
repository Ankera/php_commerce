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
						<h3>欢迎您回家!</h3>
						<div class='fenmu'>
							<img src="../public/img/fenmu.jpg" alt="">	
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