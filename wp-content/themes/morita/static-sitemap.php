<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/static.css" type="text/css">
<?php include TEMPLATEPATH.'/bar.php';?>

<section id="inner_body">
    <div class="sitemap_div">
    
        <nav class="sitemap_nav">
            <?php wp_nav_menu( array( 'container'=>'','menu_class' => '','menu_id' => 'top_navi', 'theme_location' => 'sitemap' ) ); ?>
        </nav>
    
    </div>
</section>

<script>
$(function(){
    //alert($(".sitemap_nav>ul>li").eq($(".sitemap_nav>ul>li").length-1).css("height"));
	$(".sitemap_nav>ul>li").eq($(".sitemap_nav>ul>li").length-1).css("min-height","50px");
	$(".sitemap_nav>ul>li").eq($(".sitemap_nav>ul>li").length-2).css("min-height","50px");
	$(".sitemap_nav>ul>li").eq($(".sitemap_nav>ul>li").length-3).css("min-height","50px");
$(".sitemap_nav>ul>li").eq($(".sitemap_nav>ul>li").length-4).css("min-height","50px");
	
});
</script>