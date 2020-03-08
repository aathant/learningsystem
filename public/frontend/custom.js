$(window).scroll(function () {
	// body...
	$('nav').toggleClass('scrolled',$(this).scrollTop()>50);
})