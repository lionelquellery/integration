
<?php get_header(); ?>
    

<section class="panel" id="panel-name-1">
   <div class="sidebar" style="background-image: url(<?php the_field('big-img'); ?>)">
      <h1 class="sidebar-template-title">Survie dans la </br> 
         <strong><?php the_title(); ?></strong>
      </h1>
   </div>
   <div class="contain-right">
   <div class="template-top">
      <h1 class="title-template-right-top"><?php the_field('title-top'); ?></h1>
      <p><?php the_field('title-content'); ?></p>
      <h1 class="title-template-right-top-1">Principaux Dangers</h1>

      <?php if( have_rows('danger') ): ?>
       <?php while ( have_rows('danger') ) : the_row(); ?>
      <div class="template-situation">



         <h1><?php the_sub_field('title-danger'); ?></h1>
         <p><?php the_sub_field('title-danger-contenu'); ?></p>
         
      </div>
	<?php endwhile; ?>
<?php endif; ?>
   </div>
</section>


<!-- section 2 = panel2 acf-->



<section class="panel" id="panel-name-2" style="background-image: url(<?php the_field('bg_1'); ?>)">
   <div class="title-template"><?php the_field('title-panel-2') ?></div>
   <div class="float-box">
      <h1 class="title-template-1">A PROPOS</h1>
      <p><?php the_field('description-propos-2') ?></p>
   </div>


   <div class="card">
   <h1 class="text-illustration">Vous aurez besoin de <strong><?php the_field('number_element_2'); ?></strong> ingrédients</h1>
   <?php if( have_rows('ingredient') ): ?>
    <?php while ( have_rows('ingredient') ) : the_row(); ?>
      <div class="card-box">
        <div class="myimage">
           <img src="<?php the_sub_field('img_ing'); ?>" alt="">
           <p><?php the_sub_field('title_ing'); ?></p>
        </div>
      </div>

<?php endwhile; ?>
<?php endif; ?>
   </div>
</section>


<!-- section 3 = panel3 acf  -->



<section class="panel" id="panel-name-3" style="background-image: url(<?php the_field('bg_2'); ?>)">
   <div class="title-template"><?php the_field('title-panel-3') ?></div>
   <div class="float-box">
      <h1 class="title-template-1">A PROPOS</h1>
      <p><?php the_field('description-propos-3') ?></p>
   </div>

    <div class="card">
   <h1 class="text-illustration">Vous aurez besoin de <?php the_field('number_element_3'); ?> ingrédients</h1>
   <?php if( have_rows('ingredient_2') ): ?>
    <?php while ( have_rows('ingredient_2') ) : the_row(); ?>
      <div class="card-box">
        <div class="myimage">
           <img src="<?php the_sub_field('img_ing_2'); ?>" alt="">
           <p><?php the_sub_field('title_ing_2'); ?></p>
        </div>
      </div>

<?php endwhile; ?>
<?php endif; ?>
   </div>
</section>




<!-- section 4 = panel4 acf  -->
<section class="panel" id="panel-name-4" style="background-image: url(<?php the_field('bg_3'); ?>)">
   <div class="title-template"><?php the_field('title-panel-4') ?></div>
   <div class="float-box">
      <h1 class="title-template-1">A PROPOS</h1>
      <p><?php the_field('description-propos-4') ?></p>
   </div>

    <div class="card">
   <h1 class="text-illustration">Vous aurez besoin de <?php the_field('number_element_4'); ?>ingrédients</h1>
   <?php if( have_rows('ingredient_3') ): ?>
    <?php while ( have_rows('ingredient_3') ) : the_row(); ?>
      <div class="card-box">
        <div class="myimage">
           <img src="<?php the_sub_field('img_ing_3'); ?>" alt="">
           <p><?php the_sub_field('title_ing_3'); ?></p>
        </div>
      </div>

<?php endwhile; ?>
<?php endif; ?>
   </div>
</section>


  
    <?php get_footer(); ?>
    
    
    
  </body>
</html>


