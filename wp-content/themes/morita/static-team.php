<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/static.css" type="text/css">

<link rel="stylesheet" media="screen and (max-width: 700px)" href="<?php bloginfo('template_url'); ?>/css/team_mobile.css">


<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/idangerous.swiper.css">
<script src="<?php bloginfo('template_url'); ?>/js/idangerous.swiper.min.js"></script>

<?php include TEMPLATEPATH.'/bar.php';?>

<section id="inner_body">
    
    <div class="team_btns">
        <?php $pages = get_pages("child_of=".$post->post_parent."&parent=".$post->post_parent);//print_r($post); ?>
        <?php foreach ($pages as $k=>$v): ?>
        <a class="team_btn<?php if($v->post_name==$post->post_name): ?> team_current<?php endif; ?>" href="<?php echo get_page_link($v); ?>"><?php echo $v->post_title; ?></a>
        <?php endforeach; ?>
    </div>
    
    <h1 class="team_h1"><?php the_title(); ?></h1>
    
    <div class="team_slider">
        <a class="a_j arrow-left_team" href="#"></a> 
        <a class="a_j arrow-right_team" href="#"></a>
        <div class="swiper-container_team" style="height:500px;">
            <div class="swiper-wrapper" style="height:500px;">
            
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
            <div class="team_pagination"></div>
        </div>
        
        <script>
            $(document).ready(function(){
                var mySwiper = new Swiper('.swiper-container_team',{
                	pagination: '.team_pagination',
                    grabCursor: true,
                    paginationClickable: true,
                    loop:true,
                    slidesPerView:1
                });
                $('.arrow-left_team').on('click', function(e){
                    e.preventDefault();
                    mySwiper.swipePrev();
                });
                $('.arrow-right_team').on('click', function(e){
                    e.preventDefault();
                    mySwiper.swipeNext();
                });
            }); 
         </script>
    </div>
    
</section>