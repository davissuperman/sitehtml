<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/static.css" type="text/css">

<link rel="stylesheet" media="screen and (max-width: 700px)" href="<?php bloginfo('template_url'); ?>/css/labs_mobile.css">

<?php include TEMPLATEPATH.'/bar.php';?>

<section id="inner_body">
    
    
    <!-- 动态读取 -->
	<?php if (have_posts()): ?>
	<?php while (have_posts()):the_post(); ?>
	    <div class="mm_ll">
            <img src="<?php echo get_post_meta($post->ID, "pic", true); ?>">
        </div>
		<?php the_content(); ?>
		<div class="mm_ll mm_ll_2">
            <img src="<?php echo get_post_meta($post->ID, "pic2", true); ?>">
        </div>
	<?php endwhile; ?>
	<?php else: ?>
		<?php _e('Not Found'); ?>
	<?php endif; ?>
	<!-- /动态读取 -->
</section>