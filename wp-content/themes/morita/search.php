<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/brand.css" type="text/css">

<link rel="stylesheet" media="screen and (max-width: 700px)" href="<?php bloginfo('template_url'); ?>/css/search_mobile.css">


<script src="<?php bloginfo('template_url'); ?>/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<?php include TEMPLATEPATH.'/bar.php';?>

<?php $cat_data = get_category($cat);//print_r($cat_data); ?>
<section id="inner_body" style="padding-bottom:20px;">
    <?php if ( have_posts() ) : ?>
    <h1 class="search_h1" style="font-size:18px;color:#959494;margin:0px;padding:30px 0px 30px 0px;">搜索到关于“<?php echo $_GET['s']; ?>”的结果</h1>
    <!-- list -->
    <div class="news_list" style="border-top:#dfdfdf solid 1px;">
        <ul>
            <?php $i=0;while (have_posts()):$i++;the_post();//print_r($post); ?>
            <li id="post-<?php the_ID(); ?>">
                <?php if(get_post_meta($post->ID, "link", true)==''): ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="title"><?php echo mb_strimwidth(get_the_title(),0,100,"..."); ?></div>
                    <div class="date"><?php echo get_the_date("Y.m.d"); ?></div>
                </a>
                <?php else: ?>
                <a href="http://www.drmorita.cc/tag/top8">
                    <div class="title"><?php echo mb_strimwidth(get_the_title(),0,100,"..."); ?></div>
                    <div class="date"><?php echo get_the_date("Y.m.d"); ?></div>
                </a>
                <?php endif; ?>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
    <!-- /list -->
    <?php else: ?>
    <div style="padding:30px;background:#fafafa;color:#171717;font-size:20px;border:#dfdfdf solid 1px;">
        抱歉，该搜索条件下暂无与“<?php echo $_GET['s']; ?>”相关的结果
    </div>
    <?php endif; ?>
    
    <!-- 导航 -->
	<div class="navigation-pages">
		<?php if(function_exists('wp_pagenavi')) : ?>
		<?php wp_pagenavi(); ?>
		<?php else: ?>
		<?php posts_nav_link('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','Preview','Next'); ?>
		<?php endif; ?>
	</div>
	<!-- /导航 -->
	<script>
    $(function(){
        $(".mobile_more").click(function(){
            var obj = $(".brand_mobile_list li.brand_m_hide");
            var num = 5;
            if(obj.length>5){
                num = 5;
            }
            else{
            	num = obj.length;
            }
            for(var i=0;i<num;i++){
                obj.eq(i).removeClass("brand_m_hide");
                if(!$(".brand_mobile_list li").hasClass("brand_m_hide")){
                    $(this).fadeOut("fast");
                }
            }
        });
    });
	</script>
    
</section>
<?php get_footer(); ?>