<?php $img_style = 'banner_list'; ?>
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
							<div class="list-hover-container">
								<div class="list-hover">
									<div class="full-width festive">
										<?php if(!empty($arr_row['field_image'])): ?>
											<div class="full-width centered festive-filter"><?php print $arr_row['field_image']; ?></div>
										<?php else: ?>
											<div class="full-width centered festive-filter"><a href="<?php print $arr_row['path']; ?>"><img src="<?php print $image_banner_default; ?>"></a></div>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-md-pull-6 col-sm-12 col-xs-12 no-padding column-vertical-align">
							<div class="bg-white no-padding-left no-padding-right">
								<br>
								<div class="clearfix">
									<div class="col-md-10 col-md-offset-1">
										<h4 class="no-margin-top uppercase centered"><?php print $arr_row['title']; ?></h4>
										<?php if(!empty($arr_row['field_sub_headline'])): ?>
											<div><i class="fa fa-quote-left small-font" aria-hidden="true"></i> <i><?php print $arr_row['field_sub_headline']; ?></i> <i class="fa fa-quote-right small-font" aria-hidden="true"></i></div>
										<?php endif; ?>
										<?php if(!empty($arr_row['body'])): ?>
											<br>
											<div><?php print $arr_row['body']; ?></div>
										<?php endif; ?>
										<?php if(!empty($arr_row['php'])): ?>
											<br>
											<div class="clearfix centered"><?php print $arr_row['php']; ?></div>
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
							<div class="list-hover-container">
								<div class="list-hover">
									<div class="full-width">
										<?php if(!empty($arr_row['field_image'])): ?>
											<div class="full-width centered festive-filter"><?php print $arr_row['field_image']; ?></div>
										<?php else: ?>
											<div class="full-width centered festive-filter"><a href="<?php print $arr_row['path']; ?>"><img src="<?php print $image_banner_default; ?>"></a></div>
										<?php endif; ?>
									</div>
								</div>
								
							</div>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12 no-padding column-vertical-align">
							<div class="bg-white no-padding-left no-padding-right">
								<br>
								<div class="clearfix">
									<div class="col-md-10 col-md-offset-1">
										<h4 class="no-margin-top uppercase centered"><?php print $arr_row['title']; ?></h4>
										<?php if(!empty($arr_row['field_sub_headline'])): ?>
											<div><i class="fa fa-quote-left small-font" aria-hidden="true"></i> <i><?php print $arr_row['field_sub_headline']; ?></i> <i class="fa fa-quote-right small-font" aria-hidden="true"></i></div>
										<?php endif; ?>
										<?php if(!empty($arr_row['body'])): ?>
											<br>
											<div><?php print $arr_row['body']; ?></div>
										<?php endif; ?>
										<?php if(!empty($arr_row['php'])): ?>
											<br>
											<div class="clearfix centered"><?php print $arr_row['php']; ?></div>
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