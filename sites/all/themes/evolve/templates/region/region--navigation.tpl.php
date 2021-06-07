<?php
if ($content):
  $search_block = false;
  $blocks = block_get_blocks_by_region('top');
  if ($blocks) {
    foreach ($blocks as $key => $block) {
      if ($key == 'search_form') {
        $search_block = true;
      }
    }
  }
  ?>
  <?php if ($search_block): ?>
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 pull-right right search-toggle-bar">
      <a href="#" class="search-toggle"><span class="fa fa-search"></span></a>
    </div>
    <?php endif; ?>
  <div class="<?php print $classes; ?>">
	<div class="hidden-xs hidden-sm"><?php print $content; ?></div>
	<div class="hidden-lg hidden-md">
		<div class="region-navigation">
			<?php
				$blockObject = block_load('dexp_menu', 'dexp_menu_block');
				$block = _block_get_renderable_array(_block_render_blocks(array($blockObject)));
				$output = drupal_render($block);
				print $output;
			?>
		</div>
	</div>
  </div>
<?php endif; ?>