<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/static.css" type="text/css">
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/galleryview.css" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.galleryview-1.1.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.timers-1.1.2.js"></script>



<link rel="stylesheet" media="screen and (max-width: 700px)" href="<?php bloginfo('template_url'); ?>/css/team_mobile.css">

<script type="text/javascript">
$(document).ready(function(){

	var sUserAgent = navigator.userAgent.toLowerCase();
    var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
    var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
    var bIsMidp = sUserAgent.match(/midp/i) == "midp";
    var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
    var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
    var bIsAndroid = sUserAgent.match(/android/i) == "android";
    var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
    var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
    if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) {
        //document.writeln("phone");

        $(".panel").click(function(){
        	$(".panel>div").stop().slideUp("fast");
        	$(this).find(">div").stop().slideToggle("fast");
        });

        
    } else {
    	$('#photos').galleryView({
    		panel_width: 905,
    		panel_height: 428,
    		frame_width: 59,
    		frame_height: 50,
    		border:"none",
    		background_color:"none"
    	});
        
    }
	
	
});
</script>
<style>
.media_div{
	width:905px;
	margin:0 auto;
}
</style>

<?php include TEMPLATEPATH.'/bar.php';?>

<section id="inner_body" style="padding-top:20px;padding-bottom:20px;">
<h1 class="ssdsdsdsd" style="display:none;">媒体报导</h1>
<div class="media_div">

<div id="photos" class="galleryview">
    
    <!-- 动态读取 -->
	<?php if (have_posts()): ?>
	<?php while (have_posts()):the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
	<?php else: ?>
		<?php _e('Not Found'); ?>
	<?php endif; ?>
	<!-- /动态读取 -->
    
</div>

    
</div>
</section>