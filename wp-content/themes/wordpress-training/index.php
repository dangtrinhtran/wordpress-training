<?php 
    get_header(); 
    global $sTemplateURL;
    $sTemplateURL = get_template_directory_uri();
?>
<div id="main" role="main">
            <section class="container">
                <div class="row">
                    <div id="content" class="col-md-9">
                        <div id="banner">
                            <div id="slide" class="clearfix"> 
                                <div class="row">
                                    <div class="col-md-8 slideshow">
                                        <ul>
                                            <li><img src="<?php echo $sTemplateURL; ?>/img/banner.jpg" alt="banner" /></li> 
                                            <li><img src="<?php echo $sTemplateURL; ?>/img/bear.jpg" alt="bear" /></li>  
                                            <li><img src="<?php echo $sTemplateURL; ?>/img/snake.jpg" alt="snake" /></li>
                                            <li><img src="<?php echo $sTemplateURL; ?>/img/horse.jpg" alt="horse" /></li>
                                        </ul>   
                                    </div>
                                       <div id="new_tours_wrap" class="col-md-4">
                                            <div id="new_tours">
                                                <div class="new_tours_post">
                                                    <p class="our_new_tours">Our<span>New tours</span></p>
                                                    <p class="intro">
                                                        Đến với <span class="uppercase">nature tours</span> bạn có thể tham quan hoặc tìm kiếm thông tin về các thắng cảnh ở bất kì nơi nào trên thế giới mà bạn muốn.
                                                        <a href="#" class="read_more">Continue reading...</a>
                                                    </p>
                                                </div>
                                                <div class="new_tours_post">
                                                    <p class="our_new_tours">Our<span>Con Chó</span></p>
                                                    <p class="intro">
                                                        Đến với <span class="uppercase">nature tours</span> bạn có thể tham quan hoặc tìm kiếm thông tin về các thắng cảnh ở bất kì nơi nào trên thế giới mà bạn muốn.
                                                        <a href="#" class="read_more">Continue reading...</a>
                                                    </p>
                                                </div>
                                                <div class="new_tours_post">
                                                    <p class="our_new_tours">Our<span>Con Mèo</span></p>
                                                    <p class="intro">
                                                        Đến với <span class="uppercase">nature tours</span> bạn có thể tham quan hoặc tìm kiếm thông tin về các thắng cảnh ở bất kì nơi nào trên thế giới mà bạn muốn.
                                                        <a href="#" class="read_more">Continue reading...</a>
                                                    </p>
                                                </div>
                                                <div class="new_tours_post">
                                                    <p class="our_new_tours">Our<span>Con Cọp</span></p>
                                                    <p class="intro">
                                                        Đến với <span class="uppercase">nature tours</span> bạn có thể tham quan hoặc tìm kiếm thông tin về các thắng cảnh ở bất kì nơi nào trên thế giới mà bạn muốn.
                                                        <a href="#" class="read_more">Continue reading...</a>
                                                    </p>
                                                </div>
                                                <ul id="nav_slide">
                                                    <li><a href="#" onclick="$('.slideshow').blinds_change(0)">1</a></li>
                                                    <li><a href="#" onclick="$('.slideshow').blinds_change(1)">2</a></li>
                                                    <li><a href="#" onclick="$('.slideshow').blinds_change(2)">3</a></li>
                                                    <li><a href="#" onclick="$('.slideshow').blinds_change(3)">4</a></li>
                                                </ul>
                                            </div><!--end #new_tours-->
                                        </div><!--end #new_tours_wrap-->
                                    </div><!-- #slide-->
                            </div>
                            
                                <div id="welcome">
                                    <a href="#"><h1 class="uppercase">Lorem ipsum <span>dolor</span> sit amet</h1></a>

                                    <p>
                                        Blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis <a href="#" class="bold">tutorials guides</a>.
                                    </p>

                                    <img src="<?php echo $sTemplateURL; ?>/img/photographer.png" alt="people" />
                                </div><!-- #welcome-->
                            </div><!-- #banner-->
                            <div id="post_content">
                                <ul class="nav nav-tabs" id="myTab" >
                                    
                                            <li class="col-md-4"><a href="#random" data-toggle="tab">Random</a></li>
                                            <li class="col-md-4"><a href="#recent" data-toggle="tab">Recent</a></li>
                                            <li class="col-md-4"><a href="#popular" data-toggle="tab">Poppular</a></li>
                                    
                                </ul>
                                        <div class="tab-content">
                                            <div id="random" class="tab-pane fade">
                                                <ul class="post-item group">
                                                    <li>
                                                        <a href="#"><img src="<?php echo $sTemplateURL; ?>/img/post_item_1.jpg" alt="post item" /></a>
                                                        <a href="#"><h3>Lorem ipsum dolor</h3></a>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="<?php echo $sTemplateURL; ?>/img/post_item_2.jpg" alt="post item" /></a>
                                                        <a href="#"><h3>Sed diam nonummy</h3></a>
                                                        <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="<?php echo $sTemplateURL; ?>/img/post_item_3.jpg" alt="post item" /></a>
                                                        <h3><a href="#"><h3>Nam liber tempor</h3></a>
                                                        <p>Nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait.</p>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="<?php echo $sTemplateURL; ?>/img/post_item_4.jpg" alt="post item" /></a>
                                                        <a href="#"><h3>Ut wisi enim</h3></a>
                                                        <p>Lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur.</p>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="<?php echo $sTemplateURL; ?>/img/post_item_5.jpg" alt="post item" /></a>
                                                        <a href="#"><h3>Duis autem vel</h3></a>
                                                        <p>Legere me lius quod ii est etiam processus dynamicus, qui seacula quarta decima et quinta decima. Modo typi luptatum zzril delenit augue.</p>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="<?php echo $sTemplateURL; ?>/img/post_item_6.jpg" alt="post item" /></a>
                                                        <a href="#"><h3>Eodem modo typi</h3></a>
                                                        <p>Anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                                    </li>						
                                                </ul>
                                            </div>

                                            <div id="recent" class="tab-pane fade">
                                                <ul class="post-item group">
                                                    <li>
                                                        <a href="#"><img src="<?php echo $sTemplateURL; ?>/img/post_item_6.jpg" alt="post item" /></a>
                                                        <a href="#"><h3>Lorem ipsum dolor</h3></a>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="<?php echo $sTemplateURL; ?>/img/post_item_5.jpg" alt="post item" /></a>
                                                        <a href="#"><h3>Sed diam nonummy</h3></a>
                                                        <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="<?php echo $sTemplateURL; ?>/img/post_item_1.jpg" alt="post item" /></a>
                                                        <a href="#"><h3>Nam liber tempor</h3></a>
                                                        <p>Nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait.</p>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="<?php echo $sTemplateURL; ?>/img/post_item_3.jpg" alt="post item" /></a>
                                                        <a href="#"><h3>Duis autem vel</h3></a>
                                                        <p>Legere me lius quod ii est etiam processus dynamicus, qui seacula quarta decima et quinta decima. Modo typi luptatum zzril delenit augue.</p>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="<?php echo $sTemplateURL; ?>/img/post_item_2.jpg" alt="post item" /></a>
                                                        <a href="#"><h3>Eodem modo typi</h3></a>
                                                        <p>Anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="<?php echo $sTemplateURL; ?>/img/post_item_4.jpg" alt="post item" /></a>
                                                        <a href="#"><h3>Ut wisi enim</h3></a>
                                                        <p>Lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur.</p>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div id="popular" class="tab-pane fade">
                                                <ul class="post-item group">
                                                    <li>
                                                        <a href="#"><img src="<?php echo $sTemplateURL; ?>/img/post_item_3.jpg" alt="post item" /></a>
                                                        <a href="#"><h3>Lorem ipsum dolor</h3></a>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="<?php echo $sTemplateURL; ?>/img/post_item_1.jpg" alt="post item" /></a>
                                                        <a href="#"><h3>Sed diam nonummy</h3></a>
                                                        <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="<?php echo $sTemplateURL; ?>/img/post_item_4.jpg" alt="post item" /></a>
                                                        <a href="#"><h3>Ut wisi enim</h3></a>
                                                        <p>Lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur.</p>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="<?php echo $sTemplateURL; ?>/img/post_item_6.jpg" alt="post item" /></a>
                                                        <a href="#"><h3>Nam liber tempor</h3></a>
                                                        <p>Nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait.</p>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="<?php echo $sTemplateURL; ?>/img/post_item_5.jpg" alt="post item" /></a>
                                                        <a href="#"><h3>Duis autem vel</h3></a>
                                                        <p>Legere me lius quod ii est etiam processus dynamicus, qui seacula quarta decima et quinta decima. Modo typi luptatum zzril delenit augue.</p>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="<?php echo $sTemplateURL; ?>/img/post_item_2.jpg" alt="post item" /></a>
                                                        <a href="#"><h3>Eodem modo typi</h3></a>
                                                        <p>Anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                                    </li>						
                                                </ul>
                                            </div>
                                        </div><!--End #tab-content-->
                            </div><!-- #post_content-->  
                           </div><!--End #content-->
                        <?php get_sidebar(); ?>
                </div><!--End .row-->
            </section>
        </div><!--End #main-->
        <!--End main body of #main-->
        <?php get_footer(); ?>