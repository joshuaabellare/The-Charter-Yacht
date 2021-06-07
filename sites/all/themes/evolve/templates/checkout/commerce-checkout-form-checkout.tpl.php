<?php hide($form['buttons']['back']); ?>
<?php hide($form['buttons']['cancel']); ?>
<?php print render($form['checkout_completion_message']); ?>
<?php print render($form['customer_profile_billing']['field_full_name']); ?>
<?php print render($form['customer_profile_billing']['field_email']); ?>
<?php print render($form['customer_profile_billing']['field_contact_number']); ?>
<?php print render($form['customer_profile_billing']['field_event_date']); ?>
<?php print render($form['customer_profile_billing']['field_message']); ?>
<div class="centered"><?php print drupal_render($form['buttons']['continue']); ?></div>
<div class="hide"><?php print drupal_render_children($form); ?></div>