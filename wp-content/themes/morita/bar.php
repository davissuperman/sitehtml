<div class="bread_share">
    <div class="bread_share_content">
        <nav class="bread">
            <?php if (function_exists("yama_get_breadcrumbs")): ?>
            <?php yama_get_breadcrumbs(); ?>
            <?php endif; ?>
        </nav>
        
        <!-- share+search -->
        <div class="share_search_inner">
            <ul>
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
    </div>
</div>
