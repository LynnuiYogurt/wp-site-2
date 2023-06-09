(function ($) {
	'use strict';

	$(document).ready(function () {
		$('div[id^="sp-wp-tabs-wrapper_"]').each(function () {
			var _this = $(this);
			var tabsID = _this.attr('id');
			var preloader = $('#' + tabsID).data('preloader');
			var activemode = $('#' + tabsID).data('activemode');
			// Preloader
			if (preloader) {
				$(".sp-tab__preloader").fadeOut();
			}

			// Tabs On Hover
			if ('tabs-activator-event-hover' == activemode) {
				$('#' + tabsID).on('mouseenter.sp.tab.data-api', '[data-sptoggle="tab"], [data-hover="tab"]', function (e) {
					e.preventDefault();
					$(this).sp_tab('show');
				});
			}

			// Fix iframe conflict with 2020 theme.
			$('.sp-tab__lay-default iframe[style*="width: 0px"]').css({'width': '', 'height': ''});
			
            // Iframe wrapper 
			$('#' + tabsID + ' iframe:not(.wp-tab-iframe,.skip,[src*="omny.fm/"])').each(function (i) {
				let max_width = $(this).attr('width') > 100 ? 'max-width:' + $(this).attr('width') + 'px' : '';
				$(this).addClass('wp-tab-iframe').wrap("<div class='wp-tab-iframe-container " + tabsID + "_" + i + " '></div>");
				if (max_width){
					$(this).parent('.wp-tab-iframe-container').wrap("<div style='" + max_width + ";width: 100%;display: inline-block;'></div>");
				}
			});
			// Tab #anchoring
			$(function () {
				// check if there is a hash in the url
				if (window.location.hash != '') {
					$('#' + tabsID + ' .sp-tab__nav-tabs > li [for="' + window.location.hash + '"]').trigger('click');
					$('#' + tabsID + '.sp-tab__default-accordion .sp-tab__tab-pane' + window.location.hash + ' > label').trigger('click');
				}
			});

			var $tabs = $('#' + tabsID + ' .sp-tab__nav-item');
			$('label', $tabs).on('click', function (e) {
				e.preventDefault();
				if ('tabs-activator-event-hover' !== activemode) {
					// Add hash url
					window.location.hash = $(this).attr('for');
				}
			});

			// tab accordion mode hashing in mobile.
			$('#' + tabsID + '.sp-tab__default-accordion .sp-tab__tab-pane label[data-sptoggle]').on('click', function (e) {
				e.preventDefault();
				// Add hash url
				window.location.hash = '#' + $(this).parents('.sp-tab__tab-pane').attr('id');
			});
		});
	});

})(jQuery);