<?php print render($form['form_id']); ?>
<?php print render($form['form_build_id']); ?>
<br>
<div class="row clearfix">
	<div class="col-md-6 col-md-offset-3">
		<div class="container-details">
			<h2 class="centered no-margin-top uppercase">Welcome to LXV Yachts</h2>
			<div class="log-in-content">
				<?php
					print render ($form['name']);
					print render ($form['pass']);
				?>
				<div id="login">
					<div class="login-account centered">
						<?php print drupal_render($form['actions']); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br>