<br>
<ul class="custom-nav-bars nav nav-tabs centered" role="tablist">
	<li role="presentation" class="active"><a href="#information" aria-controls="information" role="tab" data-toggle="tab">Information</a></li>
	<li role="presentation"><a href="#media" aria-controls="media" role="tab" data-toggle="tab">Media</a></li>
	<li role="presentation"><a href="#seo" aria-controls="seo" role="tab" data-toggle="tab">SEO</a></li>
</ul>
<br>
<div class="container">
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="information">
			<div class="container-details">
				<h3 class="no-margin centered uppercase">Basic Information</h3>
				<hr class="container-details-line-separator">
				<?php print render($form['title']); ?>	
				<?php print render($form['field_sub_headline']); ?>
				<?php print render($form['field_country']); ?>
				<?php print render($form['body']); ?>
			</div>
			<br>
		</div>
		<div role="tabpanel" class="tab-pane" id="media">
			<div class="container-details">
				<h3 class="no-margin centered uppercase">Banner</h3>
				<hr class="container-details-line-separator">
				<p class="custom-field-description centered">
					Upload a high definition image for the banner.
					<br>
					Image size should be: <strong>(1500x800)</strong> Upload size is <strong>500 KB</strong> or less.
				</p>
				<?php print render($form['field_image']); ?>
			</div>
			<br>
			<div class="container-details">
				<h3 class="no-margin centered uppercase">Gallery</h3>
				<hr class="container-details-line-separator">
				<p class="custom-field-description centered">
					The 1st image you upload will be your thumbnail, you can rearrange the images you upload.
					<br>
					Image size should be: <strong>(800x600)</strong> Upload size is <strong>300 KB</strong> or less.
				</p>
				<?php print render($form['field_image_gallery']); ?>
			</div>
			<br>
		</div>
		<div role="tabpanel" class="tab-pane" id="seo">
			<div class="container-details">
				<h3 class="no-margin centered uppercase">SEO</h3>
				<hr class="container-details-line-separator">
				<?php print render($form['path']['pathauto']); ?>
				<?php print render($form['path']['alias']); ?>
				<?php print render($form['field_seo_title']); ?>
				<?php print render($form['field_meta_keywords']); ?>
				<?php print render($form['field_meta_description']); ?>
			</div>
			<br>
		</div>
	</div>
</div>
<div class="container-details centered">
	<?php print drupal_render($form['actions']['submit']); ?>
</div>
<div class="hide"><?php print drupal_render_children($form);?></div>
