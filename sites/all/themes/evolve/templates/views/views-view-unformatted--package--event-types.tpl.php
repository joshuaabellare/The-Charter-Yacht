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
							<div class="centered full-width position-relative z-index-over festive-filter"><?php print $arr_row['field_image']; ?></div>
						</div>
						<div class="col-md-6 col-md-pull-6 col-sm-12 col-xs-12 no-padding column-vertical-align">
							<div class="container-details no-padding-left no-padding-right">
								<div class="clearfix">
									<div class="col-md-10 col-md-offset-1">
										<h4 class="no-margin-top uppercase centered"><?php print $arr_row['title']; ?></h4>
										<br>
										<?php print $arr_row['body']; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php else: ?>
				<div class="bg-white">
					<div class="clearfix row-eq-height">
						<div class="col-md-6 col-sm-12 col-xs-12 no-padding column-vertical-align">
							<div class="centered full-width position-relative z-index-over festive-filter"><?php print $arr_row['field_image']; ?></div>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12 no-padding column-vertical-align">
							<div class="container-details no-padding-left no-padding-right">
								<div class="clearfix">
									<div class="col-md-10 col-md-offset-1">
										<h4 class="no-margin-top uppercase centered"><?php print $arr_row['title']; ?></h4>
										<br>
										<?php print $arr_row['body']; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		    <?php endif; ?>
		<?php endif; ?>
<?php $count++;endforeach;?>