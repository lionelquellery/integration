<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>

    <?php if(preg_match('`ile-deserte`', $_SERVER['REQUEST_URI'])) {
    	echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/css/ile-deserte.css">';
    }else if (preg_match('`montagne`', $_SERVER['REQUEST_URI'])){
    	echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/css/montagne.css">';

    }else if (preg_match('`jungle`', $_SERVER['REQUEST_URI'])){
    	echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/css/jungle.css">';

    }else if (preg_match('`mer`', $_SERVER['REQUEST_URI'])){
    	echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/css/mer.css">';

    }else if (preg_match('`desert`', $_SERVER['REQUEST_URI'])){
    	echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/css/desert.css">';

    }else{
        echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/css/style.css">';


    }
    ?>

    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico." />



    <?php wp_head(); ?>
    
</head>
    <a href="/wordpress"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-wordpress.png" alt="Logo"></a>

