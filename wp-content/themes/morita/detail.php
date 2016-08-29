<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/pro.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/idangerous.swiper.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.mCustomScrollbar.css">
<script src="<?php bloginfo('template_url'); ?>/js/idangerous.swiper.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>


<link rel="stylesheet" media="screen and (max-width: 700px)" href="<?php bloginfo('template_url'); ?>/css/detail_mobile.css">

<script>
$(function(){
	$(".tab li").click(function(){
		var num = $(".tab li").index(this);
		$(".tab li a").removeClass("current");
		$(this).find("a").addClass("current");
		$(".mCSB_container div").hide();
		$(".mCSB_container>div").eq(num).fadeIn();
	});

	
	$(".tab li").css("width",100/$(".tab li").length+"%");
});
</script>
<?php $postid = $post->ID?>
<?php $cat_data = get_the_category($post->ID);//print_r($cat_data); ?>
<section id="inner_body_global">
    <?php include TEMPLATEPATH.'/bar.php';?>
    <div class="product_content">
        <?php if (have_posts()): ?>
        <?php while (have_posts()):the_post();//print_r($post); ?>
        <div class="product_content_detail">
            <div class="product_content_detail_l">
                <a href="http://www.drmorita.cc/shop"><img src="<?php echo get_post_meta($post->ID, "pic", true); ?>" alt="<?php the_title(); ?>"></a>
            </div>
            <div class="product_content_detail_r">
                <?php the_content(); ?>
                <style>
                div.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{
                	background:#e60911;
                }
                div.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar:hover{
                	background:#e60911;
                	opacity:0.5;
                }
                div.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar,
                	.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar{
                		background-color: #e60911;opacity:0.5;
                	}
                </style>
                <script>
                $(function(){
                	$(".product_des").mCustomScrollbar({
                        
                    });
                });
                </script>
            </div>
        </div>
        <?php endwhile; ?>
        <?php else: ?>
		<?php _e('Not Found'); ?>
		<?php endif; ?>
		
		<?php
		$category_f = array();
		for($i=0;$i<count($cat_data);$i++){
		    if($cat_data[$i]->parent==18){
		        $category_f[0] = $cat_data[$i];
		    }
		}
		//print_r($category_f);
		$cat = get_category_by_slug( $category_f[0]->slug );
		
		?>
		<div class="product_slider">
		    <h2><?php echo $cat->name; ?></h2>
            <a class="a_j arrow-left_product" href="#" style="top:60%;"></a> 
            <a class="a_j arrow-right_product" href="#" style="top:60%;"></a>
            <div class="swiper-container_product" style="height:143px;">
                <div class="swiper-wrapper" style="height:143px;overflow:hidden;">
                    <?php query_posts('showposts=100&cat='.$cat->term_id);while (have_posts()) : the_post(); ?>
                    <?php if($postid!=$post->ID): ?>
                    <div class="swiper-slide" id="post-<?php the_ID(); ?>" style="height:143px;">
                        <div class="s_pic"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a></div>
                        <div class="s_t">
                        <a href="<?php the_permalink() ?>"><span><?php echo get_post_meta($post->ID, "en", true); ?></span><br>
                        <?php the_title(); ?></a>
                        </div>
                        
                    </div>
                    <?php endif; ?>
                    <?php endwhile;wp_reset_query(); ?>
                </div>
            </div>
            
            <script>
            $(document).ready(function(){
                var mySwiper = new Swiper('.swiper-container_product',{
                    grabCursor: true,
                    paginationClickable: true,
                    slidesPerView:4
                });
                $('.arrow-left_product').on('click', function(e){
                    e.preventDefault();
                    mySwiper.swipePrev();
                });
                $('.arrow-right_product').on('click', function(e){
                    e.preventDefault();
                    mySwiper.swipeNext();
                });
            }); 
            </script>
        </div>
    </div>
    
    
    
    
    
    
    <!-- mobile -->
    <div class="loop_mobile" style="padding:10px;background:white;">
        <div style="width:100%;"><a href="http://www.drmorita.cc/shop"><img style="width:100%;" src="<?php echo get_post_meta($post->ID, "pic2", true); ?>" alt="<?php the_title(); ?>"></a></div>
        <div class="product_content_detail_r" style="float:none;width:100%;height:auto;">
            <?php the_content(); ?>
        </div>
    </div>
    
    
    
</section>