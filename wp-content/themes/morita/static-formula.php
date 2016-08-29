<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/static.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/idangerous.swiper.css">
<script src="<?php bloginfo('template_url'); ?>/js/idangerous.swiper.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.mCustomScrollbar.css">
<script src="<?php bloginfo('template_url'); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>



<link rel="stylesheet" media="screen and (max-width: 700px)" href="<?php bloginfo('template_url'); ?>/css/for_mobile.css">


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
    	$(".swiper-slide").mCustomScrollbar({
            
        });
    }
	
});
</script>


<?php include TEMPLATEPATH.'/bar.php';?>

<section id="inner_body">
    <h1 style="margin:0px;padding:10px 0px 10px 5px;font-size:16px;"><?php the_title();?></h1>
    <div class="formula">
        <a class="a_j arrow-left_team" href="#" style="left:-80px;"></a> 
        <a class="a_j arrow-right_team" href="#" style="right:-80px;"></a>
        <div class="swiper-container_team" style="height:390px;">
            <div class="swiper-wrapper" style="height:390px;">
            
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
            <div class="formula_pagination"></div>
        </div>
        
        <script>
            $(document).ready(function(){
                var mySwiper = new Swiper('.swiper-container_team',{
                	pagination: '.formula_pagination',
                    grabCursor: true,
                    paginationClickable: true,
                    loop: true,
                    slidesPerView:1
                    /*
                    onInit:function(swiper){
               	        //console.log($(".swiper-slide img").eq(0));
              	    	$(".formula_pagination span").each(function(i,e){
              	    	    $(this).text($(".swiper-wrapper .swiper-slide").eq(i+1).find("h2").text());
                	    });
              	    },
              	    */
                });
                $('.arrow-left_team').on('click', function(e){
                    e.preventDefault();
                    mySwiper.swipePrev();
                });
                $('.arrow-right_team').on('click', function(e){
                    e.preventDefault();
                    mySwiper.swipeNext();
                });
                
                var arr = new Array();
                arr = ["报告"];
                $(".formula_pagination span").each(function(i,e){
      	    	    $(this).append("<em>"+arr[i]+"</em>");
        	    });
        	    
                
            }); 
         </script>
    </div>

    
</section>