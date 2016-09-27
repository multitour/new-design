(function($) {



	$(function() {

		$('ul.tabs').on('click', 'li:not(.current)', function() {
			$(this).addClass('current').siblings().removeClass('current')
				.parents('div.section').find('div.box').eq($(this).index()).addClass('active').fadeIn(150).siblings('div.box').hide().removeClass('active');
			
			// var box = '', box = $('div.active').eq($(this).index()).height();
			// if(box > 366) $('ul.tabs').css('height', (box-156));
		})

	})
})(jQuery)