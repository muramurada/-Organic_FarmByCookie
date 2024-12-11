  
  $(function(){
		//クリックで動く
    $('.section-title-answer').hide();
		$('.section-title-question').click(function(){
			$(this).toggleClass('active');
			$(this).next('.section-title-answer').slideToggle();
    //   if($(this).hasClass('active')){
		// 	$(this).next().fadeTo(1000, 0);
    // } else {
		// 	$(this).next().fadeTo(1000, 1);
    // }
		});
		//ホバーで動く
		// $('.section-title-about').hover(function(){
		// 	$(this).toggleClass('active');
		// 	$(this).next('.about--content').slideToggle();
		// });
	});