<?php if(!empty($content['field_php_filter'])) : ?>
	<?php print render($content['field_php_filter']); ?>
<?php endif; ?>
<div class="container-details">
	<div class="container">
		<br>
		<h1 class="centered no-margin huge-font letter-spacing-small"><?php print($title);?></h1>
		<br>
		<?php if(!empty($content['body'])) : ?>
			<?php print render($content['body']); ?>
			<br>
		<?php endif; ?>
	</div>
</div>