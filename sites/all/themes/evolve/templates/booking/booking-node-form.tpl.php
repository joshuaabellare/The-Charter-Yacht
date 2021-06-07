<?php hide($form['additional_settings']); ?>
<?php hide($form['actions']['delete']); ?>
<br>
<ul class="custom-nav-bars nav nav-tabs centered" role="tablist">
	<li role="presentation" class="active"><a href="#information" aria-controls="information" role="tab" data-toggle="tab">Client Information</a></li>
	<li role="presentation"><a href="#order" aria-controls="seo" role="tab" data-toggle="tab">Booking Order</a></li>
</ul>
<br>
<div class="container">
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="information">
			<div class="container-details container-details-border">
				<h3 class="no-margin centered uppercase">Client Information</h3>
				<hr class="container-details-line-separator">
				<?php print render($form['title']); ?>
				<?php print render($form['field_title']); ?>
				<?php print render($form['field_contact_number']); ?>
				<?php print render($form['field_email']); ?>
			</div>
			<br>
		</div>
		<div role="tabpanel" class="tab-pane" id="order">
			<div class="container-details container-details-border">
				<h3 class="no-margin centered uppercase">Booking Order</h3>
				<hr class="container-details-line-separator">
				<?php print render($form['field_overall_price']); ?>		
				<?php print render($form['field_product_collection']); ?>		
			</div>
			<br>
		</div>
	</div>
</div>
<div class="container-details centered actions-form-container">
	<?php print drupal_render($form['actions']['submit']); ?>
</div>
<div class="hide"><?php print drupal_render_children($form);?></div>