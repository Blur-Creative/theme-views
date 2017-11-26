;(function ($) {
    'use strict';

    /**
     * Shopware Collapse Panel Plugin.
     */
    $.plugin('bcStickyNav', {

        alias: 'StickyNav',

        /**
         * Default options for the collapse panel plugin.
         *
         * @public
         * @property defaults
         * @type {Object}
         */
        defaults: {

            stickyCls: 'sticky',

        },

        /**
         * Default plugin initialisation function.
         * Sets all needed properties, adds classes
         * and registers all needed event listeners.
         *
         * @public
         * @method init
         */
        init: function () {
            var me = this,
                opts = me.opts;

            me.applyDataAttributes();
            me.registerEvents();
        },

        /**
         * Registers all necessary event handlers.
         *
         * @public
         * @method registerEvents
         */
        registerEvents: function () {
            var me = this;


			
			var elementOffsetTop = me.$el.offset().top
			
			me.toggleStickyCls();
			
			$(document).scroll(function() {
				me.toggleStickyCls(elementOffsetTop);
			});			
			
        },        /**
         * Registers all necessary event handlers.
         *
         * @public
         * @method registerEvents
         */
        toggleStickyCls: function (elementOffsetTop) {
            var me = this,
				opts = me.opts,
				scrollTop = $(document).scrollTop(),
				stickyOffsetTop = elementOffsetTop,
				elementHeight = me.$el.outerHeight();
								
				if (scrollTop > stickyOffsetTop) { 
					$(me.$el).addClass(opts.stickyCls);
					$('body').css('padding-top',elementHeight);
				} else {
					$(me.$el).removeClass(opts.stickyCls); 
					$('body').css('padding-top','0');
				}

        },



        /**
         * Destroys the initialized plugin completely, so all event listeners will
         * be removed and the plugin data, which is stored in-memory referenced to
         * the DOM node.
         *
         * @public
         * @method destroy
         */
        destroy: function () {
            var me = this,
                opts = me.opts;

			$(me.$el).removeClass(opts.stickyCls); 

            me._destroy();
        }
    });
})(jQuery);
