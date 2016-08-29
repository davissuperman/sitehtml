<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/static.css" type="text/css">
<link rel="stylesheet" media="screen and (max-width: 700px)" href="<?php bloginfo('template_url'); ?>/css/res_mobile.css">

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.mCustomScrollbar.css">
<script src="<?php bloginfo('template_url'); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<style>
div.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{
	background:#e60911;
}
div.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar:hover{
	background:#e60911;
	opacity:0.5;
}
div.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar,
	.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar{
		background-color: #e60911;opacity:0.5;
	}
</style>
<script>
$(function(){
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
    } else {
    	$("#static_responsibility").mCustomScrollbar({
            
        });

        
    }
	
});
</script>

<?php include TEMPLATEPATH.'/bar.php';?>

<section id="inner_body">
    <div class="res_class" style="padding-left:25px;height:590px;overflow:hidden;" id="static_responsibility">
  
        <!-- 动态读取 -->
    	<?php if (have_posts()): ?>
    	<?php while (have_posts()):the_post(); ?>
    	    <h1><?php the_title(); ?></h1>
    		<?php the_content(); ?>
    	<?php endwhile; ?>
    	<?php else: ?>
    		<?php _e('Not Found'); ?>
    	<?php endif; ?>
    	<!-- /动态读取 -->
        
    </div>
    <div class="mobile_more">点击加载更多内容</div> 
    <script>
    $(function(){
        var num_default = 1;
        $(".mobile_more").click(function(){
            var obj = $(".res_class>div:hidden");
            //console.log(obj);return false;
            var num = 2;
            if(obj.length>2){
                num = 2;
            }
            else{
            	num = obj.length;
            }
            
            for(var i=0;i<num;i++){
                obj.eq(i).fadeIn("fast");
                if($(".res_class>div:hidden").length<=0){
                    $(this).fadeOut("fast");
                }
            }
        });
    });
	</script>   
</section>