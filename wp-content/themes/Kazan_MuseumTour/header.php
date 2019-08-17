<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/mystyle.css">
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header">
    <div class="wrapper">
        <div id="branding">

        </div>
        <nav id="menu">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>

        </nav>
        <div id="mob_menu">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</header>
<div id="container">