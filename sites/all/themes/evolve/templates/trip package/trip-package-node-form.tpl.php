<br>
<ul class="custom-nav-bars nav nav-tabs centered" role="tablist">
	<li role="presentation" class="active"><a href="#information" aria-controls="information" role="tab" data-toggle="tab">Information</a></li>
	<li role="presentation"><a href="#location" aria-controls="location" role="tab" data-toggle="tab">Location</a></li>
	<li role="presentation"><a href="#map" aria-controls="map" role="tab" data-toggle="tab">Map Address</a></li>
	<li role="presentation"><a href="#rates" aria-controls="rates" role="tab" data-toggle="tab">Rates</a></li>
	<li role="presentation"><a href="#services" aria-controls="services" role="tab" data-toggle="tab">Package in Details</a></li>
	<li role="presentation"><a href="#media" aria-controls="media" role="tab" data-toggle="tab">Media</a></li>
	<li role="presentation"><a href="#filter" aria-controls="filter" role="tab" data-toggle="tab">Filter</a></li>
	<li role="presentation"><a href="#seo" aria-controls="seo" role="tab" data-toggle="tab">SEO</a></li>
</ul>
<br>
<div class="container">
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="information">
			<div class="container-details container-details-border">
				<h3 class="no-margin centered uppercase">Basic Information</h3>
				<hr class="container-details-line-separator">
				<?php print render($form['title']); ?>
				<?php print render($form['body']); ?>
			</div>
			<br>
			<div class="container-details container-details-border">
				<h3 class="no-margin centered uppercase">Specifics</h3>
				<hr class="container-details-line-separator">
				<div class="row">
					<div class="col-md-6">
						<?php print render($form['field_luxury_rank']); ?>
						<?php print render($form['field_min_capacity']); ?>
						<?php print render($form['field_arrival_area']); ?>
					</div>
					<div class="col-md-6">
						<?php print render($form['field_duration']); ?>
						<?php print render($form['field_max_capacity']); ?>
						<?php print render($form['field_departure_area']); ?>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<br>
			<div class="container-details container-details-border">
				<h3 class="no-margin centered uppercase">Highlight</h3>
				<hr class="container-details-line-separator">
				<?php print render($form['field_highlight']); ?>	
			</div>
			<br>
			<div class="container-details container-details-border">
				<h3 class="no-margin centered uppercase">Inclusions</h3>
				<hr class="container-details-line-separator">
				<?php print render($form['field_inclusions']); ?>	
			</div>
			<br>
			<div class="container-details container-details-border">
				<h3 class="no-margin centered uppercase">Itinerary</h3>
				<hr class="container-details-line-separator">
				<?php print render($form['field_itinerary']); ?>	
			</div>
			<br>
			<div class="container-details container-details-border">
				<h3 class="no-margin centered uppercase">Availability</h3>
				<hr class="container-details-line-separator">
				<?php print render($form['field_availability']); ?>	
			</div>
			<br>
			<div class="container-details container-details-border">
				<h3 class="no-margin centered uppercase">Rules and conditions</h3>
				<hr class="container-details-line-separator">
				<?php print render($form['field_rules']); ?>
			</div>
			<br>
		</div>
		<div role="tabpanel" class="tab-pane" id="location">
			<div class="container-details container-details-border">
				<h3 class="no-margin centered uppercase">Location</h3>
				<hr class="container-details-line-separator">
				<?php print render($form['field_location_connected']); ?>
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
		<div role="tabpanel" class="tab-pane" id="rates">
			<div class="container-details container-details-border">
				<h3 class="no-margin centered uppercase">Basic Rate</h3>
				<hr class="container-details-line-separator">
				<?php print render($form['field_rate']); ?>
			</div>
			<br>
			<div class="container-details container-details-border">
				<h3 class="no-margin centered uppercase">Rates</h3>
				<hr class="container-details-line-separator">
				<?php print render($form['field_rates']); ?>
			</div>
			<br>
		</div>
		<div role="tabpanel" class="tab-pane" id="services">
			<div class="container-details container-details-border">
				<h3 class="no-margin centered uppercase">Package in Details</h3>
				<hr class="container-details-line-separator">
				<?php print render($form['field_inclusion_details']); ?>
			</div>
			<br>
		</div>
		<div role="tabpanel" class="tab-pane" id="media">
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
			<div class="container-details container-details-border">
				<h3 class="no-margin centered uppercase">Thumbnail</h3>
				<hr class="container-details-line-separator">
				<p class="custom-field-description centered">
					Upload a high definition imag image for the thumbnail.
					<br>
					Image size should be: <strong>(800x600)</strong> Upload size is <strong>300 KB</strong> or less.
				</p>
				<?php print render($form['field_thumbnail']); ?>
			</div>
			<br>
			<div class="container-details container-details-border">
				<h3 class="no-margin centered uppercase">Gallery</h3>
				<hr class="container-details-line-separator">
				<p class="custom-field-description centered">
					Upload a high definition imag image for the gallery.
					<br>
					Image size should be: <strong>(1200x700)</strong> Upload size is <strong>300 KB</strong> or less.
				</p>
				<?php print render($form['field_image_gallery']); ?>
			</div>
			<br>
			<div class="container-details container-details-border">
				<h3 class="no-margin centered uppercase">Video</h3>
				<hr class="container-details-line-separator">
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
		<div role="tabpanel" class="tab-pane" id="filter">
			<div class="container-details container-details-border">
				<h3 class="no-margin centered uppercase">Filter</h3>
				<hr class="container-details-line-separator">
				<?php print render($form['field_type_of_trip_idea']); ?>
				<?php print render($form['field_type_of_package']); ?>
			</div>
			<br>
		</div>
		<div role="tabpanel" class="tab-pane" id="seo">
			<div class="container-details container-details-border">
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