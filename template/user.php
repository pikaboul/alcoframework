<div class="name" id="<?php echo $value->getId() ?>">
	<h1 class="animated <?php echo $key%2 == 0 ? 'bounceInLeft' : 'bounceInRight' ?>" style="-webkit-animation-delay: <?php echo $key *0.5 ?>s;"><div class="age">Bonjour, je suis</div>
		<?php echo $value->getName() ?>,<div class="age"><?php echo $value->getJob() ?> depuis <?php echo $value->getAge() ?> ans.</div>
	</h1>
	<?php if ($value->getCopyright() != ""): ?>
	<div class="cop"><?php echo $value->getCopyright() ?></div>
	<?php endif ?>
	<div class="remove" data-id="<?php echo $value->getId() ?>">&#9587;</div>
</div>