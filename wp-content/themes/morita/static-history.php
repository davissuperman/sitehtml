<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/static.css" type="text/css">
<link rel="stylesheet" media="screen and (max-width: 700px)" href="<?php bloginfo('template_url'); ?>/css/history_mobile.css">

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.mCustomScrollbar.css">
<script src="<?php bloginfo('template_url'); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<style>
div.mCSB_draggerContainer{
	width:1000px;
	margin:0 auto;
}
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
    	$("#history_yy").mCustomScrollbar({
    		axis:"x"
        });

        
    }


    $(".hhhh_big").click(function(){
        $(this).fadeOut("fast");
    });
    $(".hhhh img").width($(".hhhh img").width()+7);
	$(".hhhh").click(function(){
		var type = parseInt($(this).attr("data-tt"));
		var src1 = $(this).find("img").attr("data-src1");
		var src2 = $(this).find("img").attr("data-src2");
		//console.log(src1+"!"+src2);
		$(".hhhh img").each(function(i,e){
		    $(this).attr("src",$(this).attr("data-src1"));
		});
		$(this).find("img").attr("src",src2);
		if(type==1){
			$(".hhhh_big").removeClass("hhhh_big_r");
			$(".hhhh_big").addClass("hhhh_big_l");
		}
		else{
			$(".hhhh_big").removeClass("hhhh_big_l");
			$(".hhhh_big").addClass("hhhh_big_r");
		}
		$(".hhhh_big img").attr("src",src2);
		$(".hhhh_big").fadeIn("fast");
	});
});
</script>
<style>
.h_h{
	position:absolute;
	cursor:pointer;
}
.h_1{
	width:259px;height:202px;background:url(<?php bloginfo('template_url'); ?>/img/a1.png) no-repeat left top;
	left:199px;
	top:248px;
}
.h_1:hover{
	background:url(<?php bloginfo('template_url'); ?>/img/a1_on.png) no-repeat left top;
}
.h_2{
	width:255px;height:206px;background:url(<?php bloginfo('template_url'); ?>/img/a2.png) no-repeat left top;
	left:396px;
	top:63px;
}
.h_2:hover{
	background:url(<?php bloginfo('template_url'); ?>/img/a2_on.png) no-repeat left top;
}
.h_3{
	width:211px;height:202px;background:url(<?php bloginfo('template_url'); ?>/img/a3.png) no-repeat left top;
	left:520px;
	top:248px;
}
.h_3:hover{
	background:url(<?php bloginfo('template_url'); ?>/img/a3_on.png) no-repeat left top;
}
.h_4{
	width:256px;height:206px;background:url(<?php bloginfo('template_url'); ?>/img/a4.png) no-repeat left top;
	left:695px;
	top:63px;
}
.h_4:hover{
	background:url(<?php bloginfo('template_url'); ?>/img/a4_on.png) no-repeat left top;
}
.h_5{
	width:270px;height:202px;background:url(<?php bloginfo('template_url'); ?>/img/a5.png) no-repeat left top;
	left:870px;
	top:248px;
}
.h_5:hover{
	background:url(<?php bloginfo('template_url'); ?>/img/a5_on.png) no-repeat left top;
}
.h_6{
	width:274px;height:206px;background:url(<?php bloginfo('template_url'); ?>/img/a6.png) no-repeat left top;
	left:1050px;
	top:63px;
}
.h_6:hover{
	background:url(<?php bloginfo('template_url'); ?>/img/a6_on.png) no-repeat left top;
}
.h_7{
	width:302px;height:202px;background:url(<?php bloginfo('template_url'); ?>/img/a7.png) no-repeat left top;
	left:1230px;
	top:248px;
}
.h_7:hover{
	background:url(<?php bloginfo('template_url'); ?>/img/a7_on.png) no-repeat left top;
}
.h_8{
	width:315px;height:206px;background:url(<?php bloginfo('template_url'); ?>/img/a8.png) no-repeat left top;
	left:1410px;
	top:63px;
}
.h_8:hover{
	background:url(<?php bloginfo('template_url'); ?>/img/a8_on.png) no-repeat left top;
}
.h_9{
	width:302px;height:202px;background:url(<?php bloginfo('template_url'); ?>/img/a9.png) no-repeat left top;
	left:1600px;
	top:248px;
}
.h_9:hover{
	background:url(<?php bloginfo('template_url'); ?>/img/a9_on.png) no-repeat left top;
}
.h_10{
	width:330px;height:206px;background:url(<?php bloginfo('template_url'); ?>/img/a10.png) no-repeat left top;
	left:1780px;
	top:63px;
}
.h_10:hover{
	background:url(<?php bloginfo('template_url'); ?>/img/a10_on.png) no-repeat left top;
}
</style>
<?php include TEMPLATEPATH.'/bar.php';?>

<section id="inner_body" style="width:100%;height:514px;">
    
    <div id="history_yy1" style="width:100%;height:100%;auto;background:url(<?php bloginfo('template_url'); ?>/img/history_bg_bg.jpg) repeat center center;background-size:cover;">
        <div id="history_yy" style="width:100%;height:100%;overflow-x:auto;background:url(<?php bloginfo('template_url'); ?>/img/bg_l.png) repeat-x center center;">
            <div style="position:relative;width:2200px;height:514px;">
                <div class="h_h h_1"></div>
                <div class="h_h h_2"></div>
                <div class="h_h h_3"></div>
                <div class="h_h h_4"></div>
                <div class="h_h h_5"></div>
                <div class="h_h h_6"></div>
                <div class="h_h h_7"></div>
                <div class="h_h h_8"></div>
                <div class="h_h h_9"></div>
                <div class="h_h h_10"></div>
            </div>
        </div>
    </div>
    
    
    
    
    
</section>


<!-- mobile -->
<div class="hhhh_hshshs">
    <div class="hhhh hhhh_l" data-tt="1">
        <img src="<?php bloginfo('template_url'); ?>/img/abc1_on.png" data-src1="<?php bloginfo('template_url'); ?>/img/abc1.png" data-src2="<?php bloginfo('template_url'); ?>/img/abc1_on.png">
    </div>
    <div class="hhhh hhhh_r" data-tt="2">
        <img src="<?php bloginfo('template_url'); ?>/img/abc2.png" data-src1="<?php bloginfo('template_url'); ?>/img/abc2.png" data-src2="<?php bloginfo('template_url'); ?>/img/abc2_on.png">
    </div>
    <div class="hhhh hhhh_l" data-tt="1">
        <img src="<?php bloginfo('template_url'); ?>/img/abc3.png" data-src1="<?php bloginfo('template_url'); ?>/img/abc3.png" data-src2="<?php bloginfo('template_url'); ?>/img/abc3_on.png">
    </div>
    <div class="hhhh hhhh_r" data-tt="2">
        <img src="<?php bloginfo('template_url'); ?>/img/abc4.png" data-src1="<?php bloginfo('template_url'); ?>/img/abc4.png" data-src2="<?php bloginfo('template_url'); ?>/img/abc4_on.png">
    </div>
    <div class="hhhh hhhh_l" data-tt="1">
        <img src="<?php bloginfo('template_url'); ?>/img/abc5.png" data-src1="<?php bloginfo('template_url'); ?>/img/abc5.png" data-src2="<?php bloginfo('template_url'); ?>/img/abc5_on.png">
    </div>
    <div class="hhhh hhhh_r" data-tt="2">
        <img src="<?php bloginfo('template_url'); ?>/img/abc6.png" data-src1="<?php bloginfo('template_url'); ?>/img/abc6.png" data-src2="<?php bloginfo('template_url'); ?>/img/abc6_on.png">
    </div>
    <div class="hhhh hhhh_l" data-tt="1">
        <img src="<?php bloginfo('template_url'); ?>/img/abc7.png" data-src1="<?php bloginfo('template_url'); ?>/img/abc7.png" data-src2="<?php bloginfo('template_url'); ?>/img/abc7_on.png">
    </div>
    <div class="hhhh hhhh_r" data-tt="2">
        <img src="<?php bloginfo('template_url'); ?>/img/abc8.png" data-src1="<?php bloginfo('template_url'); ?>/img/abc8.png" data-src2="<?php bloginfo('template_url'); ?>/img/abc8_on.png">
    </div>
    <div class="hhhh hhhh_l" data-tt="1">
        <img src="<?php bloginfo('template_url'); ?>/img/abc9.png" data-src1="<?php bloginfo('template_url'); ?>/img/abc9.png" data-src2="<?php bloginfo('template_url'); ?>/img/abc9_on.png">
    </div>
    <div class="hhhh hhhh_r" data-tt="2">
        <img src="<?php bloginfo('template_url'); ?>/img/abc10.png" data-src1="<?php bloginfo('template_url'); ?>/img/abc10.png" data-src2="<?php bloginfo('template_url'); ?>/img/abc10_on.png">
    </div>
    
    
    
    
    
    <div class="hhhh_big">
        <img style="width:92%;" src="<?php bloginfo('template_url'); ?>/img/abc1_on.png">
    </div>
</div>