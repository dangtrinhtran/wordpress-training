/**
 * @author Mr Rony<mrtrandangtrinh@gmail.com>
 * @package Training wordpress
 * @param {jQuery} $
 */
jQuery(document).ready(function($) {  
    $('#myTab a').click(function(e) {
	  e.preventDefault();
	  $(this).tab('show');
	});
	$('#myTab li:eq(0) a').tab('show');

      //Jquery cycle
      $('ul.banner-header').cycle({
            fx: 'fade',
            speed: '3000',
            timeout: 2000,
            pager: '#nav_slide',
            auto: true
        });
        
        //tooltip
        $('.post-item li a h3').hover(function (){
           var str = $(this).parent().attr('data-tooltip');
           $('<p class="tooltip"></p>').text(str).appendTo('body').fadeIn('slow');
        }, function (){
            $('.tooltip').remove();
        }).mousemove(function (e){
            var mousex = e.pageX + 20;
            var mousey = e.pageY;
            $('.tooltip').css({top: mousey, left: mousex});
        });
});

