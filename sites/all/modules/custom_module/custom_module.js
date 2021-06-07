(function($){

Drupal.behaviors.BEFCustomRedirect = {
  attach: function(context, settings) {
    $('.ctools-auto-submit-exclude.form-select[name=' + settings.bef_custom_redirect.target_name + ']').change(function() {
      window.location = settings.bef_custom_redirect.target_urls[$(this).val()];
    });
  }
}

})(jQuery);