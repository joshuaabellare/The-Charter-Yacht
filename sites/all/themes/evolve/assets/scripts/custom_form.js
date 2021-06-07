(function($) {
    "use strict";
	function inline_entity_form(){
		$(document).ready(function() {
			var ief_entity_btn = false;
			$('.ief-entity-operations').find('.ajax-processed').mousedown(function() {
				ief_entity_btn = true;
				$(document).ajaxComplete(function() {
					var main_save = true;
					$('.actions-form-container').hide();
					if(ief_entity_btn){
						$('.field-widget-inline-entity-form').each(function() {
							$(this).find('tr').each(function() {
								if ($(this).hasClass('ief-row-form')) {
									$(this).siblings().hide();
									$(this).closest('table').find('thead').first().hide();
									$(this).closest('table').siblings().hide();
									main_save = false;
								}
							});
						});
					}
					if(main_save){
						$('.actions-form-container').show();
					}
					else{
						$('.actions-form-container').hide();
					}
				});
			});
			var add_new = false;
			$('.container-inline').find('.ajax-processed').mousedown(function() {
				add_new = true;
				var $this = $(this).closest('.fieldset-wrapper');
				$(document).ajaxComplete(function() {
					var main_save = true;
					if(add_new){
						$('.field-widget-inline-entity-form').each(function() {
							$(this).find('.ief-form-bottom').each(function() {
								$(this).siblings().hide();
								main_save = false;
							});
						});
					}
					if(main_save){
						$('.actions-form-container').show();
					}
					else{
						$('.actions-form-container').hide();
					}
				});
			});	
		});
	}
	$(document).ajaxComplete(function() {
		inline_entity_form();
	});
})(this.jQuery);