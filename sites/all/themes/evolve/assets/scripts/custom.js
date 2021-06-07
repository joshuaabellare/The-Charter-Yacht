(function($) {
    "use strict";
    $(document).ready(function() {
        //Tooltip
        $(".dtooltip").tooltip();
    });
	// Remove Cart Item
	$(document).ready(function() {
		$('.cart-item-list-remove').click(function() {
			$(this).closest('.item-list-container-details').find('.delete-line-item').click();
			$(this).closest('.item-list-container').find('.delete-line-item').click();
		});
	});
	//Side Cart Module
	$(document).ready(function() {
		//ON-CLICK
		$("#show-side-cart-block").click(function() {
			$('.dexp-body-inner').toggleClass("push-body-left", "slow");
			$('.side-cart-container').toggleClass("side-cart-show", "slow");
		});
	});
	// App List Container
	$(document).ready(function(){
		$(".site-logo").click(function(){
			$('.app-list-container').css({ 'left': '0'});
		});
		$(".site-logo").click(function(){
			$('.app-list-container').css({ 'left': '-500px'});
		});
		$(".access-apps").click(function(){
			$('.app-list-container').css({ 'left': '0'});
		});
		$(".close-apps").click(function(){
			$('.app-list-container').css({ 'left': '-500px'});
		});
	});
	// App List Overflow
	$(document).ready(function() {
		var app_list_container = $('.app-list-container').height();
		var app_list_header = $('.app-list-header').height();
		var app_list_total_height = app_list_container - app_list_header;
		$('.app-list-overflow').css({
			height: app_list_total_height + "px",
		});
    });
	// Inherit Wrap Content Max Width
	$(document).ready(function(){
		var max = 0;
		$('.wrap-content').each(function(){
			var c_width = parseInt($(this).width());
			if (c_width > max) {
				max = c_width;
			}
		});
		if(max !== 0){
			$('.wrap-content').each(function(){
		  	$(this).css('min-width', max);
		  });
			
		}
	});
	$(document).ajaxComplete(function() {
		var max = 0;
		$('.wrap-content').each(function(){
			var c_width = parseInt($(this).width());
			if (c_width > max) {
				max = c_width;
			}
		});
		if(max !== 0){
			$('.wrap-content').each(function(){
		  	$(this).css('min-width', max);
		  });
			
		}
	});
	// Disable Search on Custom Chosen
	$(document).ready(function(){
		$(".disable-search").chosen({
	  		disable_search: true,
		});
	});
	// Screen Height LXV Global Sidebar Drop Down Menu
	$(document).ready(function() {
		var screen_height = $(window).height();
		$('.lxv-group-drop-down-menu-container').css({
			height: screen_height + "px",
		});
		$(window).resize(function() {
			var screen_height = $(window).height();
			$('.lxv-group-drop-down-menu-container').css({
				height: screen_height + "px",
			});
		});
	});
})(this.jQuery);