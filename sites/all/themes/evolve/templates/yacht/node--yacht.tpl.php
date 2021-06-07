<?php $img_style = 'full_width_banner'; ?>
<?php $image_banner_default_uri = "public://LXVYachtDefaultBanner.jpg" ?>
<?php $image_banner_default = image_style_url($img_style, $image_banner_default_uri); ?>
<?php 
	if(!empty($content['field_video_link'])) {
		$str_video_banner = $content['field_video_link']['#items'][0]['video_url'];
		$str_video = str_replace('watch?v=', 'embed/', $str_video_banner);
		$playlist = substr($str_video_banner, strpos($str_video_banner, "=") + 1); 
	}
	if(!empty($content['field_image'])) {
		$fc_image_thumb = image_style_url($img_style, $node->field_image[LANGUAGE_NONE][0]['uri']);
	}
?>
<?php if(isMobile()) : ?>
	<?php if(!empty($content['field_video_link'])): ?>
		<?php if(!empty($content['field_image'])): ?>
			<div class="bg-centered centered" style="background-image:url('<?php print $fc_image_thumb; ?>'); padding:100px 0;" data-toggle="modal" data-target="#video-modal">
				<div class="fa-stack fa-2x color-peach">			  
					<i class="fa fa-circle-thin fa-stack-2x"></i>
			 		<i class="fa fa-play large-font fa-stack-1x"></i>
				</div>
			</div>
		<?php else: ?>
			<div class="bg-centered centered" style="background-image:url('<?php print $image_banner_default; ?>'); padding:100px 0;" data-toggle="modal" data-target="#video-modal">
				<div class="fa-stack fa-2x color-peach">
					<i class="fa fa-circle-thin fa-stack-2x"></i>
			 		<i class="fa fa-play large-font fa-stack-1x"></i>
				</div>
			</div>
		<?php endif;?>
	<?php else: ?>
		<?php if(!empty($content['field_image'])): ?>
			<div class="full-width festive-filter"><img src="<?php print $fc_image_thumb; ?>" /></div>
		<?php endif;?>
	<?php endif;?>
<?php else: ?>
	<?php if(!empty($content['field_video_link'])) : ?>
		<div class="position-relative overflow-hidden">
			<div class="video-background-container-small position-relative no-link">
				<div class="video-background absolute-centered-details full-width">
					<iframe width="100%" height="100%" src="<?php print $str_video; ?>?controls=0&amp;showinfo=0&amp;rel=0&amp;autoplay=1&amp;loop=1&amp;mute=1&amp;playlist=<?php print $playlist; ?>&amp;VQ=HD1080" frameborder="0" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>
	<?php else: ?>
		<?php if(!empty($content['field_image'])) : ?>
			<div class="full-width festive-filter"><img src="<?php print $fc_image_thumb; ?>" /></div>
		<?php else: ?>
			<div class="full-width festive-filter"><img src="<?php print $image_banner_default; ?>"></div>
		<?php endif; ?>
	<?php endif; ?>
<?php endif;?>
<div class="container-details">
	<div class="container">
		<h1 class="no-margin column-padding no-padding-left no-padding-right letter-spacing-small"><?php print($title);?></h1>
		<div class="row clearfix specifics">
			<br>
			<?php if(!empty($content['field_brand'])): ?>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="wrap-content left inline-block">
						<div class="semi-bold uppercase small-font color-brown">Model</div>
						<div class="large-font bold"><?php print render($content['field_brand']); ?></div>
						<br>
					</div>
				</div>
			<?php endif;?>
			<?php if(!empty($content['field_size'])): ?>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="wrap-content left inline-block">
						<div class="semi-bold uppercase small-font color-brown">Length (Ft)</div>
						<div class="large-font bold"><?php print render($content['field_size']); ?></div>
						<br>
					</div>
				</div>
			<?php endif;?>
			<?php if(!empty($content['field_bed'])): ?>
				<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="wrap-content left inline-block">
						<div class="semi-bold uppercase small-font color-brown">Overnight Guests</div>
						<div class="large-font bold"><?php print render($content['field_bed']); ?></div>
						<br>
					</div>
				</div>
			<?php endif;?>
			<?php if(!empty($content['field_location_connected'])): ?>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="wrap-content left inline-block">
						<div class="semi-bold uppercase small-font color-brown">Location</div>
						<div class="large-font bold"><?php print render($content['field_location_connected']); ?></div>
						<br>
					</div>
				</div>
			<?php endif;?>
			<?php if(!empty($content['field_cabins'])): ?>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="wrap-content left inline-block">
						<div class="semi-bold uppercase small-font color-brown">Cabins</div>
						<div class="large-font bold"><?php print render($content['field_cabins']); ?></div>
						<br>
					</div>
					</div>
			<?php endif;?>
			<?php if(!empty($content['field_max_capacity'])): ?>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="wrap-content left inline-block">
						<div class="semi-bold uppercase small-font color-brown">Day Trip Guests</div>
						<div class="large-font bold"><?php print render($content['field_max_capacity']); ?></div>
						<br>
					</div>	
				</div>
			<?php endif;?>
			<?php if(!empty($content['field_year'])): ?>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="wrap-content left inline-block">
						<div class="semi-bold uppercase small-font color-brown">Year / Refit</div>
						<div class="large-font bold"><?php print render($content['field_year']); ?></div>
						<br>
					</div>
				</div>
			<?php endif;?>
			<?php if(!empty($content['field_speed'])): ?>
				<div class="col-md-4 col-sm-6 col-xs 6">
					<div class="wrap-content left inline-block">
						<div class="semi-bold uppercase small-font color-brown">Cruising Speed (KT)</div>
						<div class="large-font bold"><?php print render($content['field_speed']); ?></div>
						<br>
					</div>
				</div>
				<?php endif;?>
			<?php if(!empty($content['field_crew'])): ?>
				<div class="col-md-4 col-sm-6 col-xs 6">
					<div class="wrap-content left inline-block">
						<div class="semi-bold uppercase small-font color-brown">Crews</div>
						<div class="large-font bold"><?php print render($content['field_crew']); ?></div>
						<br>
					</div>
				</div>
			<?php endif;?>
		</div>
	</div>
</div>
<?php if((!empty($content['field_charter_rates'])) || (!empty($content['field_event_rates']))): ?>
	<div class="bg-dark-blue container-details-padding-large no-padding-left no-padding-right">
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-8 col-md-offset-2">
					<?php if(!empty($content['field_charter_rates'])) : ?>
						<div class="color-white">
							<div class="semi-bold uppercase color-brown">Overnight Rates</div>
							<br>
							<div><?php print render($content['field_charter_rates']); ?></div>
						</div>
					<?php endif; ?>
					<?php if((!empty($content['field_charter_rates'])) && (!empty($content['field_event_rates']))): ?>
						<hr class="dashed">
					<?php endif; ?>
					<?php if(!empty($content['field_event_rates'])) : ?>
						<div class="color-white">
							<div class="semi-bold uppercase color-brown">Day Trip Rates</div>
							<br>
							<div><?php print render($content['field_event_rates']); ?></div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php $block_package_inclusion = module_invoke('views', 'block_view', 'package-inclusion_details'); if($block_package_inclusion): ?>
	<?php print render($block_package_inclusion['content']); ?>
<?php endif; ?>
<?php if(!empty($content['field_virtual_tour'])) : ?>
	<?php if(isMobile()) : ?>
			<div class="bg-white">
				<br>
				<br>
				<h3 class="centered no-margin uppercase larger-font">Virtual Tour</h3>
				<br>
				<br>
				<div class="centered"><a class="dexp-shortcodes-button btn" data-toggle="modal" data-target="#virtual-tour-modal">View 360 Virtual Tour</a></div>
				<br>
				<br>
			</div>
	<?php else: ?>
			<div class="bg-white">
				<br>
				<br>
				<h3 class="centered no-margin uppercase larger-font">Virtual Tour</h3>
				<br>
				<br>
				<?php print render($content['field_virtual_tour']['#items'][0]['value']); ?>
			</div>
	<?php endif; ?>
<?php endif; ?>
<?php if(!empty($content['field_image_gallery'])) : ?>
	<div class="bg-white">
		<br>
		<br>
		<h3 class="centered no-margin uppercase larger-font">Gallery</h3>
		<br>
		<br>
		<div class="column-padding no-padding-top no-padding-bottom">
			<?php
				$block = module_invoke('views', 'block_view', 'gallery-gallery_grid');
				print render($block['content']);
			?>
		</div>
		<br>
		<br>
	</div>
<?php endif; ?>
<?php
    $blockObject = block_load('block', '16');
    $block = _block_get_renderable_array(_block_render_blocks(array($blockObject)));
    $output = drupal_render($block);
    print $output;
?>
<?php if(!empty($content['field_video_link'])) : ?>
	<div class="modal fade" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
		    <div class="modal-content">
		      	<div class="modal-header">
		       		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		       		<h4 class="modal-title" id="myModalLabel"><?php print($title);?></h4>
		      	</div>
			    <div class="modal-body no-padding">
					<div class="video-background-mobile position-relative">
						<iframe width="100%" height="300" src="<?php print $str_video; ?>?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=1&playlist=<?php print $playlist; ?>" frameborder="0" allowfullscreen></iframe>
					</div>
			    </div>
		    </div>
		</div>
	</div>
<?php endif; ?>
<?php if(!empty($content['field_virtual_tour'])) : ?>
	<div class="modal fade" id="virtual-tour-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
		    <div class="modal-content">
		      	<div class="modal-header">
		       		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		       		<h4 class="modal-title" id="myModalLabel"><?php print($title);?></h4>
		      	</div>
			    <div class="modal-body no-padding">
			    	<?php print render($content['field_virtual_tour']['#items'][0]['value']); ?>
			    </div>
		    </div>
		</div>
	</div>
<?php endif; ?>