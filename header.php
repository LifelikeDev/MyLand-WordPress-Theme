<?php

/*
Header Template

@package myland

*/

?>

<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">

<head>
    <meta charset="<?php bloginfo("charset") ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myland WordPress Theme</title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> > 

    <?php if (function_exists("wp_body_open")) {
        wp_body_open(); 
    }
    ?>

    <div class="site" id="page">

        <header class="header-content" role="banner">
            <?php get_template_part("./template-parts/header/nav"); ?>
        </header>

        <div class="site-content">
        <p>Some header paragraph</p>
       