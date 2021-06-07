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
										<?php print $arr_row['field_image']; ?>
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
										<div><?php print $arr_row['field_sub_headline']; ?></div>
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
										<?php print $arr_row['field_image']; ?>
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
										<div><?php print $arr_row['field_sub_headline']; ?></div>
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