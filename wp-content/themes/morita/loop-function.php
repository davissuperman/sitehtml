<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/brand.css" type="text/css">
<link rel="stylesheet" media="screen and (max-width: 700px)" href="<?php bloginfo('template_url'); ?>/css/brand_mobile.css">

<script src="<?php bloginfo('template_url'); ?>/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jwplayer.js" type="text/javascript"  charset="utf-8"></script>

<script src="<?php bloginfo('template_url'); ?>/js/idangerous.swiper.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/idangerous.swiper.css">
<?php include TEMPLATEPATH.'/bar.php';?>

<?php $cat_data = get_category($cat);//print_r($cat_data); ?>
<section id="inner_body">
    <!--div class="inner_h1"><h1><?php echo $cat_data->name; ?></h1></div-->
    
    <div class="brand_kv fang_kv" style="background:black;position:relative;">
		<?php $cat = get_category_by_slug($cat_data->category_nicename); ?>
        <?php query_posts('showposts=1&cat='.$cat->term_id);while (have_posts()) : the_post(); ?>
        <?php if(get_post_meta($post->ID, "movie", true)==''): ?>
        <?php the_post_thumbnail(); ?>
        <?php else: ?>
        <div id="video_wrapper" style="position: relative; width: 774px; height: 440px;margin:0 auto;padding-top:30px;">
        <object width="100%" height="100%" type="application/x-shockwave-flash" data="player.swf" bgcolor="#000000" id="video" name="video" tabindex="0">
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
                    width:774,
                    height:440,
                    image:"<?php echo get_post_meta($post->ID, "pic", true); ?>"
                });
        });
	    </script>
	    </div>
        <?php endif; ?>
        <?php endwhile;wp_reset_query(); ?>
        <div class="bd_txt" style="z-index:100;">
            <div style="padding-left:20px;height:100%;line-height:55px;"><?php echo mb_strimwidth(get_the_title(), 0, 55, '...'); ?></div>
        </div>
    </div>
    
    <!-- list -->
    <div class="news_list">
        <ul>
            <?php $i=0;while (have_posts()):$i++;the_post(); ?>
            <li id="post-<?php the_ID(); ?>">
                <a href="<?php the_permalink(); ?>">
                    <div class="title"><?php echo mb_strimwidth(get_the_title(),0,100,"..."); ?></div>
                    <div class="date"><?php echo get_the_date("Y.m.d"); ?></div>
                </a>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
    <!-- /list -->
    
    <!-- 导航 -->
	<div class="navigation-pages">
		<?php if(function_exists('wp_pagenavi')) : ?>
		<?php wp_pagenavi(); ?>
		<?php else: ?>
		<?php posts_nav_link('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','Preview','Next'); ?>
		<?php endif; ?>
	</div>
	<!-- /导航 -->
	
	
	
	
	
	<!-- mobile -->
	<div class="brand_mobile">
	    
	    <h1 style="margin:0px;padding:10px 0px 10px 0px;font-size:16px;"><?php echo $cat->name;?></h1>
	    
	    <script>
        $(document).ready(function(){
            var mySwiper = new Swiper('.swiper-container',{
                grabCursor: true,
                slidesPerView:1
               
            });
        }); 
        </script>
        <div class="brand_kv_mobile">
            <div class="swiper-container">
    			<div class="swiper-wrapper" style="height:232px;background:black;">
    			    <?php $re = query_posts('showposts=5&cat='.$cat->term_id);$i=0;while (have_posts()) : the_post();$i++; ?>
    				<div class="swiper-slide" style="position:relative;">
    				    <?php if(get_post_meta($post->ID, "movie2", true)==''): ?>
    					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
    					<?php else: ?>
    					<video style="width:100%;height:200px;" src="<?php echo get_post_meta($post->ID, "movie2", true); ?>" controls="controls">
    					您的浏览器不支持 video 标签。
    					</video> 
    					<?php endif; ?>
    					<div class="brand_kv_mobile_txt">
    					   <div class="bkmt_l">
    					       <?php echo $i; ?>/<?php echo count($re); ?>
    					   </div>
    					   <div class="bkmt_r">
    					       <div style="padding-left:5px;"><?php echo mb_strimwidth(get_the_title(), 0, 55, '...'); ?></div>
    					   </div>
    					</div>
    				</div>
    				<?php endwhile;wp_reset_query(); ?>
    			</div>
    		</div>
        </div>
	    <ul class="brand_mobile_list">
	       <?php query_posts('showposts=10000&cat='.$cat->term_id);$i=0;while (have_posts()) : the_post();$i++; ?>
	       <li style="" class="<?php if($i>5):?>brand_m_hide<?php endif; ?>">
	       <a href="<?php the_permalink() ?>">
	           <div class="bml_pic">
	               <?php the_post_thumbnail(); ?>
	           </div>
	           <div class="bml_txt">
	               <div style="padding-top:6px;padding-right:5px;line-height:20px;font-size:14px;color:#393939;"><?php echo mb_strimwidth(get_the_title(), 0, 55, '...'); ?></div>
	               <div style="margin-top:5px;color:#aaaaaa;"><?php echo get_the_date("Y.m.d"); ?></div>
	           </div>
	       </a>
	       </li>
	       <?php endwhile;wp_reset_query(); ?>
	    </ul>
	    <div class="mobile_more">点击加载更多内容</div>
	</div>
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
    <!-- /mobile -->
    
</section>