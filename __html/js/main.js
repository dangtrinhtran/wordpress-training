jQuery(document).ready(function($) {  
    $('#myTab a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	});
	$('#myTab li:eq(1) a').tab('show');
    // start the slideshow
    $('.slideshow').blinds();
});
