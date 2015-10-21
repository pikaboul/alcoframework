<div class="name animated <?php echo $key%2 == 0 ? 'bounceInLeft' : 'bounceInRight' ?>" id="<?php echo $value->getId() ?>" style="-webkit-animation-delay: <?php echo $key *0.5 ?>s;">
	<h1 class=""><div class="age">Bonjour, je suis</div>
		<?php echo $value->getName() ?>,<div class="age"><?php echo $value->getJob() ?> depuis <?php echo $value->getAge() ?> ans.</div>
	</h1>
	<?php if ($value->getCopyright() != ""): ?>
	<div class="cop"><?php echo $value->getCopyright() ?></div>
	<?php endif ?>
	<?php if($ADMIN): ?><div class="remove" data-id="<?php echo $value->getId() ?>">&#9587;</div><?php endif;?>
</div>