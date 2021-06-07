<?php $img_style = 'image_gallery'; ?>
<?php $image_banner_default_uri = "public://LXVDefaultImage.jpg" ?>
<?php $image_banner_default = image_style_url($img_style, $image_banner_default_uri); ?>
<?php
	$count = 1;
	$arr_rows = $view->style_plugin->rendered_fields; ?>
		<?php
		foreach ($arr_rows as $key => $arr_row): ?>
		<?php if($arr_row): ?>
			<?php if (($count % 2) == 0): ?>
				<div class="bg-white">
					<div class="clearfix row-eq-height">
						<div class="col-md-6 col-md-push-6 col-sm-12 col-xs-12 no-padding column-vertical-align">
							<?php if(!empty($arr_row['field_image_gallery'])): ?>
								<div class="centered full-width position-relative z-index-over custom-slick-white-nav custom-slick custom-slick-side-medium custom-slick-side-nav festive-filter"><?php print $arr_row['field_image_gallery']; ?></div>
							<?php else: ?>
								<div class="centered full-width position-relative z-index-over custom-slick-white-nav custom-slick custom-slick-side-medium custom-slick-side-nav festive-filter"><img src="<?php print $image_banner_default; ?>"></div>
							<?php endif; ?>
						</div>
						<div class="col-md-6 col-md-pull-6 col-sm-12 col-xs-12 no-padding column-vertical-align">
							<div class="container-details no-padding-left no-padding-right">
								<br>
								<div class="clearfix">
									<div class="col-md-10 col-md-offset-1">
										<h4 class="no-margin-top uppercase centered"><?php print $arr_row['field_title']; ?></h4>
										<?php if(!empty($arr_row['field_inclusions'])) : ?>
											<br>
											<?php print $arr_row['field_inclusions']; ?>
										<?php endif; ?>
									</div>
								</div>
								<br>
							</div>
						</div>
					</div>
				</div>
			<?php else: ?>
				<div class="bg-white">
					<div class="clearfix row-eq-height">
						<div class="col-md-6 col-sm-12 col-xs-12 no-padding column-vertical-align">
							<?php if(!empty($arr_row['field_image_gallery'])): ?>
								<div class="centered full-width position-relative z-index-over custom-slick-white-nav custom-slick custom-slick-side-medium custom-slick-side-nav festive-filter"><?php print $arr_row['field_image_gallery']; ?></div>
							<?php else: ?>
								<div class="centered full-width position-relative z-index-over custom-slick-white-nav custom-slick custom-slick-side-medium custom-slick-side-nav festive-filter"><img src="<?php print $image_banner_default; ?>"></div>
							<?php endif; ?>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12 no-padding column-vertical-align">
							<div class="container-details no-padding-left no-padding-right">
								<br>
								<div class="clearfix">
									<div class="col-md-10 col-md-offset-1">
										<h4 class="no-margin-top uppercase centered"><?php print $arr_row['field_title']; ?></h4>
										<?php if(!empty($arr_row['field_inclusions'])) : ?>
											<br>
											<?php print $arr_row['field_inclusions']; ?>
										<?php endif; ?>
									</div>
								</div>
								<br>
							</div>
						</div>
					</div>
				</div>
		    <?php endif; ?>
		<?php endif; ?>
<?php $count++;endforeach;?>