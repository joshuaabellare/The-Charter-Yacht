<?php if(!empty($content['field_image'])) : ?>
	<?php if(isMobile()) : ?>
		<?php if(!empty($content['field_image'])): ?>
			<div class="centered-parallax-bg festive-filter-bg bg-dark-shadow" style="padding: 105px 0; background-image:url('<?php print file_create_url($node->field_image[LANGUAGE_NONE][0]['uri']); ?>');">
				<h1 class="uppercase centered no-margin huge-font text-shadow color-white letter-spacing-small"><?php print($title);?></h1>
				<?php $block = module_invoke('views', 'block_view', 'destination-charters_select_country'); if($block): ?>
					<br>
					<div class="container">
						<div class="bg-dark-blue-chosen">
							<select class="chzn-select disable-search" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
								<option value="" >Choose Destination</option>
								<?php print render($block['content']); ?>
							</select>
						</div>
					</div>
					<br>
				<?php endif; ?>
			</div>
		<?php else: ?>
			<div class="bg-white">
				<br>
				<h1 class="centered no-margin huge-font letter-spacing-small"><?php print($title);?></h1>
				<br>
			</div>
		<?php endif;?>
		<?php if(!empty($content['body'])) : ?>
			<div class="bg-white">
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
								<h1 class="no-margin letter-spacing-small centered"><?php print($title);?></h1>
								<br>
								<?php if(!empty($content['body'])) : ?>
									<div class="overflow-height-description">
										<?php print render($content['body']); ?>
									</div>
									<br>
								<?php endif; ?>
								<?php $block = module_invoke('views', 'block_view', 'destination-charters_select_country'); if($block): ?>
									<div class="bg-dark-blue-chosen">
										<select class="chzn-select disable-search" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
											<option value="" >Choose Destination</option>
											<?php print render($block['content']); ?>
										</select>
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
	<div class="container-details no-padding">
		<div class="container">
			<br>
			<h1 class="centered no-margin huge-font letter-spacing-small"><?php print($title);?></h1>
			<br>
			<?php $block = module_invoke('views', 'block_view', 'destination-charters_select_country'); if($block): ?>
				<div class="clearfix row">
					<div class="bg-dark-blue-chosen col-md-offset-4 col-md-4">
						<select class="chzn-select disable-search" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
							<option value="" >Choose Destination</option>
							<?php print render($block['content']); ?>
						</select>
					</div>
				</div>
				<br>
			<?php endif; ?>
			<?php if(!empty($content['body'])) : ?>
				<?php print render($content['body']); ?>
				<br>
			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>
<?php
	$blockObject = block_load('views', 'yacht-yacht_lists');
	$block = _block_get_renderable_array(_block_render_blocks(array($blockObject)));
	$output = drupal_render($block);
	if($output): 
?>
	<br>
	<br>
	<div class="container-details-padding-large no-padding-top no-padding-bottom">
		<?php print $output; ?>
	</div>
	<br>
<?php endif; ?>
<?php if(!empty($content['field_php_filter'])) : ?>
	<?php print render($content['field_php_filter']); ?>
<?php endif; ?>