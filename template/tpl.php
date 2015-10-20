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
		<?php if (count($users) > 0): ?>
			<?php foreach ($users as $key => $value): ?>
				<?php Engine::render('user', array("value"=>$value, "key"=>$key)); ?>
			<?php endforeach ?>
		<?php else: ?>
			<div class="hint">Press 
				<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 26 26" style="enable-background:new 0 0 26 26;" xml:space="preserve">
				<g>
					<path style="stroke:#Turquoise;" d="M25,2H9C8.449,2,8,2.449,8,3c0,0,0,7,0,9s-2,2-2,2H1c-0.551,0-1,0.449-1,1v8c0,0.551,0.449,1,1,1h24
						c0.551,0,1-0.449,1-1V3C26,2.449,25.551,2,25,2z M22,14c0,1.436-1.336,4-4,4h-3.586l1.793,1.793c0.391,0.391,0.391,1.023,0,1.414
						C16.012,21.402,15.756,21.5,15.5,21.5s-0.512-0.098-0.707-0.293l-3.5-3.5c-0.391-0.391-0.391-1.023,0-1.414l3.5-3.5
						c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L14.414,16H18c1.398,0,2-1.518,2-2v-2c0-0.553,0.447-1,1-1s1,0.447,1,1V14z"
						/>
				</g>
				</svg> to add a new person.
			</div>
		<?php endif ?>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="./js/script.js"></script>
</body>
</html>