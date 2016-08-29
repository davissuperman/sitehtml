<?php get_header(); ?>
<?php $cat_data = get_the_category( $post->ID );//print_r($cat_data); ?>
<?php
if(count($cat_data)>1){
    get_template_part( 'detail', $cat_data[count($cat_data)-1]->slug );
}
else{
    get_template_part( 'detail', $cat_data[0]->slug );
}
?>
<?php get_footer(); ?>