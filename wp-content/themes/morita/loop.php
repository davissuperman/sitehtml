<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/pro.css" type="text/css">

<link rel="stylesheet" media="screen and (max-width: 700px)" href="<?php bloginfo('template_url'); ?>/css/loop_mobile.css">

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/idangerous.swiper.css">
<script src="<?php bloginfo('template_url'); ?>/js/idangerous.swiper.min.js"></script>

<?php $cat_data = get_category($cat);//print_r($cat_data); ?>
<section id="inner_body_global">
    <?php include TEMPLATEPATH.'/bar.php';?>
    <div class="product_content">
        <div class="pro_kv">
            <?php
        	if ( get_option('_category_image'.$cat_data->term_id) ){
        		echo '<img title="'.$cat_data->name.'" alt="'.$cat_data->name.'" src="'.get_option('_category_image'.$cat_data->term_id).'" />';
        	}
        	?>
        </div>
        
        <div class="product_slider">
            <a class="a_j arrow-left_product" href="#"></a> 
            <a class="a_j arrow-right_product" href="#"></a>
            <div class="swiper-container_product">
                <div class="swiper-wrapper">
                    <?php $i=0;while (have_posts()):$i++;the_post(); ?>
                    <div class="swiper-slide" id="post-<?php the_ID(); ?>">
                        <div class="s_pic"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a></div>
                        <div class="s_t">
                        <a href="<?php the_permalink() ?>"><span><?php echo get_post_meta($post->ID, "en", true); ?></span><br>
                        <?php the_title(); ?></a>
                        </div>
                        
                    </div>
                    <?php endwhile; ?>
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
    <div class="loop_mobile">
        <?php if($cat_data->slug=='classic'): ?>
        <div style="width:100%;font-size:0px;"><img style="width:100%;" src="<?php bloginfo('template_url'); ?>/img/cb1.jpg"></div>
        <?php elseif($cat_data->slug=='tiansi'): ?>
        <div style="width:100%;font-size:0px;"><img style="width:100%;" src="<?php bloginfo('template_url'); ?>/img/cb2.jpg"></div>
        <?php elseif($cat_data->slug=='white'): ?>
        <div style="width:100%;font-size:0px;"><img style="width:100%;" src="<?php bloginfo('template_url'); ?>/img/cb3.jpg"></div>
        <?php elseif($cat_data->slug=='skin'): ?>
        <div style="width:100%;font-size:0px;"><img style="width:100%;" src="<?php bloginfo('template_url'); ?>/img/cb4.jpg"></div>
        <?php elseif($cat_data->slug=='young'): ?>
        <div style="width:100%;font-size:0px;"><img style="width:100%;" src="<?php bloginfo('template_url'); ?>/img/cb5.jpg"></div>
        <?php elseif($cat_data->slug=='firstlove'): ?>
        <div style="width:100%;font-size:0px;"><img style="width:100%;" src="<?php bloginfo('template_url'); ?>/img/cb6.jpg"></div>
        <?php elseif($cat_data->slug=='selected'): ?>
        <div style="width:100%;font-size:0px;"><img style="width:100%;" src="<?php bloginfo('template_url'); ?>/img/cb7.jpg"></div>
        <?php elseif($cat_data->slug=='wave'): ?>
        <div style="width:100%;font-size:0px;"><img style="width:100%;" src="<?php bloginfo('template_url'); ?>/img/cb8.jpg"></div>
        <?php endif; ?>
        
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