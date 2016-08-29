<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/static.css" type="text/css">
<?php include TEMPLATEPATH.'/bar.php';?>

<section id="inner_body">
    
    <div class="story_plat">
        <h1><img src="<?php bloginfo('template_url'); ?>/img/tt.jpg" width='100%' alt="获奖记录"></h1>
        <div style="overflow:hidden;">
        
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
    </div>

    
</section>