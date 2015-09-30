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
				<div class="name" id="<?php echo $value['id'] ?>">
					<h1 class="animated <?php echo $key%2 == 0 ? 'bounceInLeft' : 'bounceInRight' ?>" style="-webkit-animation-delay: <?php echo $key *0.5 ?>s;"><div class="age">Bonjour, je suis</div>
						<?php echo $value['name'] ?>,<div class="age"><?php echo $value['job'] ?> depuis <?php echo $value['age'] ?> ans.</div>
					</h1>
					<?php if ($value['copyright'] != ""): ?>
					<div class="cop"><?php echo $value['copyright'] ?></div>
					<?php endif ?>
					<div class="remove" data-id="<?php echo $value['id'] ?>">&#9587;</div>
				</div>
			<?php endforeach ?>
		<?php endif ?>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="./js/script.js"></script>
</body>
</html>