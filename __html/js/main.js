jQuery(document).ready(function($) {  
    $('#myTab a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	});
	$('#myTab li:eq(0) a').tab('show');
    // start the slideshow
    $('.slideshow').blinds();
    
    // slide text follow images
    $('#new_tours_wrap #new_tours .new_tours_post:not(:first)').hide(); 
    $('#new_tours_wrap #new_tours ul li a').click(function (e){
        var num = $(this).text();
        $('#new_tours_wrap #new_tours div.new_tours_post').hide();
        $('#new_tours_wrap #new_tours div.new_tours_post:eq('+ (num -1) +')').show();
    });
    
});
