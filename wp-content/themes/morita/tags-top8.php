<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/top8.css" type="text/css">

<?php include TEMPLATEPATH.'/bar.php';?>

<section id="inner_body_global">
    
    <div class="top8_list">
        <h1>森田面膜八大明星产品</h1>
        <p>创立于1934年的森田药妆被誉为亚太地区面膜行业先驱，<br>
始终专注于利用最前沿的技术、最新的有效成分为顾客提供安全、功效卓越的产品。<br>
如果您想尝试，就从我的明星产品开始吧！</p>
        <div class="top8_list_content">
            <?php $tag = get_term_by( 'slug', "top8", 'post_tag' ); ?>
            <?php query_posts('showposts=8&tag_id='.$tag->term_id.'&meta_key=sort&orderby=meta_value_num&order=ASC');$i=0;while (have_posts()):$i++;the_post(); ?>
            <div class="tlc" id="post-<?php the_ID(); ?>">
                <div class="tlc_pic <?php if(!is_int($i/2)): ?>tlc_l<?php else: ?>tlc_r<?php endif; ?>">
                    <div class="rank_num"><?php echo $i; ?></div>
                    <?php if(get_post_meta($post->ID, "link", true)==''): ?>
                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                    <?php else: ?>
                    <a><?php the_post_thumbnail(); ?></a>
                    <?php endif; ?>
                </div>
                <div class="tlc_txt <?php if(!is_int($i/2)): ?>tlc_l<?php else: ?>tlc_r<?php endif; ?>">
                    <span class="slogan"><?php echo get_post_meta($post->ID, "slogan2", true); ?></span><br>
                    <?php if(get_post_meta($post->ID, "link", true)==''): ?>
                    <a class="title_p" href="<?php the_permalink() ?>"><?php the_title(); ?></a><br>
                    <?php else: ?>
                    <a class="title_p"><?php the_title(); ?></a><br>
                    <?php endif; ?>
                    <span class="title_p_e"><?php echo get_post_meta($post->ID, "en", true); ?></span>
                </div>
            </div>
            <?php endwhile;wp_reset_query(); ?>
        </div>
    </div>
    
</section>