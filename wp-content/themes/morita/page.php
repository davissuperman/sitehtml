<?php get_header(); ?>
<?php $page_data = get_page($post->ID);$page_name = $page_data->post_name; ?>

<?php if($page_data->post_name=="center"): ?>
<script>
window.location.href="http://www.drmorita.cc/center/lab";
</script>
<?php elseif($page_data->post_name=="closeto"): ?>
<script>
window.location.href="http://www.drmorita.cc/closeto/history";
</script>
<?php endif; ?>

<?php get_template_part( 'static', $page_data->post_name ); ?>
<?php get_footer(); ?>