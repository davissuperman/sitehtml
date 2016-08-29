<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/question.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/idangerous.swiper.css">
<script src="<?php bloginfo('template_url'); ?>/js/idangerous.swiper.min.js"></script>


<link rel="stylesheet" media="screen and (max-width: 700px)" href="<?php bloginfo('template_url'); ?>/css/loop_mobile.css">


<?php $cat_data = get_category($cat);//print_r($cat_data); ?>
<section id="inner_body_global">
    <?php include TEMPLATEPATH.'/bar.php';?>
    <div class="pro_list pro_list_q">
        <div class="inner_h1_glo"><h1><?php
        	if ( get_option('_category_image'.$cat_data->term_id) ){
        		echo get_option('_category_image'.$cat_data->term_id);
        	}
        	?></h1></div>
        <div class="pro_slider">
            <a class="a_jian arrow-left_pro" href="#"></a> 
            <a class="a_jian arrow-right_pro" href="#"></a>
            <div class="swiper-container_pro">
                <div class="swiper-wrapper">
                    <?php $i=0;while (have_posts()):$i++;the_post(); ?>
                    <div class="swiper-slide" id="post-<?php the_ID(); ?>">
                        <?php the_post_thumbnail(); ?>
                        <div class="pro_t"><?php the_title(); ?></div>
                        <div class="pro_t_en"><?php echo get_post_meta($post->ID, "en", true);; ?></div>
                        <a class="pro_more" href="<?php the_permalink() ?>">查看详情&nbsp;&gt;</a>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <script>
            $(document).ready(function(){
                var mySwiper = new Swiper('.swiper-container_pro',{
                    grabCursor: true,
                    paginationClickable: true,
                    slidesPerView:3
                });
                $('.arrow-left_pro').on('click', function(e){
                    e.preventDefault();
                    mySwiper.swipePrev();
                });
                $('.arrow-right_pro').on('click', function(e){
                    e.preventDefault();
                    mySwiper.swipeNext();
                });
            }); 
            </script>
        </div>
    </div>
    
    
    
    
    <!-- mobile -->
    <div class="loop_mobile" style="background:white;">
        <h1 style="margin:0px;padding:10px;border-bottom:#e60911 dotted 2px;font-size:16px;"><?php echo $cat_data->name; ?></h1>
        
        <?php $i=0;while (have_posts()):$i++;the_post(); ?>
        <div class="ppppppp" id="post-<?php the_ID(); ?>">
            <div class="ppppppp_pic"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a></div>
            <div class="ppppppp_t">
            <a href="<?php the_permalink() ?>"><span><?php the_title(); ?></span><br>
            <?php echo get_post_meta($post->ID, "en", true); ?><br><span>查看详细 &gt;</span></a>
            </div>
            
        </div>
        <?php endwhile; ?>
    </div>
</section>

