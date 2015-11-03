<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>

    <?php if(preg_match('`ile-deserte`', $_SERVER['REQUEST_URI'])) {
    	echo '<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ile-deserte.css">';
    }
    ?>


    <?php wp_head(); ?>
    
</head>
    <a href="/wordpress"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-wordpress.png" alt="Logo"></a>

