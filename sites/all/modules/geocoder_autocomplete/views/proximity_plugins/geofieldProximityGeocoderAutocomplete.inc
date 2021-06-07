<?php

/**
 * @file
 * Contains geofieldProximityGeocoder.
 */

class geofieldProximityGeocoderAutocomplete extends geofieldProximityBase implements geofieldProximityPluginInterface {
  public function value_form(&$form, &$form_state, $views_plugin) {
    $form['value']['#after_build'] = array('geocoder_autocomplete_add_autocomplete_form');
  }

  public function getSourceValue($views_plugin) {
    $geocoder_engine = 'google';
    $location = (isset($views_plugin->value)) ? $views_plugin->value['origin'] : $views_plugin->options['geofield_proximity_geocoder'];
    if ($location) {
      $geocoded_data_raw = geocoder($geocoder_engine, $location);

      if ($geocoded_data_raw) {
        return array(
          'latitude' => $geocoded_data_raw->getY(),
          'longitude' => $geocoded_data_raw->getX(),
        );
      }
    }

    return FALSE;
  }

}