<?php  if (count($errors) > 0) : ?>
	<p>
		<?php foreach ($errors as $error) : ?>
			<p><?php echo $error ?></p>
		<?php endforeach ?>
	<p>
<?php  endif ?>
