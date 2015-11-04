<?php 

/* Template Name: creationkit*/

 ?>
<?php get_header('form') ?>
<?php 

if(isset(($_POST['submit'])){ 
 if (empty($_POST['myname']) || empty('mysituation')){



          
        



   
	$name = htmlspecialchars($_POST['myname']);
	$situation = wp_kses_post($_POST['mysituation']);
	$title_situation = $_POST['title_situation'];



	$contact_post = array(
		'post_title' => $name,
		'post_content' => $situation,
		'post_type' => 'createkit',
		'post_status' => 'publish',

	);

	$post_id = wp_insert_post( $contact_post);


	// if(wp_insert_post($contact_post)) echo 'votre kit a été enregistré ';
	// else echo 'erreur lors de envoie';

	update_field("field_5633f0cdacbef", $title_situation, $post_id);
 }



}


 ?>

<div class="split-container">
   <div class="split-item split-right">
      <h3>Racontez nous comment vous avez survécu !</h3>
      <p>
         Que vous ayez fait beaucoup de voyages ou non, vous avez forcément vécu une situation où votre vie a été mise en danger. Chute, bagarre, blessure, tant de choses intéressantes peuvent rapidement arriver. Partagez votre histoire avec d’autres survivants comme vous!
      </p>
      <a target="_blank" href="">All of fame</a>		
   </div>


   <div class="split-item split-left">
   <h1>Publie ton Aventure</h1>
      
      <div class="form">
         <form action="<?php echo the_permalink(); ?>" method="POST">

            <p><input type="text" name="myname"  placeholder="Nom"></p>
            <p><input type="text" name="mysituation"  placeholder="titre de la situation"></p>
            <p><textarea  name="title_situation" placeholder="Message"></textarea></p>
            <p><input type="submit" name="submit" value="Envoyer"></p>
         </form>
      </div>
   </div>
</div>