<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>

<header class= "site-header">
    <div class = "Content">
        <div class = "Navbar">
            <div class = "logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt = "Logo Site">
            </div>

            <?php
                $args = array(
                    'theme_location' => 'main-menu',
                    'container' => 'nav',
                    'container_class' => 'main-menu'
                );
                wp_nav_menu($args);
            ?>

        </div>
    </div>
</header>
