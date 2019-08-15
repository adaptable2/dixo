<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DIXO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <?php wp_head();?>
</head>
<body>
<header class="nav-page">
    <div class="container">
        <div class="row">
            <nav class="col-12 navbar navbar-expand-lg ">
                <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="img-fluid"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bar-menu"></span>
                    <span class="bar-menu"></span>
                    <span class="bar-menu"></span>
                </button>                
                <div class="collapse navbar-collapse justify-content-start" id="navbarSupportedContent">
                    <?php
                    $defaults = array(
                        'theme_location'    => 'principal-menu',
                        'container'             => 'false',
                        'menu_class'            => 'navbar-nav'
                    );
                    wp_nav_menu( $defaults );

                    ?>
                </div> 
                    <?php get_template_part('searchform'); ?>
            </nav>
        </div>
    </div>
</header>