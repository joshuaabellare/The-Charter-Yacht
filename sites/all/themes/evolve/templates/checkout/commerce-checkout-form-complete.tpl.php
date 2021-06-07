<h1 class="centered">YOUR EVENT HAS BEEN CREATED!</h1>
<br>
<div class="container">
	<div class="container-details container-details-border">
		<?php print render($form['checkout_completion_message']); ?>
	</div>
	<br>
	<div class="container-details container-details-border">
		<h4 class="no-margin centered uppercase light-bold">Your requested services:</h4>
		<hr class="container-details-line-separator">
		<!-- Checkout items -->
		<?php
			$block = module_invoke('views', 'block_view', 'order_custom-checkout_items');
			print render($block['content']);
		?>
		<!-- Checkout total -->
		<div class="right uppercase large-font">
			<?php
				$block = module_invoke('views', 'block_view', 'order_custom-order_total');
				print render($block['content']);
			?>
		</div>
	</div>
	<br>
</div>