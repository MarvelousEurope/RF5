// JavaScript Document

jQuery(function($){
    $(document).on('click', function(event) {
        if($(event.target).closest('.menu_btn').length) {
            $(".menu1").toggleClass("menuclick1");
            $(".menu2").toggleClass("menuclick2");
            $(".menu3").toggleClass("menuclick3");
            $(".menu_btn").toggleClass("menuclick_btn");
            if ($('#menu_blank').css('display') == 'none') {
                $('#menu_blank').slideDown('slow');
            } else {
                $('#menu_blank').slideUp('slow');
            }
        }else if($(event.target).closest('#menu_blank a').length) {
            $('#menu_blank').slideUp('slow');
            $(".menu1").toggleClass("menuclick1");
            $(".menu2").toggleClass("menuclick2");
            $(".menu3").toggleClass("menuclick3");
            $(".menu_btn").toggleClass("menuclick_btn");
        }else{
            if(!$(event.target).closest('#menu_blank a').length) {
                if ($('#menu_blank').css('display') != 'none') {
                    $('#menu_blank').slideUp('slow');
                    $(".menu1").removeClass("menuclick1");
                    $(".menu2").removeClass("menuclick2");
                    $(".menu3").removeClass("menuclick3");
                    $(".menu_btn").removeClass("menuclick_btn");
                }
            }
        } 
    });

});


jQuery(function(){
	var _window = jQuery(window),
			_header = jQuery('.menu_btn'),
			heroBottom;
	
	_window.on('scroll',function(){
		heroBottom = jQuery('.hero').height();
		if(_window.scrollTop() > heroBottom){
			_header.addClass('transform');
		}
		else{
			_header.removeClass('transform');
		}
	});
	
	_window.trigger('scroll');
});

