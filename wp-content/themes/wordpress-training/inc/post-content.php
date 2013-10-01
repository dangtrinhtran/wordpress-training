<?php 
global $post;
?>
<div id="post_content">
    <ul class="nav nav-tabs" id="myTab" >

        <li class="col-md-4"><a href="#random" data-toggle="tab">Destination</a></li>
        <li class="col-md-4"><a href="#recent" data-toggle="tab">Species</a></li>
        <li class="col-md-4"><a href="#popular" data-toggle="tab">Tour Type</a></li>

    </ul>
    <div class="tab-content">
        <div id="random" class="tab-pane fade">
            <ul class="post-item group">
                <?php 
                    query_posts(array ( 'category_name' => 'destination', 'posts_per_page' => 6 ) ); 
                    while(have_posts()) : the_post(); 
                ?>
                <li>
                    <a href="<?php the_permalink(); ?>" data-tooltip="<?php the_content_rss('',true,'',30); ?>"><?php the_post_thumbnail(); ?></a>
                    <a href="<?php the_permalink(); ?>" data-tooltip="<?php the_content_rss('',true,'',30); ?>"><h3><?php the_title(); ?></h3></a>
                    <p><?php echo get_the_excerpt(); ?></p>
                </li>
                <?php 
                        endwhile;
                        wp_reset_query();
                ?>               					
            </ul>
        </div>

        <div id="recent" class="tab-pane fade">
            <ul class="post-item group">
                <?php 
                    query_posts(array ( 'category_name' => 'species', 'posts_per_page' => 6 ) ); 
                    while(have_posts()) : the_post(); 
                ?>
                <li>
                    <a href="<?php the_permalink(); ?>" data-tooltip="<?php the_content_rss('',true,'',30); ?>"><?php the_post_thumbnail(); ?></a>
                    <a href="<?php the_permalink(); ?>" data-tooltip="<?php the_content_rss('',true,'',30); ?>"><h3><?php the_title(); ?></h3></a>
                    <p><?php echo get_the_excerpt(); ?></p>
                </li>
                <?php 
                        endwhile;
                        wp_reset_query();
                ?>                          
            </ul>
        </div>

        <div id="popular" class="tab-pane fade">
            <ul class="post-item group">
               <?php 
                    query_posts(array ( 'category_name' => 'tour-type', 'posts_per_page' => 6 ) ); 
                    while(have_posts()) : the_post(); 
                ?>
                <li>
                    <a href="<?php the_permalink(); ?>" data-tooltip="<?php the_content_rss('',true,'',30); ?>"><?php the_post_thumbnail(); ?></a>
                    <a href="<?php the_permalink(); ?>" data-tooltip="<?php the_content_rss('',true,'',30); ?>"><h3><?php the_title(); ?></h3></a>
                    <p><?php echo get_the_excerpt(); ?></p>
                </li>
                <?php 
                        endwhile;
                        wp_reset_query();
                ?>					
            </ul>
        </div>
    </div><!--End #tab-content-->
</div><!-- #post_content--> 