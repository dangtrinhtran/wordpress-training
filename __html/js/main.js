jQuery(document).ready(function($) {  
    $('#myTab a[href="#random"]').tab('show');
    $('#myTab a').click(function (e) {
    e.preventDefault();
     $(this).tab('show');
    });
    
});
