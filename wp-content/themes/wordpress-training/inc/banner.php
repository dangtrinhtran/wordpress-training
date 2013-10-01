<div id="banner">
    <div id="slide" class="clearfix">                                
        <ul id="s4" class="banner-header">
            <?php
            global $post;
            $args = array('numberpost' => 4, 'category' => 4);
            $custom_posts = get_posts($args);
            foreach ($custom_posts as $post) : setup_postdata($post);
                ?>
                <li class="clearfix">
                    <?php the_post_thumbnail(); ?>
                    <div class="slide-content">
                        <p class="our_new_tours">Our<span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></p>
                        <p class="intro">
                            <?php echo get_the_excerpt(); ?>
                        </p>
                    </div>
                </li> 
            <?php endforeach;?>                                            
        </ul>    
        <div id="nav_slide" class="nav_slide"></div>
    </div><!-- #slide-->

    <div id="welcome">
        <a href="#"><h1 class="uppercase">Lorem ipsum <span>dolor</span> sit amet</h1></a>

        <p>
            Blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis <a href="#" class="bold">tutorials guides</a>.
        </p>

        <img src="<?php echo $sTemplateURL; ?>/img/photographer.png" alt="people" />
    </div><!-- #welcome-->
</div><!-- #banner-->
