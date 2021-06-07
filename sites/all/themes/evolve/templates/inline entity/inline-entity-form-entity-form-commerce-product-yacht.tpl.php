<?php print render($form['product_details']['sku']); ?>
<?php print render($form['product_details']['title']); ?>
<?php print render($form['product_details']['commerce_price']);	?>
<?php print render($form['product_details']['status']); ?>
<div id="dexp-accordions-wrapper-package" class="panel-group default">
	<?php for($i=1; $i<=5; $i++):?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title"><a class="collapsed" data-parent="#dexp-accordions-wrapper" data-toggle="collapse" href="#dexp-accordion-item-package--<?php print $i; ?>">PACKAGE VARIATION <?php print $i; ?></a></h4>
		</div>
		<div class="panel-collapse collapse" id="dexp-accordion-item-package--<?php print $i; ?>">
			<div class="panel-body">
				<div class="row clearfix">
					<div class="col-md-4"><?php print render($form['product_details']['field_minimum_criteria_' . $i]); ?></div>
					<div class="col-md-4"><?php print render($form['product_details']['field_maximum_criteria_' . $i]); ?></div>
					<div class="col-md-4"><?php print render($form['product_details']['field_ratio_' . $i]); ?></div>
					<div class="col-md-4"><?php print render($form['product_details']['field_variation_display_' . $i]); ?></div>
				</div>
				<div><?php print render($form['product_details']['field_variation_' . $i]); ?></div>
			</div>
		</div>
	</div>
	<?php endfor; ?>
</div>
<br>
<div class="centered"><?php print drupal_render_children($form);?></div>
<br>