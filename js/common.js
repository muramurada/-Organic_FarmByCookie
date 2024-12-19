  
  $(function(){
		//クリックで動く
    $('.section-title-answer').hide();
		$('.section-title-question').click(function(){
			$(this).toggleClass('active');
			$(this).next('.section-title-answer').slideToggle();
		});
		//ホバーで動く
		// $('.section-title-about').hover(function(){
		// 	$(this).toggleClass('active');
		// 	$(this).next('.about--content').slideToggle();
		// });
	});