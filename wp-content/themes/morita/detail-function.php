<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/news_detail.css" type="text/css">
<link rel="stylesheet" media="screen and (max-width: 700px)" href="<?php bloginfo('template_url'); ?>/css/brand_mobile.css">

<style>
.mm_video{
	display:none;
}
@media screen and (max-width: 700px) { /*当屏幕尺寸小于700px时，应用下面的CSS样式*/
  .mm_video {
    display:block;
  }
  #video_wrapper,.vvvv{
  	display:none;
  }
}
</style>

<script src="<?php bloginfo('template_url'); ?>/js/jwplayer.js" type="text/javascript"  charset="utf-8"></script>
<?php include TEMPLATEPATH.'/bar.php';?>
<?php $cat = get_the_category($post->ID);//print_r($cat); ?>
<section id="inner_body">
    
    <section class="news_detail_list">
        <nav>
            <dl>
                <dt><h2><?php echo $cat[0]->name; ?></h2></dt>
                <dd>
                <?php $cat = get_category_by_slug("function"); ?>
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
            <h1 style="margin-bottom:0px;"><?php the_title(); ?></h1>
        </header>
        
        <div class="article_thumb">
            <?php if(get_post_meta($post->ID, "movie", true)==''): ?>
            <?php the_post_thumbnail(); ?>
            <?php else: ?>
            <video class="mm_video" style="width:100%;" src="<?php echo get_post_meta($post->ID, "movie2", true); ?>" controls="controls">
            您的浏览器不支持 video 标签。
            </video>
            <div id="video_wrapper" style="position: relative; width: 640px; height: 300px;margin:0 auto;">
            <object class="vvvv" width="100%" height="100%" type="application/x-shockwave-flash" data="player.swf" bgcolor="#000000" id="video" name="video" tabindex="0">
    		<param name="allowfullscreen" value="true">
    		<param name="allowscriptaccess" value="always">
    		<param name="seamlesstabbing" value="true">
    		<param name="wmode" value="opaque">
    		</object>
    		<script type="text/javascript">
            $(function(){
                    jwplayer("video").setup({
                        flashplayer: "<?php bloginfo('template_url'); ?>/js/player.swf",
                        file: "<?php echo get_post_meta($post->ID, "movie", true); ?>",
                        width:640,
                        height:300,
                        image:"<?php echo get_post_meta($post->ID, "pic", true); ?>"
                    });
            });
    	    </script>
    	    </div>
            <?php endif; ?>
        </div>
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