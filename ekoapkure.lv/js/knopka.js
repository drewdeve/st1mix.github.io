$('body').append('<button class="btn-up" />');

$('.btn-up').click(function() {
	$('body').animate({'scrollTop': 0}, 1000);
	$('html').animate({'scrollTop': 0}, 1000);
});
$(window).scroll(function(){
	if($(window).scrollTop() > 100) {
		$('.btn-up').addClass('active');
	}
	else {
		$('.btn-up').removeClass('active');
	}
});