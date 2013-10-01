<?php get_header(); ?>
<div id="main" role="main">
    <section class="container">
        <div class="row">
            <div id="content" class="col-md-9">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
                <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
            
                    <h3><?php the_title(); ?></h3>
                    
                    <div class="entry">
                        <?php                       
                            the_content(); 
                            wp_link_pages(array('before' => 'Pages: ','next_or_number' => 'number' ));
                            the_tags('Tag: ',', ','');
                        
                        ?>
                                              
                    </div>
                    <?php edit_post_link('Edit this entry','','.'); ?>
                </div><!-- End post-class-->
                <?php endwhile;endif; ?>
                <?phpcomments_template(); ?>
            </div><!--End #content-->
            <?php get_sidebar(); ?>
        </div><!--End .row-->
    </section>
</div><!--End #main-->
<!--End main body of #main-->
<?php get_footer(); ?>