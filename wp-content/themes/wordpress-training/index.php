<?php 
    get_header(); 
    global $sTemplateURL;
    $sTemplateURL = get_template_directory_uri();
?>
<div id="main" role="main">
            <section class="container">
                <div class="row">
                    <div id="content" class="col-md-9">
                            <?php   
                                    include (TEMPLATEPATH.'/inc/banner.php'); 
                                    include (TEMPLATEPATH.'/inc/post-content.php');
                            ?>                            
                           </div><!--End #content-->
                        <?php get_sidebar(); ?>
                </div><!--End .row-->
            </section>
        </div><!--End #main-->
        <!--End main body of #main-->
        <?php get_footer(); ?>