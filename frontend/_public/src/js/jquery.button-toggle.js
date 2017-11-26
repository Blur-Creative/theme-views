;(function($) {
    'use strict';

    /**
     * Shopware Auto Submit Plugin
     *
     * @example
     *
     * HTML:
     *
     * <form method="GET" action="URL">
     *     <input type="checkbox" name="item1" value="1" data-auto-submit="true" />
     *     <input type="radio" name="item2" value="2" data-auto-submit="true" />
     *     <select name="item3" data-auto-submit="true">
     *         <option value="opt1" selected="selected">My option 1</option>
     *         <option value="opt2">My option 2</option>
     *         <option value="opt3">My option 3</option>
     *     </select>
     * </form>
     *
     * JS:
     *
     * $('form *[data-auto-submit="true"]').autoSubmit();
     *
     * If you now change either an input or an option in the select, the form will be submitted.
     *
     */
    $.plugin('bcButtonToggle', {

        defaults: {

            /**
             * The selector of the target element which should be collapsed.
             *
             * @type {String|HTMLElement}
             */
            collapseTarget: false,

            /**
             * Selector for the content sibling when no collapseTargetCls was passed.
             *
             * @type {String}
             */
            contentSiblingSelector: '.collapse--content'

        },

        /**
         * Default plugin initialisation function.
         * Registers an event listener on the change event.
         * When it's triggered, the parent form will be submitted.
         *
         * @public
         * @method init
         */
        init: function () {
            var me = this;
			
			me.$el.addClass('button-toggle');
			

            me.registerEvents();

            //$.publish('plugin/swAutoSubmit/onRegisterEvents', [ me ]);
        },

		registerEvents: function () {
            var me = this;

            me.$el.on('click', function () {
                me.sampleEvent();
            });

            //$.publish('plugin/swCollapsePanel/onRegisterEvents', [ me ]);
        },
		
        sampleEvent: function () {
            var me = this;
			var $input = me.$el.find('input');
			
			if ($input.prop('type') == 'checkbox') {
				if ($input.prop('checked') == false) {
					me.$el.addClass('active');
					$input.prop('checked', true);
					console.log('checked');
				} else {
					me.$el.removeClass('active');
					$input.prop('checked', false);
					console.log('unchecked');
				} 
				console.log($input.prop('checked'));
			}
			console.log($input);
			

            //$.publish('plugin/swCollapsePanel/onToggleCollapse', [ me ]);
        }
    });
})(jQuery);
