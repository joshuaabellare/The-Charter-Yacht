<?php if(!empty($content['field_image'])) : ?>
	<?php if(isMobile()) : ?>
		<?php if(!empty($content['field_image'])): ?>
			<div class="centered-parallax-bg festive-filter-bg bg-dark-shadow" style="padding: 105px 0; background-image:url('<?php print file_create_url($node->field_image[LANGUAGE_NONE][0]['uri']); ?>');">
				<h1 class="uppercase centered no-margin huge-font text-shadow color-white letter-spacing-small"><?php print($title);?></h1>
			</div>
		<?php else: ?>
			<div class="bg-white">
				<br>
				<h1 class="uppercase centered no-margin huge-font letter-spacing-small"><?php print($title);?></h1>
				<br>
		</div>
		<?php endif;?>
		<?php if(!empty($content['body'])) : ?>
			<div class="container-details">
				<div class="container">
					<br>
					<?php print render($content['body']); ?>
					<br>
				</div>
			</div>
		<?php endif; ?>
	<?php else: ?>
		<?php if(!empty($content['field_image'])) : ?>
			<div class="centered-parallax-bg position-relative festive-filter-bg bg-dark-shadow-light" style="padding: 280px 15px; background-image:url('<?php print file_create_url($node->field_image[LANGUAGE_NONE][0]['uri']); ?>');">
				<div class="absolute-centered-details full-width column-padding">
					<div class="row clearfix">
						<div class="col-md-5 col-md-offset-6">
							<div class="container-details-opacity column-padding round-border-radius color-black">
								<br>
								<h1 class="uppercase no-margin letter-spacing-small centered"><?php print($title);?></h1>
								<br>
								<?php if(!empty($content['body'])) : ?>
									<div class="overflow-height-description">
										<?php print render($content['body']); ?>
									</div>
									<br>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	<?php endif; ?>
<?php else: ?>
	<div class="container-details">
		<div class="container">
			<br>
			<h1 class="centered uppercase no-margin huge-font letter-spacing-small"><?php print($title);?></h1>
			<br>
			<?php if(!empty($content['body'])) : ?>
				<?php print render($content['body']); ?>
				<br>
			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>
<?php
	$yacht = module_invoke('views', 'block_view', 'destination-yachts_connceted');
	$trip = module_invoke('views', 'block_view', 'destination-trip_packages_connected');
	if($yacht || $trip):
?>
<br>
	<?php if($yacht):	?>
		<div class="container-details-padding-large no-padding-top no-padding-bottom">
			<br>
			<h3 class="centered no-margin uppercase larger-font">Yachts in <?php print($title);?></h3>
			<br>
			<?php print render($yacht['content']); ?>
		</div>
	<?php endif; ?>
	<?php if($trip): ?>
		<div class="container-details-padding-large no-padding-top no-padding-bottom">
			<br>
			<h3 class="centered no-margin uppercase larger-font">Trip Ideas</h3>
			<br>
			<?php print render($trip['content']); ?>
		</div>
	<?php endif; ?>
<br>
<?php endif; ?>
