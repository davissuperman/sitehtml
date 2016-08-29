<?php
add_action( 'after_setup_theme', 'yama_setup' );
if ( ! function_exists( 'yama_setup' ) )
{
	function yama_setup()
	{
		//支持侧边栏自定义
		if ( function_exists('register_sidebar') ){
			register_sidebar();
		}
		
		//支持菜单
		register_nav_menus( array(
			'primary' => __( '主菜单', 'main' ),
			'footer' => __( '页脚菜单', 'foot' ),
			'category' => __( '产品系列菜单', 'category' ),
			'facial' => __( '面部烦心问题菜单', 'facial' ),
			'eyes' => __( '眼部烦心问题菜单', 'eyes' ),
			'sitemap'=>__( 'sitemap', 'sitemap' ),
			//mobile
		    'primary_m' => __( '手机主菜单', 'mobile main' ),
		) );
		//支持背景
		add_theme_support( 'custom-background', array(
			'default-color' => 'f1f1f1',
		) );
		//支持缩略图
		add_theme_support('post-thumbnails');
		
		//支持文章格式
		add_theme_support( 'post-formats', array( 'aside', 'link', 'gallery', 'status', 'quote', 'image' ) );
		//支持头部图片
		$custom_header_support = array(
			'default-text-color' => '000',
			// The default image to use.
			// The %s is a placeholder for the theme template directory URI.
			'default-image' => '%s/img/headers/path.jpg',
			// The height and width of our custom header.
			'width' => apply_filters( 'site1_header_image_width', 325 ),
			'height' => apply_filters( 'site1_header_image_height', 56 ),
			// Support flexible heights.
			'flex-height' => true,
			// Don't support text inside the header image.
			'header-text' => true,
			// Callback for styling the header.
			'wp-head-callback' => 'yama_header_style',
			// Callback for styling the header preview in the admin.
			'admin-head-callback' => 'yama_admin_header_style',
			// Callback used to display the header preview in the admin.
			'admin-preview-callback' => 'yama_admin_header_image',
		);
		
		add_theme_support( 'custom-header', $custom_header_support );
		
		if ( ! function_exists( 'get_custom_header' ) ) {
			// This is all for compatibility with versions of WordPress prior to 3.4.
			define( 'HEADER_TEXTCOLOR', '' );
			define( 'NO_HEADER_TEXT', true );
			define( 'HEADER_IMAGE', $custom_header_support['default-image1'] );
			define( 'HEADER_IMAGE_WIDTH', $custom_header_support['width'] );
			define( 'HEADER_IMAGE_HEIGHT', $custom_header_support['height'] );
			add_custom_image_header( '', $custom_header_support['admin-head-callback'] );
			add_custom_background();
		}
	
		// We'll be using post thumbnails for custom header images on posts and pages.
		// We want them to be 940 pixels wide by 198 pixels tall.
		// Larger images will be auto-cropped to fit, smaller ones will be ignored. See header.php.
		//set_post_thumbnail_size( $custom_header_support['width'], $custom_header_support['height'], true );
	
		// ... and thus ends the custom header business.
	
		// Default custom headers packaged with the theme. %s is a placeholder for the theme template directory URI.
		register_default_headers( array(
			'berries' => array(
				'url' => '%s/img/headers/berries.jpg',
				'thumbnail_url' => '%s/img/headers/berries-thumbnail.jpg',
				/* translators: header image description */
				'description' => __( 'Berries', 'twentyten' )
			),
			'cherryblossom' => array(
				'url' => '%s/img/headers/cherryblossoms.jpg',
				'thumbnail_url' => '%s/img/headers/cherryblossoms-thumbnail.jpg',
				/* translators: header image description */
				'description' => __( 'Cherry Blossoms', 'twentyten' )
			),
			'concave' => array(
				'url' => '%s/img/headers/concave.jpg',
				'thumbnail_url' => '%s/img/headers/concave-thumbnail.jpg',
				/* translators: header image description */
				'description' => __( 'Concave', 'twentyten' )
			),
			'fern' => array(
				'url' => '%s/img/headers/fern.jpg',
				'thumbnail_url' => '%s/img/headers/fern-thumbnail.jpg',
				/* translators: header image description */
				'description' => __( 'Fern', 'twentyten' )
			),
			'forestfloor' => array(
				'url' => '%s/img/headers/forestfloor.jpg',
				'thumbnail_url' => '%s/img/headers/forestfloor-thumbnail.jpg',
				/* translators: header image description */
				'description' => __( 'Forest Floor', 'twentyten' )
			),
			'inkwell' => array(
				'url' => '%s/img/headers/inkwell.jpg',
				'thumbnail_url' => '%s/img/headers/inkwell-thumbnail.jpg',
				/* translators: header image description */
				'description' => __( 'Inkwell', 'twentyten' )
			),
			'path' => array(
				'url' => '%s/img/headers/path.jpg',
				'thumbnail_url' => '%s/img/headers/path-thumbnail.jpg',
				/* translators: header image description */
				'description' => __( 'Path', 'twentyten' )
			),
			'sunset' => array(
				'url' => '%s/img/headers/sunset.jpg',
				'thumbnail_url' => '%s/img/headers/sunset-thumbnail.jpg',
				/* translators: header image description */
				'description' => __( 'Sunset', 'twentyten' )
			)
		) );
	}
	
}


//设置不同分类显示数量不同

add_action('pre_get_posts', 'custom_posts_per_page');
function custom_posts_per_page( $query ) {

    if (is_category()) {
        $c = get_queried_object();//print_r($c);exit;
        if ($c->slug == 'brandnews'||$cid == 'event'){
            //品牌动态
            $posts_per_page = 5;
        }
        else{
            $posts_per_page = 100;
        }
        $query->set( 'posts_per_page', $posts_per_page );
    }

}


if ( ! function_exists( 'yama_getpage' ) ){
	function yama_getpage($page_name) {
		$name = $page_name; //page别名
		global $wpdb;
		$page_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '$name'");
		$page_data = get_page( $page_id );
		return $page_data;
	}
}

if ( ! function_exists( 'yama_get_breadcrumbs' ) ){
	function yama_get_breadcrumbs()
	{
		global $wp_query;
	
		if ( !is_home() ){
	
			// Start the UL
			echo '<ol class="youhere">';
			// Add the Home link
			echo '<li><a href="'. get_settings('home') .'">首页 </a></li>';
	
			if ( is_category() )
			{
			    /*
				$catTitle = single_cat_title( "", false );
				$cat = get_cat_ID( $catTitle );
				//print_r(get_category_parents( $cat, TRUE, " &gt; " ));exit;
				//echo get_category_parents( $cat, TRUE, " &gt; " );exit;
				
				echo "<li> &gt; ". get_category_parents( $cat, TRUE, " &gt; " ) ."</li>";
				*/
				
				$cat_obj = $wp_query->get_queried_object();
				$thisCat = $cat_obj->term_id;
				$thisCat = get_category($thisCat);
				
				$parentCat = get_category($thisCat->parent);
				//print_r($thisCat->parent);
				if ($thisCat->parent != 0) {
				    echo"<li> &gt; ". get_category_parents($parentCat, TRUE, " &gt; ") ."</li>";
				    echo "<li>".single_cat_title('',false)."</li>";
				}
				else{
				    echo "<li> &gt; ".single_cat_title('',false)."</li>";
				}
				//echo $currentBefore . 'Archive by category &#39;';
				
				//echo '&#39;' . $currentAfter;
			}
			
			elseif ( is_tag() )
			{
			    $c = get_queried_object();
			    echo "<li> &gt; ".$c->name."</li>";
			}
			elseif ( is_search() ) {
	
				echo "<li> &gt; 搜索</li>";
			}
			elseif ( is_404() )
			{
				echo "<li> &gt; 404 Not Found</li>";
			}
			elseif ( is_single() )
			{
				$category = get_the_category($post->ID);
				$category_f = array();
				for($i=0;$i<count($category);$i++){
				    if($category[$i]->parent==18){
				        $category_f[0] = $category[$i];
				    }
				}
				//print_r($category_f);
				if(count($category_f)>0){
				    $category_id = get_cat_ID( $category_f[0]->cat_name );
				}
                else{
                    $category_id = get_cat_ID( $category[0]->cat_name );
                }
				
	
				echo '<li> &gt; '. get_category_parents( $category_id, TRUE, " &gt; " );
				echo the_title('','', FALSE) ."</li>";
			}
			elseif ( is_page() )
			{
				$post = $wp_query->get_queried_object();
	
				if ( $post->post_parent == 0 ){
	
					echo "<li> &gt; ".the_title('','', FALSE)."</li>";
	
				} else {
					$title = the_title('','', FALSE);
					$ancestors = array_reverse( get_post_ancestors( $post->ID ) );
					array_push($ancestors, $post->ID);
	
					foreach ( $ancestors as $ancestor ){
						if( $ancestor != end($ancestors) ){
							echo '<li> &gt; <a href="'. get_permalink($ancestor) .'">'. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</a></li>';
						} else {
							echo '<li> &gt; '. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</li>';
						}
					}
				}
			}
	
			// End the UL
			echo "</ol>";
		}
	}
}


if ( ! function_exists( 'yama_header_style' ) ) :

function yama_header_style() {
	$text_color = get_header_textcolor();

	// If no custom options for text are set, let's bail.
	if ( $text_color == HEADER_TEXTCOLOR )
		return;

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( 'blank' == $text_color ) :
	?>
		#site-title,
		#site-description {
			position: absolute !important;
			clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that
		else :
	?>
		#site-title a,
		#site-description {
			color: #<?php echo $text_color; ?> !important;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif;

if ( ! function_exists( 'yama_admin_header_style' ) ) :
function yama_admin_header_style() {
	?>
	<style type="text/css">
	.appearance_page_custom-header #headimg {
		border: none;
	}
	#headimg h1,
	#desc {
		font-family: "Helvetica Neue", Arial, Helvetica, "Nimbus Sans L", sans-serif;
	}
	#headimg h1 {
		margin: 0;
	}
	#headimg h1 a {
		font-size: 32px;
		line-height: 36px;
		text-decoration: none;
	}
	#desc {
		font-size: 14px;
		line-height: 23px;
		padding: 0 0 3em;
	}
	<?php
		// If the user has set a custom color for the text use that
		if ( get_header_textcolor() != HEADER_TEXTCOLOR ) :
	?>
		#site-title a,
		#site-description {
			color: #<?php echo get_header_textcolor(); ?>;
		}
	<?php endif; ?>
	#headimg img {
		
		height: auto;
		width: 100%;
	}
	</style>
<?php
}
endif; // twentyeleven_admin_header_style

if ( ! function_exists( 'yama_admin_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * Referenced via add_theme_support('custom-header') in twentyeleven_setup().
 *
 * @since Twenty Eleven 1.0
 */
function yama_admin_header_image() { ?>
	<div id="headimg">
		<?php
		$color = get_header_textcolor();
		$image = get_header_image();
		if ( $color && $color != 'blank' )
			$style = ' style="color:#' . $color . '"';
		else
			$style = ' style="display:none"';
		?>
		<h1><a id="name"<?php echo $style; ?> href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<div id="desc"<?php echo $style; ?>><?php bloginfo( 'description' ); ?></div>
		<?php if ( $image ) : ?>
			<img src="<?php echo esc_url( $image ); ?>" alt="" />
		<?php endif; ?>
	</div>
<?php }
endif; // twentyeleven_admin_header_image
?>
<?php
//分类添加图片
global $texonomy_slug;
$texonomy_slug='category'; // texonomy slug
add_action($texonomy_slug.'_add_form_fields','categoryimage');
function categoryimage($taxonomy){ ?>
    <div>
    <label for="tag-image">分类图像</label>
    <input type="text" name="tag-image" id="tag-image" value="" /><br /><span>请在此输入图像URL地址。</span>    
</div>
<?php script_css(); }
add_action($texonomy_slug.'_edit_form_fields','categoryimageedit');
function categoryimageedit($taxonomy){ ?>
<tr>
    <th scope="row" valign="top"><label for="tag-image">图像</label></th>
    <td><input type="text" name="tag-image" id="tag-image" value="<?php echo get_option('_category_image'.$taxonomy->term_id); ?>" /><br /><span>请在此输入图像URL地址。</span></td>
</tr>              
<?php script_css(); }
function script_css(){ ?>                
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/category-image_thickbox.js"></script>
<link rel='stylesheet' id='thickbox-css'  href='<?php echo includes_url(); ?>js/thickbox/thickbox.css' type='text/css' media='all' />
<script type="text/javascript">    
    jQuery(document).ready(function() {
    var fileInput = ''; 
    jQuery('#tag-image').live('click',
    function() {
        fileInput = jQuery('#tag-image');
        tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
        return false;
    }); 
        window.original_send_to_editor = window.send_to_editor;
    window.send_to_editor = function(html) {
        if (fileInput) {
            fileurl = jQuery('img', html).attr('src');
            if (!fileurl) {
                fileurl = jQuery(html).attr('src');
            }
            jQuery(fileInput).val(fileurl);

            tb_remove();
        } else {
            window.original_send_to_editor(html);
        }
    };
    });

</script>
<?php }
//edit_$taxonomy
add_action('edit_term','categoryimagesave');
add_action('create_term','categoryimagesave');
function categoryimagesave($term_id){
    if(isset($_POST['tag-image'])){
        if(isset($_POST['tag-image']))
            update_option('_category_image'.$term_id,$_POST['tag-image'] );
    }
}
function print_image_function(){
    $texonomy_slug='category';
    $_terms = wp_get_post_terms(get_the_ID(),$texonomy_slug); 
    $_termsidlist=array();  
    $result = '';
    foreach($_terms as $val){    
        $result .= '<div style="float:left; margin-right:2px;"><a href="'.get_term_link($val).'"><img height="22px" title="'.$val->name.'" alt="'.$val->name.'" src="'.get_option('_category_image'.$val->term_id).'" /></a></div>';    
    }
    return $result;
}
add_shortcode('print-image','print_image_function');
?>