<?php global $user; ?>
<div class="container">
	<h1 class="centered">EVENT SUMMARY</h1>
	<br>
	<div class="row clearfix">
		<div class="col-md-8 commerce-line-item-actions-hide">	
			<div class="container-details container-details-border">
				<!-- Cart items -->
				<?php
					$block = module_invoke('views', 'block_view', 'commerce_cart_form_custom-cart_summary');
					if($block) :
				?>
					<h4 class="no-margin centered uppercase light-bold">Selected services</h4>
					<hr class="container-details-line-separator">
					<?php print render($block['content']); ?>
				<?php endif ?>
				<!-- Cart total -->
				<div class="right uppercase large-font">
					<?php
						$block = module_invoke('views', 'block_view', 'commerce_cart_form_custom-total_cart');
						print render($block['content']);
					?>
				</div>
				<div class="clearfix"></div>
			</div>
			<br>
		</div>
		<div class="col-md-4 validation-container">
			<?php
				global $user;
				$current_order = commerce_cart_order_load($user->uid);
				//CHECK IF CART EXIST
				if ($current_order):
			?>
				<!-- Cart total sidebar -->
				<div class="bg-dark-blue centered color-white total-container">
					<br>
					<?php
						$block = module_invoke('views', 'block_view', 'commerce_cart_form_custom-total_cart');
						print render($block['content']);
					?>
					<br>					
				</div>
				<!-- Cart validation button w/ condition sidebar -->
				<div class="container-details container-details-border">
					<?php
						//CHECK IF CART IS NOT EMPTY
						if (count($current_order->commerce_line_items) > 0) {
							$block_cap = module_invoke('commerce_cap', 'block_view', 'cap');
							print render($block_cap['content']); 
						}
						else {
							print'<a class="dexp-shortcodes-button btn full-width uppercase" href="/~neossi5/new_ms/">Go back to home</a>';
						}				
					?>
				</div>
			<?php else: ?>
				<div class="container-details container-details-border">
					<a class="dexp-shortcodes-button btn full-width uppercase" href="/~neossi5/new_ms/">Go back to home</a>
				</div>
			<?php endif;?>
			<br>
		</div>
	</div>
</div>