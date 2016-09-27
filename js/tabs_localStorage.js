(function($) {
	$(function() {

		$('ul.tabs').each(function(i) {
			var storage = localStorage.getItem('tab'+i);
			if (storage) $(this).find('li').eq(storage).addClass('current').siblings().removeClass('current')
				.parents('div.section').find('div.box').hide().eq(storage).show().addClass('active');
			var box = '', box = $('div.active').height();
			if(box > 366) $('ul.tabs').css('height', (box-156));
		})

		$('ul.tabs').on('click', 'li:not(.current)', function() {
			$(this).addClass('current').siblings().removeClass('current')
				.parents('div.section').find('div.box').eq($(this).index()).fadeIn(150).siblings('div.box').hide();
			var ulIndex = $('ul.tabs').index($(this).parents('ul.tabs'));
			localStorage.removeItem('tab'+ulIndex);
			localStorage.setItem('tab'+ulIndex, $(this).index());

			var box = '', box = $('div.active').height();
			if(box > 366) $('ul.tabs').css('height', (box-156));
		})

	})
})(jQuery)