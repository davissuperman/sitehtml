<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/static.css" type="text/css">
<link rel="stylesheet" media="screen and (max-width: 700px)" href="<?php bloginfo('template_url'); ?>/css/ph_mobile.css">

<?php include TEMPLATEPATH.'/bar.php';?>

<section id="inner_body">
    
    <div class="team_btns">
        <?php $pages = get_pages("child_of=".$post->post_parent."&parent=".$post->post_parent);//print_r($post); ?>
        <?php foreach ($pages as $k=>$v): ?>
        <a class="team_btn<?php if($v->post_name==$post->post_name): ?> team_current<?php endif; ?>" href="<?php echo get_page_link($v); ?>"><?php echo $v->post_title; ?></a>
        <?php endforeach; ?>
    </div>
    

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