<?php // Loop tieu chuan cua WP, hien thi post dua tren cau lenh truy van URL
if(have_posts()) : while(have_posts()) : the_post();
//.....
endwhile; else:
//....
endif;
wp_reset_query();
?>

<?php // su dung $query_string de bao toan cau lenh truy van URL
global $query_string;
$post = query_posts($query_string.'post_per_page=5&cat=3&orderby=rand');
if(have_posts()) : while(have_posts()) : the_post();
//...
endwhile; else:
//.....
endif;
wp_reset_query();
?>

<?php // su dung Class new WP_Query de chinh sua hoac tao loop moi hoac nhieu loop tren 1 trang
$featured = new WP_Query('post_per_page=5&cat=3&orderby=rand');
while($featured->have_posts()) : $featured->the_post();
//...
endwhile;
wp_reset_postdata();
?>

<?php // cach thuc tap 1 loop rieng biet hoac nhieu loop tren 1 trang
global $post;
$args = array('numberpost'=>3, 'category'=>5,6,7, 'orderby'=>'rand');
$custom_posts = get_posts($args);
foreach ($custom_posts as $post) : setup_postdata($post);
//..
endforeach;
wp_reset_postdata();
?>

