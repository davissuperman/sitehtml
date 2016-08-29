<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/static.css" type="text/css">

<link rel="stylesheet" media="screen and (max-width: 700px)" href="<?php bloginfo('template_url'); ?>/css/decl_mobile.css">

<?php include TEMPLATEPATH.'/bar.php';?>

<section id="inner_body">
    
    

    <!-- 动态读取 -->
	<?php if (have_posts()): ?>
	<?php while (have_posts()):the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
	<?php else: ?>
		<?php _e('Not Found'); ?>
	<?php endif; ?>
	<!-- /动态读取 -->
</section>