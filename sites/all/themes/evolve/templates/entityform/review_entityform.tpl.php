<?php
	global $user;
	$admin_role = array_intersect(array('administrator', 'website admin'), array_values($user->roles));
?>
<br>
<div class="container">
	<div class="container-details">
		<h1 class="centered">Leave a Review</h1>
		<div class="centered">
				Thank you for booking with <span class="semi-bold">The Charter Yacht</span>. We hope you enjoyed our service, and we would love to hear your feedback.
		</div>
		<div class="container-details-padding-large">
			<?php print render($form['field_rating']); ?>
			<p class="small-font">( Click to rate )</p>
			<?php 
			print render($form['field_title']); 
			print render($form['field_message']); 
			?>
			<?php 
				if (empty($admin_role) ? FALSE : TRUE){
					print render($form['field_review_reference']);
				}
				else{
					hide($form['field_review_reference']);
				}
			?>
			<div class="row clearfix">
				<div class="centered col-md-8 col-md-offset-2">
					<?php print drupal_render($form['actions']['captcha']); ?>
					<?php print drupal_render($form['actions']['submit']); ?>
					<?php print drupal_render_children($form); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
