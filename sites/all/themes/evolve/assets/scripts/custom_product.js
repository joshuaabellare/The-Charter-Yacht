jQuery(document).ready(function($){
	//$('.entity-add-to-cart').find('#edit-field-product-with-line-item-und-actions-ief-add').click();
	$('.variation-container').each(function(){
		//SET DEFAULT MINIMUM
		var variations = $(this).find('div[class^="selected-criteria-"]');	
		var num = variations.attr("class").replace(/^.+-/,'');
		var min_default = $(this).find('[data-min]').attr("data-min");	
		$(this).find('.var-' + num + '-quantity').text(min_default);
		//SET DEFAULT VARIATION SELECT LIST
		if($(this).find('select[class^="criteria-"]').html() != null){
			var criteria = $(this).find('select[class^="criteria-"]');		
			var num = criteria.attr("class").replace(/^.+-/,'');
			var cri_default = $('option:selected', criteria).text();
			$(this).find('.var-' + num + '-option').text(cri_default + ' ');
		}
		//SET LINE ITEM ADD TO CART VALUE
		var selected_var = $(this).find('.selected-criteria-' + num).text();
		$(this).closest('.product-item').find('input[name*="line_item_fields[field_selected_variation_' + num +']"]').val(selected_var);		
	});
	//CHANGE OF VARIATION OPTION
	$('select[class^="criteria-"]').change(function(){
		var num = $(this).attr("class").replace(/^.+-/,'');
		var cri_default = $('option:selected', $(this)).text();
		$(this).closest('.variation-container').find('.var-' + num + '-option').text(cri_default + ' ');
		var selected_var = $(this).closest('.variation-container').find('.selected-criteria-' + num).text();
		$(this).closest('.product-item').find('input[name*="line_item_fields[field_selected_variation_' + num +']"]').val(selected_var);
		prod_update_computation(this);
		var sub_total =	$(this).closest('.product-item').find('input[name="line_item_fields[field_sub_total][und][0][amount]"]').val();
		if (isNaN(parseInt(sub_total))) {
            var sub_total = 0;
        }
		$(this).closest('.product-container').find('.package-total').text("$" + parseFloat(sub_total).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
	});
	//CHANGE OF VARIATION LIST
	$('select[class^="option-list-"]').change(function(){
		var num = $(this).attr("class").replace(/^.+-/,'');
		var cri_default = $('option:selected', $(this)).text();
		$(this).closest('.variation-container').find('.var-' + num + '-quantity').text(cri_default);
		var selected_var = $(this).closest('.variation-container').find('.selected-criteria-' + num).text();
		$(this).closest('.product-item').find('input[name*="line_item_fields[field_selected_variation_' + num +']"]').val(selected_var);
		prod_update_computation(this);
		var sub_total =	$(this).closest('.product-item').find('input[name="line_item_fields[field_sub_total][und][0][amount]"]').val();
		if (isNaN(parseInt(sub_total))) {
			var sub_total = 0;
		}
		$(this).closest('.product-container').find('.package-total').text("$" + parseFloat(sub_total).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
	});
	//CREATE SLIDER
	for (var i = 1; i <=5; i++){
		if($('.criteria-' + i +'-quantity').html != null){
			$('.criteria-' + i +'-quantity').each(function(){
				if($(this).find('.variation-display').text() == "Slider"){
					var min_var = $(this).attr("data-min");
					var max_var = $(this).attr("data-max");
					var ratio = $(this).attr("data-ratio");
					$(this).slider({
						range: "min",
						value: 1,
						step: parseInt(ratio),
						min: parseInt(min_var),
						max: parseInt(max_var),
						animate: "fast",
						slide: (function(index) {
							return function(event, ui) {
								$(this).closest('.variation-container').find('.var-' + [index] + '-quantity').text(ui.value);
								var selected_var = $(this).closest('.variation-container').find('.selected-criteria-' + [index]).text();
								$(this).closest('.product-item').find('input[name*="line_item_fields[field_selected_variation_' + [index] +']"]').val(selected_var);
								prod_update_computation(this);
								var sub_total =	$(this).closest('.product-item').find('input[name="line_item_fields[field_sub_total][und][0][amount]"]').val();
								if (isNaN(parseInt(sub_total))) {
									var sub_total = 0;
								}
								$(this).closest('.product-container').find('.package-total').text("$" + parseFloat(sub_total).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
							}
						})(i)
					})
					.slider("pips", {
						first: "pip",
						last: "pip",
					})
				
					.slider("float", {
					});
				}
				else{
					$(this).find('.option-list-' + i).removeClass('hide');
				}
			});
		}
	}
	//COMPUTE DEFAULT PRODUCT VALUE
	$('.product-item').each(function(){
		prod_total = 0;
		$(this).find('.variation-container').each(function(){
			prod_computation(this);
		});
		var price = $(this).find('.prod-price').text().replace(/[^0-9\.\-]/g, '');
		var total = parseFloat(prod_total) + parseFloat(price);
		$(this).find('input[name="line_item_fields[field_sub_total][und][0][amount]"]').val(total);
	});
	//PRODUCT COMPUTATION
	function prod_computation(that){
		var variations = $(that).find('div[class^="selected-criteria-"]');	
		var num = variations.attr("class").replace(/^.+-/,'');
		var quantity = $(that).find('.var-' + num + '-quantity').text();
		if($(that).find('select[class^="criteria-"]').html() != null){
			var ratio = $(that).find('[data-ratio]').attr("data-ratio");	
			var var_value = $('option:selected', $(that).find('select[class^="criteria-"]')).val();
			var new_total = (quantity / ratio ) * var_value;
			prod_total+=new_total
		}
		if($(that).find('[data-price]').html() != null){
			var ratio = $(that).find('[data-ratio]').attr("data-ratio");
			var var_value = $(that).find('[data-price]').attr('data-price');	
			var new_total = (quantity / ratio ) * var_value;
			prod_total+=new_total				
		}
	}
	//COMPUTE UPDATED PRODUCT VALUE
	function prod_update_computation(that){
		prod_total = 0;
		$(that).closest('.product-item').find('.variation-container').each(function(){
			prod_computation(this);
		});
		var price = $(that).closest('.product-item').find('.prod-price').text().replace(/[^0-9\.\-]/g, '');
		var total = parseFloat(prod_total) + parseFloat(price);
		$(that).closest('.product-item').find('input[name="line_item_fields[field_sub_total][und][0][amount]"]').val(total);
		
	}
	//SHOW DEFAULT PRODUCT SELECTION
	$('.product-container').each(function(){
		var prod_list = $(this).find('select[class="product-list"]');
		if(prod_list.html() != null){
			var prod_default = $('option:selected', prod_list).text();
			$(this).find('.product-item').each(function(){
				var sub_total =	$(this).find('input[name="line_item_fields[field_sub_total][und][0][amount]"]').val();
				if (isNaN(parseInt(sub_total))) {
					var sub_total = 0;
				}
				if($(this).find('.prod-title').text() == prod_default){
					$(this).removeClass('hidden');
					$(this).closest('.product-container').find('.package-total').text("$" + parseFloat(sub_total).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
				}
			});
		}else{
			$(this).find('.product-item').removeClass('hidden');
			var sub_total =	$(this).find('input[name="line_item_fields[field_sub_total][und][0][amount]"]').val();
			if (isNaN(parseInt(sub_total))) {
				var sub_total = 0;
			}
			$(this).find('.package-total').text("$" + parseFloat(sub_total).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
		}
	});
	//CHANGE OF PRODUCT SELECTION
	$('select[class="product-list"]').change(function(){
		var prod_default = $('option:selected', $(this)).text();
		$(this).closest('.product-container').find('.product-item').each(function(){
			var sub_total =	$(this).find('input[name="line_item_fields[field_sub_total][und][0][amount]"]').val();
			if (isNaN(parseInt(sub_total))) {
				var sub_total = 0;
			}
			if($(this).find('.prod-title').text() == prod_default){
				$(this).removeClass('hidden');
				var $exclude = $(this);
				$(this).closest('.product-container').find('.package-total').text("$" + parseFloat(sub_total).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
			}
			$(this).not($exclude).addClass('hidden');
		});
	});
	//ADD TO CART TRIGGER
	$('.add-to-cart-btn').click(function(){
		var chosen_prod = $(this).closest('.product-container').find('.product-item:visible');
		chosen_prod.find('.form-submit').click();
	});
	//RECART TRIGGER
	$('.recart-btn').click(function(){
		var chosen_prod = $('.product-container').find('.product-item:visible');
		chosen_prod.find('.form-submit').click();
	});
});