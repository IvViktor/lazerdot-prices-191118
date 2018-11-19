$(document).ready(function(){
	$('#owl-about').owlCarousel({
        items: 1,
        center:true,
        margin:10,
		autoplay:true,
		autoplayTimeout:3000,
        autoplayHoverPause:true,
		loop: true,
		nav: false,
        URLhashListener:true,
        startPosition: 'URLHash'
    });
	
	$( "#accordion" ).accordion({
      collapsible: true
    });
});