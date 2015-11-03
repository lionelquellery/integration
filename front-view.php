
<?php get_header('view') ?>

<h1 class="slogan">Il nous raconte leur situation</h1>

<?php $loop = new WP_Query( array( 'post_type' => 'createkit') ); ?>
	<?php if (have_posts()) : ?>
			<?php while ($loop->have_posts()) : $loop->the_post(); ?>
<div class="card">
  <div class="card-header">
    <!-- <img src=""/> -->
  </div>
  <div class="card-content">
    <h3><?php the_title(); ?></h3>
    <h4><?php the_field('situation-title'); ?></h4>
  </div>
  <div class="card-footer">
    <ul>
      <li>
        <a href="<?php echo post_permalink( $ID ); ?>">Lire plus</a>
      </li>
    </ul>
  </div>
</div>
<?php endwhile; ?>
<?php endif; ?>