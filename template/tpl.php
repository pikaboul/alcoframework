<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
	<link href="./css/animate.css" rel="stylesheet" />
	<link href="./css/style.css" rel="stylesheet" />
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>
<body>
	<div class="content">
		<?php foreach ($users as $key => $value): ?>
			<?php Engine::render('user', array("value"=>$value, "key"=>$key)); ?>
		<?php endforeach ?>
		<div class="hint"><span>Press </span>
			<div class="img">
				<svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 405 408" style="enable-background:new 0 0 405 408;" xml:space="preserve">
					<style type="text/css">
						.st0{fill:none;stroke:#40E0D0;stroke-width:30;stroke-miterlimit:10;}
					</style>
					<image style="display:none;overflow:visible;" width="50" height="50" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAABjklEQVRoQ+2Z4VHDMAyFXzdghI7Q
					DaCTQDdgE0aATaATUDZgBJgA7nENp9PFaSrZsS4n/2wjV5/es+y4G6xkbFbCgQSJpmQqkoo0qkBL
					a91WzvkDwFdpzpYgP5VB9gDeEsRR1VUqYrWwLEYIayWIsHYq4ljnf6HS32mtWtbaAXgySnMn4ror
					wmRejSAyLEFqWUsrwhZoGfqMJC3Lw+BjYdJqG6IGsVpE5ynnPQKQ60k+myBTleN3cxR5AMB3kcOE
					B8MrQojnM8DLBExoEAlBlm8AXNSfI8qEBRmDYLKngr1CglwLQbZwIBqCSdJKY3aS4tycbcfPurff
					LYB3AEzKM7qDMHl2pnsPRQRFhvw1DO+euIcU76AUOJ8rNYXFd3YNw8R4LpsLUxJ1cZAxm9WA6QKi
					YXiqZZv1qNINZIDhju6F4FxdQZgAW7JHiWHNdAdxduT/8AS59D5Sq9KWeVw3jbVuUSyJ65gEGboP
					W2mEwQ22y19vi8LPuUxYNCHrjyWItXKt4lKRVpW1zrsaRX4BGZ+aM8/0spwAAAAASUVORK5CYII=" transform="matrix(12.18 0 0 12.18 -102 -100)">
					</image>
					<polygon class="st0" points="390,15 390,393 15,393 15,131 186,131 185,15 "/>
					<polyline class="st0" points="281,162 281,260 113.2,260 "/>
					<polyline class="st0" points="161.8,320.2 113.2,260 158.5,209.2 "/>
				</svg>
			</div>
			<span> to add a new person.</span>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="./js/script.js"></script>
</body>
</html>