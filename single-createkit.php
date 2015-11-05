<?php get_header('createkit'); ?>	

<article>
  <h1 class="title"><?php the_field('situation-title'); ?></h1>
<p class="content"><?php the_field('content_id'); ?></p>
<hr>
<p class="author">Author<?php the_title(); ?></p>

</article>

<?php get_footer(); ?>