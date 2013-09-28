jQuery(document).ready(function($) {  
    $('#myTab a').click(function(e) {
	  e.preventDefault();
	  $(this).tab('show');
	});
	$('#myTab li:eq(0) a').tab('show');
   
      
      //Jquery cycle
      $('ul.banner-header').cycle({
            fx: 'fade',
            speed: '7000',
            timeout: 3000,
            pager: '#nav_slide',
            auto: true
        });
      
});

