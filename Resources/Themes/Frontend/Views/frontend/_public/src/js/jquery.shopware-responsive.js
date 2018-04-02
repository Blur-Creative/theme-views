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
        
        .removePlugin('.navigation--entry.entry--account.with-slt', 'swDropdownMenu', [ 'm', 'l', 'xl' ])
        .addPlugin('.navigation--entry.entry--account.with-slt', 'bcDropdown', {
            dropdownCls: '.account--dropdown-navigation'
        }, [ 'm', 'l', 'xl' ])
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
                $next = $this.next();

			
			if ($next.hasClass('is--hidden')) {
				$this.removeClass('active');
			} else {
				$this.addClass('active');
			}
        });
		
		$('*[data-popover="true"]').webuiPopover();
        
		$('*[data-tooltip="true"]').tooltipster();
		
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
		
		// init jQuery Plugins if Infinite Scrolling is triggered
        function initPlugins() {
			$(".product--box .product--description").dotdotdot({
				watch: "window"
			});
            
            $('*[data-tooltip="true"]').tooltipster();
        }
		
		$.subscribe('plugin/swInfiniteScrolling/onFetchNewPageLoaded', initPlugins);
		$.subscribe('plugin/swInfiniteScrolling/onFetchNewPageFinished', initPlugins);
		$.subscribe('plugin/swInfiniteScrolling/onLoadPreviousFinished', initPlugins);
        $.subscribe('plugin/swProductSlider/onLoadItemsSuccess', initPlugins);
        $.subscribe('plugin/swEmotionLoader/onLoadEmotionFinished', initPlugins);

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
		
		// Page Preload
		$(document).ready(function(){
			$('body.has--page-preload').addClass('has--loaded');
		});
	});
})(jQuery, window);