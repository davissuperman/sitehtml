/**
 * 
 */
var url;
$(document).ready(function(){
	url = $("body").attr("data-url");
	$(".navigation>ul>li").eq(2).find(">ul").append("<li style='padding-left:0px;'><a href='http://www.drmorita.cc/masque/product/tiansi/%E7%8E%BB%E5%B0%BF%E9%85%B8%E6%B0%B4%E6%B6%A6%E5%8E%9F%E6%B6%B2%E9%9D%A2%E8%86%9C_252.html'><img src='"+url+"/img/banner3.png'></a></li>");
	$(".navigation>ul>li").eq(3).find(">ul").append("<li style='padding-left:0px;'><a href='http://www.drmorita.cc/masque/product/selected'><img src='"+url+"/img/banner4.png'></a></li>");
	$(".navigation>ul>li").eq(4).find(">ul").append("<li style='padding-left:0px;'><a href='http://www.drmorita.cc/masque/product/tiansi/%E8%9C%97%E7%89%9B%E9%80%8F%E6%BB%91%E7%B2%BE%E5%8D%8E%E9%9D%A2%E8%86%9C_248.html'><img src='"+url+"/img/banner5.png'></a></li>");
	$(".navigation>ul>li").eq(5).find(">ul").append("<li style='padding-left:0px;'><a href='http://www.drmorita.cc/masque/product/classic/%E7%8E%BB%E5%B0%BF%E9%85%B8%E5%A4%8D%E5%90%88%E5%8E%9F%E6%B6%B2%E9%9D%A2%E8%86%9C-2_230.html'><img src='"+url+"/img/banner2.png'></a></li>");
	
	
	$(".navigation>ul>li").hover(
			function(){
				$(this).find("ul").stop().slideDown("fast");
			},
			function(){
				$(this).find("ul").stop().slideUp("fast");
			}
	);
	
	$("#menu-item-109,.mask_sub").hover(
			function(){
				$(".mask_sub").stop().slideDown("fast");
			},
			function(){
				$(".mask_sub").stop().slideUp("fast");
			}
	);
	
	
	//页脚菜单
	$(".friend_link_li").hover(
		function(){
			$(this).parent().find("ul").stop().fadeIn("fast");
		},
		function(){
			$(this).parent().find("ul").stop().fadeOut("fast");
		}
	);
	
	
	
	$(".wechat_icon").click(function(){
		$(".wechat_qrcode").slideToggle("fast");
		$(".search_bar").slideUp("fast");
	});
	$(".search_click").click(function(){
		$(".search_bar").slideToggle("fast");
		$(".wechat_qrcode").slideUp("fast");
	});
	
	
	
	
	
	/*mobile menu*/
	$(".navigation_m>ul>li").click(function(){
		var cc = $(this).attr("data-cc");
		$(".hhh_fade").show();
		$(".hhh_list").stop().hide();
		$("."+cc).stop().slideDown();
		
	});
	$(".hhh_list>ul>li").click(function(){
		$(".hhh_list>ul>li>ul").stop().slideUp();
		$(this).find("ul").stop().slideToggle();
	});
	
});