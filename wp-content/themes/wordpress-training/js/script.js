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
    // start the slideshow
    $('.slideshow').blinds();
    
    // slide text follow images
    $('#new_tours_wrap #new_tours .new_tours_post:not(:first)').hide();
    $('#new_tours_wrap #new_tours ul li a').click(function(e){
    var num = $(this).text();
    $('#new_tours_wrap #new_tours div.new_tours_post').hide();
    $('#new_tours_wrap #new_tours div.new_tours_post:eq('+ (num - 1) +')').show();
    });
    // auto slide
        var listQuizzesSection = document.getElementById('new_tours_wrap');
        var numchil = listQuizzesSection.getElementsByTagName('li');       
        var licounter = 0;
        setInterval(function(){
        setTimeout(function() {          
           if (licounter < numchil.length) {
                    $('#new_tours_wrap #new_tours ul li a').removeClass('active');
                    $('#new_tours_wrap #new_tours ul li:eq(' + licounter + ') a').trigger('click');
                    $('#new_tours_wrap #new_tours ul li:eq(' + licounter + ') a').addClass('active');
                    //alert(licounter);
                    licounter++;
           } else {
               licounter = 0;
           }
        }, 2000);
        },2000);   
      // clear background nav button
      $('#new_tours_wrap #new_tours ul li a').click(function(e){
          $('#new_tours_wrap #new_tours ul li a').removeClass('active');
      });
});

