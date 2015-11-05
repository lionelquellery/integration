<?php get_header('createkit'); ?>	

<article>
  <h1 class="title"><?php the_field('situation-title'); ?></h1>
<p class="content"><?php the_field('content_id'); ?></p>
<hr>
<p>by <?php the_title(); ?></p>
<ul class="share">
	<li class="social"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.svg" alt=""></li>
	<li class="social"><img src="<?php echo get_template_directory_uri(); ?>/img/tw.svg" alt=""></li>
</ul>
</article>

<?php get_footer(); ?>