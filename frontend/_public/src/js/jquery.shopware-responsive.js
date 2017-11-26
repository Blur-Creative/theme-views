(function($, window) {

	window.StateManager

		.addPlugin('*[data-panel-auto-resizer="true"]', 'swPanelAutoResizer', {
			panelBodySelector: '.panel--body, .list--group'
		})
		
        // usp bar collapse
        .addPlugin('.usp-bar .usp-bar--trigger', 'swCollapsePanel', {
            contentSiblingSelector: '.usp-bar--container'
        }, ['xs', 's'])
		
		// OffCanvas menu
		.addPlugin('*[data-button-toggle="true"]', 'bcButtonToggle')
		
		// Default product slider
        .addPlugin('*[data-product-slider="true"]', 'swProductSlider', {itemMinWidth:240})

		//BC Sticky Nav
		.addPlugin('*[data-sticky-navigation="true"]', 'bcStickyNav')
		
		//remove ajax product navigation. if you want to use comment it out
		//.removePlugin('body', 'swAjaxProductNavigation')
	;

	$(function($) {
		
		$('.add-voucher--trigger-btn').on('click', function (event) {
			var $input = $(this).find('input');
			var method = (!$input.is(':checked')) ? 'addClass' : 'removeClass';
			event.preventDefault();

			$('.add-voucher--panel')[method]('is--hidden');
		});
		
        $('.table--shipping-costs-trigger').on('click touchstart', function () {
            var $this = $(this),
                $next = $this.next()

			
			if ($next.hasClass('is--hidden')) {
				$this.removeClass('active');
			} else {
				$this.addClass('active');
			}
        });
		
		$('*[data-popover="true"]').webuiPopover();
		
		jQuery(document).ready(function() {
			$(".listing .product--box .product--description").dotdotdot({
				watch: "window"
			});
		});
		
		jQuery(document).ready(function() {
			if(!$('.last-seen-products').hasClass('is--hidden')) {
				$('.last-seen-products-container').addClass('is--active');
			}
			if($('.last-seen-products').hasClass('is--hidden')) {
				$('.last-seen-products-container').removeClass('is--active');
			}
		});
		
		// Ajax cart amount display
        function initDotdotdot() {
			$(".product--box .product--description").dotdotdot({
				watch: "window"
			});
        }
		
		$.subscribe('plugin/swInfiniteScrolling/onFetchNewPageLoaded', initDotdotdot);
		$.subscribe('plugin/swInfiniteScrolling/onFetchNewPageFinished', initDotdotdot);
		$.subscribe('plugin/swInfiniteScrolling/onLoadPreviousFinished', initDotdotdot);

		//Scroll To Top 
		$(document).ready(function(){
			if ($(window).scrollTop() > 200) {
				$('.scroll-totop--button').addClass("is--shown");
			} else {
				$('.scroll-totop--button').removeClass("is--shown");
			}
			
			//Check to see if the window is top if not then display button
			$(window).scroll(function(){
				if ($(this).scrollTop() > 200) {
					$('.scroll-totop--button').addClass("is--shown");
				} else {
					$('.scroll-totop--button').removeClass("is--shown");
				}
			});
			
			//Click event to scroll to top
			$('.scroll-totop--button').click(function(){
				$('html, body').animate({scrollTop : 0},800);
				return false;
			});
		});
	});
})(jQuery, window);