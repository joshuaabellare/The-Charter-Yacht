<?php /* print drupal_render($form->my_captcha_element); */ ?>
<?php print render($form['field_full_name']); ?>
<?php print render($form['field_email']); ?>
<?php print render($form['field_contact_number']); ?>
<?php print render($form['field_message']); ?>
<div class="row clearfix">
	<div class="centered">
		<?php print drupal_render($form['actions']['captcha']); ?>
		<?php print drupal_render($form['actions']['submit']); ?>
	</div>
</div>
<div class="hide">
	<?php print drupal_render_children($form); ?>
</div>


