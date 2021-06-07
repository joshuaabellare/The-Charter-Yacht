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
		<h1 class="uppercase no-margin column-padding no-padding-left no-padding-right letter-spacing-small"><?php print($title);?></h1>
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
			<?php if(!empty($content['field_year'])): ?>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="wrap-content left inline-block">
						<div class="semi-bold uppercase small-font color-brown">Year / Refit</div>
						<div class="large-font bold"><?php print render($content['field_year']); ?></div>
						<br>
					</div>
				</div>
			<?php endif;?>
			<?php if(!empty($content['field_engines'])): ?>
				<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="wrap-content left inline-block">
						<div class="semi-bold uppercase small-font color-brown">Engines</div>
						<div class="large-font bold"><?php print render($content['field_engines']); ?></div>
						<br>
					</div>
				</div>
			<?php endif;?>
			<?php if(!empty($content['field_bed'])): ?>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="wrap-content left inline-block">
						<div class="semi-bold uppercase small-font color-brown">Charter Guests</div>
						<div class="large-font bold"><?php print render($content['field_bed']); ?></div>
						<br>
					</div>
				</div>
			<?php endif;?>
			<?php if(!empty($content['field_single_bed'])): ?>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="wrap-content left inline-block">
						<div class="semi-bold uppercase small-font color-brown">Single Beds</div>
						<div class="large-font bold"><?php print render($content['field_single_bed']); ?></div>
						<br>
					</div>
				</div>
			<?php endif;?>
			<?php if(!empty($content['field_double_bed'])): ?>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="wrap-content left inline-block">
						<div class="semi-bold uppercase small-font color-brown">Double Beds</div>
						<div class="large-font bold"><?php print render($content['field_double_bed']); ?></div>
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
			<?php if(!empty($content['field_beam'])): ?>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="wrap-content left inline-block">
						<div class="semi-bold uppercase small-font color-brown">Beam (Ft)</div>
						<div class="large-font bold"><?php print render($content['field_beam']); ?></div>
						<br>
					</div>
				</div>
			<?php endif;?>
			<?php if(!empty($content['field_draft'])): ?>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="wrap-content left inline-block">
						<div class="semi-bold uppercase small-font color-brown">Draft (Ft)</div>
						<div class="large-font bold"><?php print render($content['field_draft']); ?></div>
						<br>
					</div>
				</div>
			<?php endif;?>
			<?php if(!empty($content['field_gallons'])): ?>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="wrap-content left inline-block">
						<div class="semi-bold uppercase small-font color-brown">Gallons</div>
						<div class="large-font bold"><?php print render($content['field_gallons']); ?></div>
						<br>
					</div>
				</div>
			<?php endif;?>
			<?php if(!empty($content['field_max_speed'])): ?>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="wrap-content left inline-block">
						<div class="semi-bold uppercase small-font color-brown">Max Speed (Kt)</div>
						<div class="large-font bold"><?php print render($content['field_max_speed']); ?></div>
						<br>
					</div>
				</div>
			<?php endif;?>
			<?php if(!empty($content['field_cruising_speed'])): ?>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="wrap-content left inline-block">
						<div class="semi-bold uppercase small-font color-brown">Cruising Speed (Kt)</div>
						<div class="large-font bold"><?php print render($content['field_cruising_speed']); ?></div>
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
			<?php if(!empty($content['field_bathroom'])): ?>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="wrap-content left inline-block">
						<div class="semi-bold uppercase small-font color-brown">Bathroom</div>
						<div class="large-font bold"><?php print render($content['field_bathroom']); ?></div>
						<br>
					</div>
				</div>
			<?php endif;?>
			<?php if(!empty($content['field_horsepower'])): ?>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="wrap-content left inline-block">
						<div class="semi-bold uppercase small-font color-brown">Horsepower</div>
						<div class="large-font bold"><?php print render($content['field_horsepower']); ?></div>
						<br>
					</div>
				</div>
			<?php endif;?>
		</div>
	</div>
</div>
<?php $block_package_inclusion = module_invoke('views', 'block_view', 'package-inclusion_details'); if($block_package_inclusion): ?>
	<?php print render($block_package_inclusion['content']); ?>
<?php endif; ?>
<?php if(!empty($content['field_virtual_tour'])) : ?>
	<?php if(isMobile()) : ?>
			<br>
			<br>
			<h3 class="centered no-margin uppercase larger-font">Virtual Tour</h3>
			<br>
			<br>
			<div class="centered"><a class="dexp-shortcodes-button btn" data-toggle="modal" data-target="#virtual-tour-modal">View 360 Virtual Tour</a></div>
			<br>
			<br>
	<?php else: ?>
			<br>
			<br>
			<h3 class="centered no-margin uppercase larger-font">Virtual Tour</h3>
			<br>
			<br>
			<?php print render($content['field_virtual_tour']['#items'][0]['value']); ?>
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








