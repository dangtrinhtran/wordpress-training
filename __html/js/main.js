jQuery(document).ready(function($) {  
//<<<<<<< HEAD
    $('#myTab a[href="#random"]').tab('show');
//    $(window).load(function () {
    // start the slideshow
    $('.slideshow').blinds();
   // });
//=======
    $('#myTab a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	});
	$('#myTab li:eq(1) a').tab('show');
    // start the slideshow
    $('.slideshow').blinds();
//>>>>>>> 0ca5e37aa22912c65d9ac85cf33075fd52e61ed1
});
