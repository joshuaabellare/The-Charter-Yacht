Drupal.TBMegaMenu = Drupal.TBMegaMenu || {};

(function ($) {
  Drupal.TBMegaMenu.oldWindowWidth = 0;
  Drupal.TBMegaMenu.displayedMenuMobile = false;
  Drupal.TBMegaMenu.supportedScreens = [980];
  Drupal.TBMegaMenu.menuResponsive = function () {
    var windowWidth = window.innerWidth ? window.innerWidth : $(window).width();
    var navCollapse = $('.tb-megamenu').children('.nav-collapse');
    if (windowWidth < Drupal.TBMegaMenu.supportedScreens[0]) {
      navCollapse.addClass('collapse');
      if (Drupal.TBMegaMenu.displayedMenuMobile) {
        navCollapse.css({height: 'auto', overflow: 'visible'});
      } else {
        navCollapse.css({height: 0, overflow: 'hidden'});
      }
    } else {
      // If width of window is greater than 980 (supported screen).
      navCollapse.removeClass('collapse');
      if (navCollapse.height() <= 0) {
        navCollapse.css({height: 'auto', overflow: 'visible'});
      }
    }
  };
  
  Drupal.behaviors.tbMegaMenuAction = {
    attach: function(context) {
      $('.tb-megamenu-button', context).once('menuIstance', function () {
        var This = this;
        $(This).click(function() {
          if(parseInt($(this).parent().children('.nav-collapse').height())) {
            $(this).parent().children('.nav-collapse').css({height: 0, overflow: 'hidden'});
            Drupal.TBMegaMenu.displayedMenuMobile = false;
          }
          else {
            $(this).parent().children('.nav-collapse').css({height: 'auto', overflow: 'visible'});
            Drupal.TBMegaMenu.displayedMenuMobile = true;
          }
        });
      });
      
      
      var isTouch = 'ontouchstart' in window && !(/hp-tablet/gi).test(navigator.appVersion);
      if(!isTouch){
        $(document).ready(function($){
          var mm_duration = 0;
          $('.tb-megamenu').each (function(){
            if ($(this).data('duration')) {
              mm_duration = $(this).data('duration');
            }
          });
          var mm_timeout = mm_duration ? 100 + mm_duration : 500;
		 
		  $('.nav > li, li.mega').each(function(event) {
			   var clicked = 0;
				$(this).click(function(event) {
					var $this = $(this);
					if(clicked === 0){
						if ($this.hasClass ('mega')) {
						  $this.addClass ('animating');
						  clearTimeout ($this.data('animatingTimeout'));
						  $this.data('animatingTimeout', setTimeout(function(){$this.removeClass ('animating')}, mm_timeout));
						  clearTimeout ($this.data('hoverTimeout'));
						  $this.data('hoverTimeout', setTimeout(function(){$this.addClass ('open')}, 100));  
						} else {
						  clearTimeout ($this.data('hoverTimeout'));
						  $this.data('hoverTimeout', 
						  setTimeout(function(){$this.addClass ('open')}, 100));
						}
						clicked = 1;
					} else if(clicked === 1){
						if ($this.hasClass ('mega')) {
						  $this.addClass ('animating');
						  clearTimeout ($this.data('animatingTimeout'));
						  $this.data('animatingTimeout', 
						  setTimeout(function(){$this.removeClass ('animating')}, mm_timeout));
						  clearTimeout ($this.data('hoverTimeout'));
						  $this.data('hoverTimeout', setTimeout(function(){$this.removeClass ('open')}, 100));
						} else {
						  clearTimeout ($this.data('hoverTimeout'));
						  $this.data('hoverTimeout', 
						  setTimeout(function(){$this.removeClass ('open')}, 100));
						}
						clicked = 0;
					}
					$('.nav > li, li.mega').not($this).click(function(event) {
						if ($this.hasClass ('mega')) {
						  $this.addClass ('animating');
						  clearTimeout ($this.data('animatingTimeout'));
						  $this.data('animatingTimeout', 
						  setTimeout(function(){$this.removeClass ('animating')}, mm_timeout));
						  clearTimeout ($this.data('hoverTimeout'));
						  $this.data('hoverTimeout', setTimeout(function(){$this.removeClass ('open')}, 100));
						} else {
						  clearTimeout ($this.data('hoverTimeout'));
						  $this.data('hoverTimeout', 
						  setTimeout(function(){$this.removeClass ('open')}, 100));
						}
						clicked = 0;
					});
					$(document).mouseup(function (e){
						var container = $(".nav > li, li.mega");
						if (!container.is(e.target) // if the target of the click isn't the container...
							&& container.has(e.target).length === 0) // ... nor a descendant of the container
						{
							if (container.hasClass ('mega')) {
							 container.addClass ('animating');
							  clearTimeout ($this.data('animatingTimeout'));
							  container.data('animatingTimeout', 
							  setTimeout(function(){container.removeClass ('animating')}, mm_timeout));
							  clearTimeout ($this.data('hoverTimeout'));
							  container.data('hoverTimeout', setTimeout(function(){$this.removeClass ('open')}, 100));
							} else {
							  clearTimeout ($this.data('hoverTimeout'));
							  container.data('hoverTimeout', 
							  setTimeout(function(){$this.removeClass ('open')}, 100));
							}
							clicked = 0;
						}
					});
				});
			});
        });
      }
      
      $(window).resize(function() {
        var windowWidth = window.innerWidth ? window.innerWidth : $(window).width();
        if(windowWidth != Drupal.TBMegaMenu.oldWindowWidth){
          Drupal.TBMegaMenu.oldWindowWidth = windowWidth;
          Drupal.TBMegaMenu.menuResponsive();
        }
      });
    },
  }
})(jQuery);

