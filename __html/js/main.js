jQuery(document).ready(function($) {  
    $('#myTab a[href="#random"]').tab('show');
    $('#myTab a').click(function (e) {
    e.preventDefault();
     $(this).tab('show');
    });
    $('#s4').before('<div id="nav_slide">').cycle({ 
    fx:     'turnDown', 
    speed:  'fast', 
    timeout: 0, 
    pager:  '#nav' 
});
});
