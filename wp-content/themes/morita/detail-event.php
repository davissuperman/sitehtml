<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/news_detail.css" type="text/css">
<link rel="stylesheet" media="screen and (max-width: 700px)" href="<?php bloginfo('template_url'); ?>/css/brand_mobile.css">

<?php include TEMPLATEPATH.'/bar.php';?>
<?php $cat = get_the_category($post->ID);//print_r($cat); ?>
<section id="inner_body">
    
    <section class="news_detail_list">
        <nav>
            <dl>
                <dt><h2><?php echo $cat[0]->name; ?></h2></dt>
                <dd>
                <?php $cat = get_category_by_slug("event"); ?>
                <ul>
                    <?php query_posts('showposts=10&cat='.$cat->term_id);while (have_posts()) : the_post(); ?>
                    <li>
                    <a href="<?php the_permalink() ?>"><?php echo mb_strimwidth(get_the_title(),0,33,"..."); ?></a>
                    </li>
                    <?php endwhile;wp_reset_query(); ?>
                </ul>
                </dd>
            </dl>
        </nav>
    </section>
    
    <section class="news_detail_content">
        <article class="article_content">
        <?php if (have_posts()): ?>
        <?php while (have_posts()):the_post(); ?>
        <header>
            <h1><?php the_title(); ?></h1>
            <aside><?php the_date(); ?></aside>
        </header>
        <?php if (has_post_thumbnail(get_the_ID())): ?>
        <div class="article_thumb">
            <?php the_post_thumbnail(); ?>
        </div>
         <?php endif; ?>
        <div class="article_post">
            <?php the_content(); ?>
        </div>
       
        <?php endwhile; ?>
        <?php else: ?>
		<?php _e('Not Found'); ?>
		<?php endif; ?>
		</article>
    </section> 
    
    <div style="clear:both;"></div>
    <!--  
    <?php //$cat = get_the_category($post->ID);//print_r($cat); ?>
		<?php if (have_posts()): ?>
		<?php while (have_posts()):the_post(); ?>
		<div class="inner_h">
		<h1>● <?php the_title(); ?></h1>
		</div>
		
		<article style="margin-top:20px;">
		<?php the_content(); ?>
		<?php endwhile; ?>
		<?php else: ?>
			<?php _e('Not Found'); ?>
		<?php endif; ?>
		
    -->
</section>