<div class="toast">
	<form action="<?php echo $form->getAction() ?>" method="<?php echo $form->getMethod() ?>">
		<fieldset>
		<?php foreach ($form->getFields() as $key => $field) {
			switch ($field->getType()) {
				case 'text':
					?>
					<?php echo $field->getLabel() ? '<label for="' . $field->getName() . '">' + $field->getLabel() + ' </label>' : "" ?><input id="<?php echo $field->getName() ?>" type="text" name="<?php echo $field->getName() ?>" placeholder="<?php echo $field->getPlaceholder() ?>" value="<?php echo $field->getValue() ?>" <?php echo $field->getRequired() ? "required" : ""; ?>>
					<?php
					break;
				case 'submit':
					?>
					</br><input type="image" name="submit" src="../img/submit.svg">
					<?php
					break;
				
				default:
					# code...
					break;
			}
		} ?>
		</fieldset>
	</form>
</div>