<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset=utf-8>
	<?php
	$title = "";
	$keywords = "Dr.Morita";
	$description = "";
	if (is_single()){ 
	    $title = get_post_meta($post->ID, "title", true);
	    $keywords = get_post_meta($post->ID, "keywords", true);
		$description = get_post_meta($post->ID, "description", true);
	}
	elseif (is_category()){
	    $title = single_cat_title('', false);
		$keywords = single_cat_title('', false).",".$keywords;
		$description = strip_tags(category_description());
	}
	elseif (is_page()){
	    $title = get_post_meta($post->ID, "title", true);
		$keywords = get_post_meta($post->ID, "keywords", true);
		$description = get_post_meta($post->ID, "description", true);
	}
	elseif (is_tag()){
	    	$title = "台湾面膜_森田药妆";
		$keywords = "台湾面膜,森田药妆";
		$description = "森田面膜一直走在医美药妆面膜的前沿，凭借最新技术和有效成分颇受好评，使用来自台湾的森田面膜，从我们的八大明星产品开始吧。";
	}
	?>
	<title><?php echo $title; ?> | <?php bloginfo('name'); ?></title>
	
	<meta name="keywords" content="<?php echo $keywords; ?>">
	<meta name="description" content="<?php echo $description; ?>">
	
	<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<link type="image/x-icon" href="<?php bloginfo('template_url'); ?>/img/favion.ico" rel="shortcut icon">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    
    <link rel="stylesheet" media="screen and (max-width: 700px)" href="<?php bloginfo('template_url'); ?>/css/index_mobile.css">
	
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.1.min.js" type="text/javascript"></script>
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
                <!--li style="margin:0px;height:23px;"><a href="#" style="font-size:16px;color:#a2a2a2;">试用申请&nbsp;&nbsp;&nbsp;<img src="<?php bloginfo('template_url'); ?>/img/gift.png"></a></li-->
<li><a href="http://sentianyaozhuang.tmall.com/" target="_blank" style="font-size:14px;color:#a2a2a2;">森田药妆官方旗舰店&nbsp;&nbsp;&nbsp;<img src="<?php bloginfo('template_url'); ?>/img/tmall_icon.jpg"></a></li>
            </ul>
            
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