<?php
	$count = 1;
	$arr_rows = $view->style_plugin->rendered_fields; ?>
		<?php
		foreach ($arr_rows as $key => $arr_row): ?>
		<?php if($arr_row): ?>
			<div role="tabpanel" class="tab-pane <?php if($count == 1) print'active';?>" id="item-<?php print $count; ?>">
				<div class="clearfix row-eq-height">
					<div class="col-md-4 col-sm-12 col-xs-12 no-padding column-vertical-align bg-dark-blue">
						<br>
						<div class="no-margin centered uppercase semi-bold color-white larger-font letter-spacing-small line-height-large"><?php print $arr_row['field_title']; ?></div><br>
						<div class="no-margin centered uppercase semi-bold color-white letter-spacing-small"><?php print $arr_row['field_rate']; ?></div><br>
					</div>
					<div class="col-md-8 col-sm-12 col-xs-12 no-padding column-vertical-align">
						<?php print $arr_row['field_thumbnail']; ?>
					</div>
				</div>
				<div class="clearfix column-padding no-padding-left no-padding-right bg-white">
					<div class="col-md-10 col-md-offset-1 small-font">
						<br>
						<?php print $arr_row['field_inclusions']; ?>
						<br>
					</div>
				</div>
				<br>
			</div>
		<?php endif; ?>
<?php $count++;endforeach;?>