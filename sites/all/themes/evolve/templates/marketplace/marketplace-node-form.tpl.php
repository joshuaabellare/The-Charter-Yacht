<br>
<ul class="custom-nav-bars nav nav-tabs centered" role="tablist">
	<li role="presentation" class="active"><a href="#information" aria-controls="information" role="tab" data-toggle="tab">Information</a></li>
	<li role="presentation"><a href="#details" aria-controls="details" role="tab" data-toggle="tab">Yacht Details</a></li>
	<li role="presentation"><a href="#map" aria-controls="map" role="tab" data-toggle="tab">Map Address</a></li>
	<li role="presentation"><a href="#gallery" aria-controls="gallery" role="tab" data-toggle="tab">Media</a></li>
	<li role="presentation"><a href="#rates" aria-controls="rates" role="tab" data-toggle="tab">Rates</a></li>
	<li role="presentation"><a href="#filters" aria-controls="filters" role="tab" data-toggle="tab">Filters</a></li>
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
				<?php print render($form['field_location_connected']); ?>
			</div>
			<br>
			<div class="container-details">
				<h3 class="no-margin centered uppercase">Specifics</h3>
				<hr class="container-details-line-separator">
				<div class="row clearfix">
					<div class="col-md-4">
						<?php print render($form['field_brand']); ?>
						<?php print render($form['field_bed']); ?>
						<?php print render($form['field_size']); ?>
						<?php print render($form['field_gallons']); ?>
						<?php print render($form['field_cabins']); ?>
					</div>
					<div class="col-md-4">
						<?php print render($form['field_year']); ?>
						<?php print render($form['field_single_bed']); ?>
						<?php print render($form['field_beam']); ?>
						<?php print render($form['field_max_speed']); ?>
						<?php print render($form['field_bathroom']); ?>				
					</div>
					<div class="col-md-4">
						<?php print render($form['field_engines']); ?>
						<?php print render($form['field_double_bed']); ?>	
						<?php print render($form['field_draft']); ?>
						<?php print render($form['field_cruising_speed']); ?>
						<?php print render($form['field_horsepower']); ?>						
					</div>
				</div>
			</div>
			<br>
		</div>
		<div role="tabpanel" class="tab-pane" id="details">
			<div class="container-details">
				<h3 class="no-margin centered uppercase">Description</h3>
				<hr class="container-details-line-separator">
				<?php print render($form['field_inclusion_details']); ?>
			</div>
			<br>
		</div>
		<div role="tabpanel" class="tab-pane" id="map">
			<div class="container-details">
				<h3 class="no-margin centered uppercase">Map Address</h3>
				<hr class="container-details-line-separator">
				<?php print render($form['field_address']); ?>
			</div>
			<br>
		</div>
		<div role="tabpanel" class="tab-pane" id="gallery">
			<div class="container-details container-details-border">
				<h3 class="no-margin centered uppercase">Banner</h3>
				<hr class="container-details-line-separator">
				<p class="custom-field-description centered">
					Upload a high definition image for the banner.
					<br>
					Image size should be: <strong>(1500x450)</strong> Upload size is <strong>500 KB</strong> or less.
				</p>
				<?php print render($form['field_image']); ?>
			</div>
			<br>
			<div class="container-details">
				<h3 class="no-margin centered uppercase">Thumbnail</h3>
				<hr class="container-details-line-separator">
				<p class="custom-field-description centered">
					Upload a high definition image for the thumbnail.
					<br>
					Image size should be: <strong>(670x300)</strong> Upload size is <strong>300 KB</strong> or less.
				</p>
				<?php print render($form['field_thumbnail']); ?>
			</div>
			<br>
			<div class="container-details">
				<h3 class="no-margin centered uppercase">Gallery</h3>
				<hr class="container-details-line-separator">
				<p class="custom-field-description centered">
					Upload a high definition images for the gallery.
					<br>
					Image size should be: <strong>(800x600)</strong> Upload size is <strong>300 KB</strong> or less.
				</p>
				<?php print render($form['field_image_gallery']); ?>
			</div>
			<br>
			<div class="container-details">
				<h3 class="no-margin centered uppercase">Video</h3>
				<hr class="container-details-line-separator">
				<p class="custom-field-description centered">Youtube video link.</p>
				<?php print render($form['field_video_link']); ?>
			</div>
			<br>
			<div class="container-details">
				<h3 class="no-margin centered uppercase">Virtual Tour</h3>
				<hr class="container-details-line-separator">
				<?php print render($form['field_virtual_tour']); ?>
			</div>
			<br>
		</div>
		<div role="tabpanel" class="tab-pane" id="rates">
			<div class="container-details">
				<h3 class="no-margin centered uppercase">Basic Rate</h3>
				<hr class="container-details-line-separator">
				<?php print render($form['field_rate']); ?>	
			</div>
			<br>
		</div>
		<div role="tabpanel" class="tab-pane" id="filters">
			<div class="container-details">
				<h3 class="no-margin centered uppercase">Filters</h3>
				<hr class="container-details-line-separator">
				<?php print render($form['field_type_of_yacht']); ?>
				<?php print render($form['field_condition']); ?>
				<?php print render($form['field_size_list']); ?>
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
<div class="container-details centered actions-form-container">
	<?php print drupal_render($form['actions']['submit']); ?>
</div>
<div class="hide"><?php print drupal_render_children($form);?></div>