<div class="event multi-step active">
	<br>
	<div class="container">
		<h1 class="centered no-margin-top uppercase">Your Booking Order</h1>
		<br>
		<div class="row">
			<div class="col-md-8">
				<div class="container-details">
					<h4 class="no-margin centered uppercase light-bold">Client Information</h4>
					<hr class="container-details-line-separator">
					<div><span class="semi-bold">Client Name: </span><?php print($title);?></div>
					<div><span class="semi-bold">Contact Number: </span><?php print render($content['field_contact_number']); ?></div>
					<div><span class="semi-bold">Email: </span><?php print render($content['field_email']); ?></div>
				</div>
				<br>
				<div class="container-details">
					<h4 class="no-margin centered uppercase light-bold">The Selected Services</h4>
				</div>
				<br>
				<?php
					$block = module_invoke('views', 'block_view', 'booking-product_display');
					print render($block['content']);
				 ?>
			</div>
			<div class="col-md-4 validation-container">
				<!-- Cart total sidebar -->
				<div class="bg-dark-blue centered color-white total-container">
					<br>
					<div class="semi-bold uppercase large-font">TOTAL: <?php print render($content['field_overall_price']); ?> </div>
					<br>
				</div>
				<!-- Cart validation button w/ condition sidebar -->
				<div class="container-details">
					<h4 class="no-margin centered uppercase light-bold">GET IN TOUCH</h4>
					<hr class="container-details-line-separator">
						<div class="centered"><p>For any questions please feel free to contact us at <strong>+63-2 541 4702 | +63 917 162 7737</strong></p></div>
					<a class="dexp-shortcodes-button btn full-width uppercase" data-toggle="modal" role="button" data-target="#contact-modal">Contact Us</a>
				</div>
				<br>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- Contact Us -->
<div class="modal fade" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="checkout">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title uppercase" id="checkout">Contact Us</h4>
			</div>
			<div class="modal-body">
				<div class="centered">Fill in the information and our personal event planner will contact you with the details provided to us.</div>
				<br>
				<?php 
					$block = module_invoke('entityform_block', 'block_view', 'contact_us');
					print render($block['content']); 
				?>
			</div>
		</div>
	</div>
</div>