<?php $i=0;while (have_posts()):$i++;the_post(); ?>
<?php if($i==1): ?>
<script>
window.location.href="<?php the_permalink() ?>";
</script>
<?php endif; ?>
<?php endwhile; ?>