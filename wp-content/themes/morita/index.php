<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset=utf-8>
	<title>补水面膜_森田面膜_森田药妆 | <?php bloginfo('name'); ?></title>
	<meta name="keywords" content="补水面膜,森田面膜,森田药妆,保湿,玻尿酸面膜">
	<meta name="description" content="<?php bloginfo("description") ?>">
	
	<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<link type="image/x-icon" href="<?php bloginfo('template_url'); ?>/img/favion.ico" rel="shortcut icon">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/index.css" type="text/css">
    
    <link rel="stylesheet" media="screen and (max-width: 700px)" href="<?php bloginfo('template_url'); ?>/css/index_mobile.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/idangerous.swiper.css">
	
	
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.1.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/idangerous.swiper.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/menu.js" type="text/javascript"></script>
    
    <!--[if lt IE 9]><!-->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/html5shiv.js"></script>
    <!--<![endif]-->
	
</head>
<body data-url="<?php bloginfo('template_url'); ?>">

<!-- 页头 -->
<header id="head">
    <div class="head_content">
        <!-- logo -->
        <div class="logo">
            <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png"></a>
        </div>
        <!-- /logo -->
        <!-- navigation -->
        <div style="float:right;">
        <!-- share+search -->
        <div class="share_search">
            <ul>
                <!--li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/gift.png"></a></li-->
<li><a href="http://sentianyaozhuang.tmall.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/tmall_icon.jpg"></a></li>
                <li><a href="http://weibo.com/p/1006061872587414" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/weibo.png"></a></li>
                <li class="wechat_icon">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/wechat.png"></a>
                </li>
                <li class="search_click"><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/search.png"></a></li>
            </ul>
            <div class="wechat_qrcode">
                <img src="<?php bloginfo('template_url'); ?>/img/qrcode.jpg">
            </div>
            <div class="search_bar">
                <?php include TEMPLATEPATH.'/searchbar.php'; ?>
            </div>
        </div>
        <!-- /share+search -->
        <nav class="navigation">
            <?php wp_nav_menu( array( 'container'=>'','menu_class' => '','menu_id' => 'top_navi', 'theme_location' => 'primary' ) ); ?>
            <!-- 面膜部分的子菜单 -->
            <div class="mask_sub">
                <ul>
                    <li>
                        <?php $cat = get_category_by_slug("product"); ?>
                        <a href="<?php echo get_category_link($cat); ?>"><?php echo $cat->name; ?></a>
                        <?php wp_nav_menu( array( 'container'=>'','menu_class' => '','menu_id' => 'cate_nav', 'theme_location' => 'category' ) ); ?> 
                    </li>
                    <li class="mask_sub_center">
                        <?php $tag = get_term_by( 'slug', "top8", 'post_tag' );//print_r($tag); ?>
                        <a href="<?php echo get_tag_link($tag); ?>">明星产品</a>
                        <ul>
                            <?php query_posts('showposts=8&tag_id='.$tag->term_id.'&meta_key=sort&orderby=meta_value_num&order=ASC');while (have_posts()) : the_post(); ?>
                            <li>
<?php if(get_post_meta($post->ID, "link", true)==''): ?>
                            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                            <?php else: ?>
                            <a href="http://www.drmorita.cc/tag/top8" target="_blank"><?php the_title(); ?></a>
                            <?php endif; ?>
</li>
                            <?php endwhile;wp_reset_query(); ?>
                        </ul>
                    </li>
                    <!--li>
                        <?php $cat = get_category_by_slug("question"); ?>
                        <a href="<?php echo get_category_link($cat); ?>"><?php echo $cat->name; ?></a>
                        <ul>
                            <?php $cat = get_category_by_slug("facial"); ?>
                            <li><a href="<?php echo get_category_link($cat); ?>"><?php echo $cat->name; ?>:</a>
                            <?php wp_nav_menu( array( 'container'=>'','menu_class' => '','menu_id' => '', 'theme_location' => 'facial' ) ); ?> 
                            </li>
                            
                            
                            <?php $cat = get_category_by_slug("eyes"); ?>
                            <li style="margin-top:10px;"><a href="<?php echo get_category_link($cat); ?>"><?php echo $cat->name; ?>:</a>
                            <?php wp_nav_menu( array( 'container'=>'','menu_class' => '','menu_id' => '', 'theme_location' => 'eyes' ) ); ?> 
                            </li>
                            
                            
                        </ul>
                    </li-->
                </ul>
                <div class="menu_banner">
                    <a href="http://www.drmorita.cc/masque/product/classic/%E7%8E%BB%E5%B0%BF%E9%85%B8%E5%A4%8D%E5%90%88%E5%8E%9F%E6%B6%B2%E9%9D%A2%E8%86%9C-2_230.html"><img src="<?php bloginfo('template_url'); ?>/img/banner2.png"></a>&nbsp;&nbsp;
                    <a href="http://www.drmorita.cc/center/lab"><img src="<?php bloginfo('template_url'); ?>/img/banner1.jpg"></a>
                </div>
            </div>
            <!-- /面膜部分的子菜单 -->
        </nav>
        <div style="clear:both;"></div>
        </div>
        <!-- /navigation -->
        
        <!-- mobile share -->
        <div class="share_search_m">
            <ul>
                <li><a href="http://weibo.com/p/1006061872587414"><img src="<?php bloginfo('template_url'); ?>/img/weibo.png"></a></li>
                <li class="wechat_icon">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/wechat.png"></a>
                </li>
                <li class="search_click"><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/search.png"></a></li>
            </ul>
            <div class="wechat_qrcode">
                <img src="<?php bloginfo('template_url'); ?>/img/qrcode.jpg">
            </div>
            <div class="search_bar">
                <?php include TEMPLATEPATH.'/searchbar.php'; ?>
            </div>
        </div>
        <!-- /mobile share --> 
    </div>
</header>
<!-- /页头 -->

<!-- mobile navigation -->
<div class="navigation_m">
<ul>
        <li data-cc="hhh1">森田面膜</li>
        <li data-cc="hhh2">最新资讯</li>
        <li data-cc="hhh3">研发中心</li>
        <li data-cc="hhh4">走近森田</li>
    </ul>
    <div class="hhh_fade">
        <div class="hhh_list hhh1">
            <ul>
                <li>
                    <?php $cat = get_category_by_slug("product"); ?>
                    <a><?php echo $cat->name; ?></a>
                    <?php wp_nav_menu( array( 'container'=>'','menu_class' => '','menu_id' => 'cate_nav', 'theme_location' => 'category' ) ); ?> 
                </li>
                <li>
                    <?php $tag = get_term_by( 'slug', "top8", 'post_tag' );//print_r($tag); ?>
                    <a href="<?php echo get_tag_link($tag); ?>">明星产品</a>
                </li>
                <!--li>
                    <?php $cat = get_category_by_slug("question"); ?>
                    <a><?php echo $cat->name; ?></a>
                    <ul>
                        <?php $cat = get_category_by_slug("facial"); ?>
                        <li><a href="<?php echo get_category_link($cat); ?>"><?php echo $cat->name; ?></a></li>
                        <?php wp_nav_menu( array( 'container'=>false,'items_wrap' => '%3$s', 'theme_location' => 'facial' ) ); ?> 
                        <?php $cat = get_category_by_slug("eyes"); ?>
                        <li><a href="<?php echo get_category_link($cat); ?>"><?php echo $cat->name; ?></a></li>
                        <?php wp_nav_menu( array( 'container'=>false,'items_wrap' => '%3$s', 'theme_location' => 'eyes' ) ); ?> 
                    </ul>
                </li-->
            </ul>
        </div>
        <div class="hhh_list hhh2">
            <ul>
                <li style="width:48%;">
                    <?php $cat = get_category_by_slug("brandnews"); ?>
                    <a href="<?php echo get_category_link($cat); ?>"><?php echo $cat->name; ?></a>
                </li>
                <li style="width:48%;">
                    <?php $cat = get_category_by_slug("event"); ?>
                    <a href="<?php echo get_category_link($cat); ?>"><?php echo $cat->name; ?></a>
                </li>
            </ul>
        </div>
        <div class="hhh_list hhh3">
            <ul>
                <li style="width:22%;">
                    <?php $page = yama_getpage('lab'); ?>
                    <a><?php echo $page->post_title; ?></a>
                    <ul>
                        <?php $page = yama_getpage("team"); ?>
                        <li><a href="<?php echo get_page_link($page); ?>"><?php echo $page->post_title; ?></a></li>
                        <?php $page = yama_getpage("philosophy"); ?>
                        <li><a href="<?php echo get_page_link($page); ?>"><?php echo $page->post_title; ?></a></li>
                    </ul>
                </li>
                <li style="width:22%;">
                    <?php $cat = get_category_by_slug("function"); ?>
                    <a href="<?php echo get_category_link($cat); ?>"><?php echo $cat->name; ?></a>
                </li>
                <li style="width:22%;">
                    <?php $page = yama_getpage('formula'); ?>
                    <a href="<?php echo get_page_link($page); ?>"><?php echo $page->post_title; ?></a>
                </li>
                <li style="width:22%;">
                    <?php $cat = get_category_by_slug('disabuse'); ?>
                    <a href="<?php echo get_category_link($cat); ?>"><?php echo $cat->name; ?></a>
                </li>
            </ul>
        </div>
        <div class="hhh_list hhh4">
            <ul>
                <li>
                    <?php $page = yama_getpage('history'); ?>
                    <a href="<?php echo get_page_link($page); ?>"><?php echo $page->post_title; ?></a>
                </li>
                <li>
                    <?php $page = yama_getpage('intro'); ?>
                    <a href="<?php echo get_page_link($page); ?>"><?php echo $page->post_title; ?></a>
                </li>
                <li>
                    <?php $page = yama_getpage('responsibility'); ?>
                    <a href="<?php echo get_page_link($page); ?>"><?php echo $page->post_title; ?></a>
                </li>
            </ul>
        </div>
    </div>                     
</div>
<!-- /mobile navigation -->



<!-- 首页主图部分 -->
<section id="index_top">
    <div class="index_main">
        
        
        <!-- kv -->
        <div class="kv">
            <div class="kv_l">
                <script type="text/javascript">
                $(function(){
                	$(".slideBox").slide({mainCell:".bd ul",effect:"leftLoop",autoPlay:true,delayTime:700,interTime:5000});
                });
        		</script>
                <div id="slideBox" class="slideBox">
        			<div class="hd">
        				<ul><li></li><li></li><li></li><li></li><li></li></ul>
        			</div>
        			<div class="bd">
        				<ul>
<li><a href="http://www.drmorita.cc/masque/product/liujin"><img src="http://www.drmorita.cc/wp-content/uploads/2016/03/KV1_金色面膜.jpg" /></a></li>
        					<li><a href="http://www.drmorita.cc/masque/product/classic/%E7%8E%BB%E5%B0%BF%E9%85%B8%E5%A4%8D%E5%90%88%E5%8E%9F%E6%B6%B2%E9%9D%A2%E8%86%9C-2_230.html"><img src="<?php bloginfo('template_url'); ?>/img/kv1.png" /></a></li>
        					
        					<li><a href="http://product.drjou.com/" target="_blank"><img src="http://www.drmorita.cc/wp-content/uploads/2016/03/kv2专业级修复系列.jpg" /></a></li>
<li><a href="http://www.drmorita.cc/masque/product/drjou_hyaluronic-acid" target="_blank"><img src="http://www.drmorita.cc/wp-content/uploads/2016/03/KV3玻尿酸润泽系列.jpg" /></a></li>
<li><a href="http://www.drmorita.cc/masque/product/drjou_preal" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/kv5.jpg" /></a></li>
        				</ul>
        			</div>
        		</div>
            </div>
            <div class="kv_r">
                
                <a href="http://www.drmorita.cc/center/lab"><img src="http://www.drmorita.cc/wp-content/uploads/2016/02/首页banner-实验室.jpg" alt=""></a>
<a href="http://www.drmorita.cc/disabuse"><img src="http://www.drmorita.cc/wp-content/uploads/2016/04/首页banner-周博士.jpg" alt=""></a>
            </div>
        </div>
        <!-- /kv -->
        
        <!-- mobile kv -->
        <script>
        $(document).ready(function(){
            var mySwiper = new Swiper('.swiper-container',{
            	pagination: '.pagination',
                loop:true,
                grabCursor: true,
                paginationClickable: true,
                onInit:function(swiper){
           	        //console.log($(".swiper-slide img").height());
			//$(".swiper-container .swiper-slide a").css("height",$(".swiper-slide img").height());
          	    	$(".swiper-container").css("height",$(".swiper-slide img").height());
          	    },
            });
        }); 
        </script>
        <div class="kv_mobile">
            <div class="swiper-container">
    			<div class="swiper-wrapper">
<div class="swiper-slide">
    					<a href="http://www.drmorita.cc/masque/product/liujin"><img src="http://www.drmorita.cc/wp-content/uploads/2016/03/KV1_金色面膜.jpg"></a>
    				</div>
    				<div class="swiper-slide">
    					<a href="http://www.drmorita.cc/masque/product/classic/%E7%8E%BB%E5%B0%BF%E9%85%B8%E5%A4%8D%E5%90%88%E5%8E%9F%E6%B6%B2%E9%9D%A2%E8%86%9C-2_230.html"><img src="<?php bloginfo('template_url'); ?>/img/kv_m1.jpg"></a>
    				</div>
    				
    				<div class="swiper-slide">
    					<a href="http://product.drjou.com/" target="_blank"><img src="http://www.drmorita.cc/wp-content/uploads/2016/03/kv2专业级修复系列.jpg"></a>
    				</div>
                                <div class="swiper-slide">
    					<a href="http://www.drmorita.cc/masque/product/drjou_hyaluronic-acid" target="_blank"><img src="http://www.drmorita.cc/wp-content/uploads/2016/03/KV3玻尿酸润泽系列.jpg"></a>
    				</div>
                                <div class="swiper-slide">
    					<a href="http://www.drmorita.cc/masque/product/drjou_preal" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/kv5.jpg"></a>
    				</div>
    			</div>
    		</div>
    		<div class="pagination"></div>
        </div>
        <!-- /mobile kv -->
        
    </div>
</section>
<!-- /首页主图部分 -->


<!-- 页尾 -->
<footer id="foot">
    <div class="footer_c">
        <!-- footer navigation -->
        <nav class="f_n">
            <ul id="footer_navi" class="">
<li id="menu-item-131" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-131"><a href="http://www.drmorita.cc/check">防伪查询</a></li>
<li id="menu-item-131" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-131"><a href="http://www.drmorita.cc/contact">联系我们</a></li>
            <li id="menu-item-130" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-130"><a href="http://www.drmorita.cc/sitemap">网站地图</a></li>
            <li id="menu-item-392" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-392 friend_link_li"><a class="friend_link">友情链接</a>
                <ul>
                    <li><a href="http://www.drjou.com" target="_blank">台湾官网</a></li>
                </ul>
            </li>
            <li id="menu-item-129" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-129"><a href="http://www.drmorita.cc/declaration">声明</a></li>
            </ul>        </nav>
        <!-- /footer navigation -->
        
        <div class="copyright">
        <a href="http://sentianyaozhuang.tmall.com/?spm=a1z10.1-b.1997427721.d4918089.BZkkBi
" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/tmall.png"></a>
        </div>
    </div>
</footer>
<div class="co">
版权所有：森田药妆 Copyright @ 2007 - 2015 ployer.All Rights Reserved 沪ICP备12006131号-1
</div>
<!-- /页尾 -->

<!-- mobile footer -->
<footer id="foot_m">
    <?php wp_nav_menu( array( 'container'=>'','menu_class' => '','menu_id' => 'footer_navi', 'theme_location' => 'footer' ) ); ?>
    <div style="text-align:center;margin-top:14px;color:#455461;font-size:12px;">Copyright @ 2007 - 2014 ployer.All Rights Reserv</div>
</footer>
<!-- /mobile footer -->


<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?9ab02c5165d117881fdcc402f8343b66";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>



</body>
</html>