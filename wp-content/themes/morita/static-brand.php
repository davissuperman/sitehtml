<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/static.css" type="text/css">
<link rel="stylesheet" media="screen and (max-width: 700px)" href="<?php bloginfo('template_url'); ?>/css/brand_static_mobile.css">

<script src="<?php bloginfo('template_url'); ?>/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>

<script src="<?php bloginfo('template_url'); ?>/js/jwplayer.js" type="text/javascript"  charset="utf-8"></script>


<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/idangerous.swiper.css">
<script src="<?php bloginfo('template_url'); ?>/js/idangerous.swiper.min.js"></script>


<?php include TEMPLATEPATH.'/bar.php';?>

<section id="inner_body">
    
    <div class="brand_static">
            <script type="text/javascript">
            $(function(){
            	$(".slideBox").slide({mainCell:".bd ul",effect:"left",autoPlay:false,delayTime:700,interTime:5000});
            });
    		</script>
    		
    		
            <div id="slideBox" class="slideBox" style="width:860px;height:500px;">
    			<div class="bd">
    			
    				<!-- 动态读取 -->
                	<?php if (have_posts()): ?>
                	<?php while (have_posts()):the_post(); ?>
                		<?php the_content(); ?>
                	<?php endwhile; ?>
                	<?php else: ?>
                		<?php _e('Not Found'); ?>
                	<?php endif; ?>
                	<!-- /动态读取 -->
    				
    			</div>
    			<!-- 下面是前/后按钮代码，如果不需要删除即可 -->
                <a class="a_j arrow-left_team prev" href="javascript:void(0)" style="left:-80px;"></a> 
                <a class="a_j arrow-right_team next" href="javascript:void(0)" style="right:-80px;"></a>
    		</div>
        </div>
        
        
    </div>
    
    <div class="brand_static_mobile">
        <div class="brand_static_m_d">
            <div class="brand_swiper" style="overflow:hidden;">
                
                <!-- 动态读取 -->
            	<?php if (have_posts()): ?>
            	<?php while (have_posts()):the_post(); ?>
            		<?php the_content(); ?>
            	<?php endwhile; ?>
            	<?php else: ?>
            		<?php _e('Not Found'); ?>
            	<?php endif; ?>
            	<!-- /动态读取 -->
            	
            </div>
            <script>
            $(document).ready(function(){
                var mySwiper = new Swiper('.brand_swiper',{
                    grabCursor: true,
                    
                    slidesPerView:1
                });
                
            }); 
            </script>
        </div>
    </div>

    
</section>