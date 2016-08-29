<?php get_header(); ?>
<?php $cat_data = get_category($cat); ?>

<?php if($cat_data->category_nicename=='question'||$cat_data->category_nicename=='eyes'||$cat_data->category_nicename=='flabby'||$cat_data->category_nicename=='microgroove'||$cat_data->category_nicename=='blackeyes'||$cat_data->category_nicename=='facial'||
    $cat_data->category_nicename=='dull'||$cat_data->category_nicename=='stain'||$cat_data->category_nicename=='limp'||$cat_data->category_nicename=='pimple'): ?>
<!-- 烦心问题 -->
<?php get_template_part( 'loop', 'question' ); ?>

<?php elseif($cat_data->category_nicename=='brandnews'||$cat_data->category_nicename=='release'||$cat_data->category_nicename=='event'): ?>
<!-- 新闻 -->
<?php get_template_part( 'loop', 'brandnews' ); ?>

<?php else: ?>

<?php
if($cat_data->category_nicename=='masque'||$cat_data->category_nicename=='product'){
    echo "<script>window.location.href='http://www.drmorita.cc/masque/product/classic';</script>";exit;
}
?>

<?php get_template_part( 'loop', $cat_data->category_nicename ); ?>

<?php endif; ?>

<?php get_footer(); ?>