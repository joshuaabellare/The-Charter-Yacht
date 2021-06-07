<?php global $base_url; ?>
<?php 
	$theme_key = 'evolve'; 
	$logo_url = theme_get_setting('logo_path', $theme_key);
?>
<section <?php print $attributes;?>>
	<div class="<?php print $container_class;?>">
		<div class="row">
			<?php print $content; ?>
			<div class="clearfix hidden-lg hidden-md">
				<div class="hidden-lg hidden-md col-xs-4 col-sm-2">
					<?php if ($logo_url): ?>
						<a class="site-logo" href="<?php print url('<front>'); ?>"><?php print '<img src="'. $base_url . '/' . $logo_url .'" alt="Yacht Charter" />'; ?></a>
					<?php endif;  ?>
				</div>
				<div class="col-xs-8 col-sm-10 right">
					<span class="fa fa-bars menu-toggle"></span>
				</div>
			</div>
		</div>
	</div>
</section>