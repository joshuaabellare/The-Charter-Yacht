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
	<div class="container-details">
		<br>
		<h1 class="no-margin centered"><?php print($title);?></h1>
		<br>
		<?php if(!empty($content['body'])) : ?>
			<div class="container-details">
				<div class="container">
					<br>
					<?php print render($content['body']); ?>
					<br>
				</div>
			</div>
		<?php endif; ?>
	</div>
<?php else: ?>
	<?php if(!empty($content['field_video_link'])) : ?>
		<div class="position-relative overflow-hidden">
			<div class="video-background-container-medium position-relative no-link">
				<div class="video-background absolute-centered-details full-width">
					<iframe width="100%" height="100%" src="<?php print $str_video; ?>?controls=0&amp;showinfo=0&amp;rel=0&amp;autoplay=1&amp;loop=1&amp;mute=1&amp;playlist=<?php print $playlist; ?>&amp;VQ=HD1080" frameborder="0" allowfullscreen=""></iframe>
				</div>
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php else: ?>
			<div class="centered-cover-bg position-relative festive-filter-bg" style="padding: 280px 15px; background-image:url('<?php print $image_banner_default; ?>');">
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
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	<?php endif; ?>
<?php endif; ?>
<?php
	$trip_package = module_invoke('views', 'block_view', 'package-trip_package');
	$trip_types = module_invoke('views', 'block_view', 'package-trip_types');
	if(($trip_package) || ($trip_types)):
?>
	<?php if($trip_package): ?>
		<div class="container-details-padding-large no-padding-top no-padding-bottom">
			<br>
			<br>
			<h3 class="centered no-margin uppercase larger-font">Selected Packages</h3>
			<br>
			<?php print render($trip_package['content']); ?>
			<br>
			<div class="centered">
				<div class="col-md-3 col-centered no-float">
					<a href="/trip-ideas" class="dexp-shortcodes-button btn line-color btn-link uppercase full-width light-bold" role="button">View other packages</a>
				</div>
			</div>
			<br>
			<br>
		</div>
	<?php endif; ?>
	<?php if($trip_types): ?>
			<?php print render($trip_types['content']); ?>
	<?php endif; ?>
<?php endif; ?>
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