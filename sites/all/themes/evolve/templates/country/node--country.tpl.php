<?php if(!empty($content['field_image'])) : ?>
	<div class="position-relative">
		<div class="bg-centered clearfix" style="background-image:url('<?php print file_create_url($node->field_image[LANGUAGE_NONE][0]['uri']); ?>');padding: 165px 0;">
			<h1 class="huge-font light-bold color-white uppercase centered text-shadow letter-spacing no-margin-bottom"><?php print($title);?></h1>
			<br>
			<h2 class="light-bold color-white uppercase centered text-shadow letter-spacing-small no-margin"><?php print render($content['field_sub_headline']); ?></h2>
			<br>
		</div>
	</div>
<?php else: ?>
	<div class="position-relative">
		<?php if (empty($content['field_image_gallery']['#items']['1'])): ?>
			<div class="position-relative">
			<div class="bg-centered clearfix" style="background-image:url('<?php print file_create_url($node->field_image_gallery[LANGUAGE_NONE][0]['uri']); ?>');padding: 165px 0;">
				<h1 class="huge-font light-bold color-white uppercase centered text-shadow letter-spacing no-margin-bottom"><?php print($title);?></h1>
				<br>
				<h2 class="light-bold color-white uppercase centered text-shadow letter-spacing-small no-margin"><?php print render($content['field_sub_headline']); ?></h2>
				<br>
			</div>
		</div>
		<?php else: ?>
			<div class="centered full-width">
				<?php $block = module_invoke('views', 'block_view', 'gallery-gallery_two_slides'); if ($block) : ?>
					<div class="centered full-width container-details-dark no-padding position-relative custom-slick">
						<?php print render($block['content']); ?>
					</div>
				<?php endif; ?>
			</div>
			<h1 class="uppercase centered"><?php print($title);?></h1>
			<div class="brd-headling margin-auto"></div>
			<br>
			<?php if(!empty($content['field_sub_headline'])) : ?>
				<h4 class="no-margin centered light-bold"><i class="fa fa-quote-left"></i> <?php print render($content['field_sub_headline']); ?> <i class="fa fa-quote-right"></i></h4>
				<br>
			<?php endif; ?>
		<?php endif; ?>
	</div>
<?php endif; ?>
<div class="container-details">
	<div class="container">
		<?php if(!empty($content['body'])) : ?>
			<br>
			<br>
			<div class="row clearfix">
				<?php print render($content['body']); ?>
			</div>
			<br>
			<br>
		<?php endif; ?>
	</div>
</div>
<?php $block = module_invoke('views', 'block_view', 'yacht-yacht_connected'); if ($block) : ?>
<div class="column-padding bg-brown centered large-font semi-bold uppercase letter-spacing-small color-white">
	<div>Go to yacht charters.<span class="rteindent1"><a class="dexp-shortcodes-button btn semi-bold line-white" href="./yacht-charters-list" role="button">View our fleet</a></span></div>
</div>
<br>
<br>
	<div class="container">
		<h3 class="light-bold centered no-margin uppercase">Featured Yachts</h3>
		<br>
		<div class="centered full-width no-padding">
			<?php print render($block['content']); ?>
		</div>
	</div>
<br>
<br>
<?php endif; ?>

<?php if(!empty($content['field_inclusion_details'])) : ?>
	<?php
		$field_collections = field_get_items('node', $node, 'field_inclusion_details');
		if($field_collections): 
		$printset = 'SET';
	?>
		<?php	
			foreach ($field_collections as $field_collection):				
		?> 
			<?php
				$field_collection_item = entity_load('field_collection_item', array($field_collection['value']));
				if($field_collection_item):
				
			?>
				<?php foreach ($field_collection_item as $item): ?>
					
						<?php 
						
							if(!empty($item->field_title)){
								$fc_title = $item->field_title['und'][0]['value']; 
							}
							if(!empty($item->field_inclusions)){
								$fc_inclusions = $item->field_inclusions['und'][0]['value'];
							}
							if(!empty($item->field_thumbnail['und'][0]['uri'])){
								$img_style = 'image_gallery';  
								$fc_thumbnail = image_style_url($img_style, $item->field_thumbnail['und'][0]['uri']);
							}
							if ($printset == "SET"): ?>
								<div class="row-eq-height row clearfix position-relative">
									<div class="col-md-6 column-vertical-align bg-centered bg-dark-shadow" style="background-image:url('<?php print $fc_thumbnail; ?>');">
										<div class="container-details-padding-large clearfix">
											<h3 class="huge-font light-bold color-white uppercase centered text-shadow letter-spacing no-margin"><?php print $fc_title; ?></h3>
										</div>
									</div>
									<div class="col-md-6 no-padding bg-dark-blue column-vertical-align">
										<div class="container-details-padding-large color-white">
											<div class="overflow-height-description">
												<?php if(!empty($item->field_inclusions)) : ?><?php print $fc_inclusions; ?><?php endif; ?>
												<div class="overflow-height-description-expand absolute-read-more-btn z-index-over">
													<a class="dexp-shortcodes-button btn btn-sm">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="faded-bottom"></div>
								</div>
							<?php else: ?>
								<div class="row-eq-height row clearfix position-relative">
									<div class="col-md-6 col-md-push-6 column-vertical-align bg-centered bg-dark-shadow" style="background-image:url('<?php print $fc_thumbnail; ?>');">
										<div class="container-details-padding-large clearfix">
											<h3 class="huge-font light-bold color-white uppercase centered text-shadow letter-spacing no-margin"><?php print $fc_title; ?></h3>
										</div>
									</div>
									<div class="col-md-6 col-md-pull-6 no-padding bg-brown column-vertical-align">
										<div class="container-details-padding-large color-white">
											<div class="overflow-height-description">
												<?php if(!empty($item->field_inclusions)) : ?><?php print $fc_inclusions; ?><?php endif; ?>
												<div class="overflow-height-description-expand absolute-read-more-btn z-index-over">
													<a class="bg-dark-blue dexp-shortcodes-button btn btn-sm">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="faded-bottom"></div>
								</div>
							<?php endif; 
							
							if ($printset == 'SET') {
								$printset = 'UNSET';
							}
							elseif ($printset == 'UNSET'){
								$printset = 'SET';
							}
							
						?>
				<?php endforeach; ?>
			<?php endif; ?>
		<?php endforeach; ?>
	<?php endif; ?>
<?php endif; ?>
<?php if(!empty($content['field_image_gallery'])) : ?>
	<div class="container-details">
		<h3 class="light-bold centered no-margin-bottom uppercase">Gallery</h3>
		<br>
		<hr class="container-details-line-separator">
		<br>
		<div class="container">
			<?php
				$block = module_invoke('views', 'block_view', 'gallery-gallery_grid');
				print render($block['content']);
			?>
		</div>
	</div>
<?php endif; ?>
