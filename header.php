<!doctype html>
<!--[if lt IE 7]>
<html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>
<html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>
<html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> style="margin: 0 !important;"> <!--<![endif]-->
<head>

    <!--=== META TAGS ===-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true);
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>" />
    <meta name="author" content="Name">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon">

    <!--=== LINK TAGS ===-->
    <link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/path/favicon.ico"/>
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed"
          href="<?php bloginfo('rss2_url'); ?>"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <!--=== TITLE ===-->
    <title><?php bloginfo('name'); ?><?php '||' . wp_title(); ?></title>

    <!--=== WP_HEAD() ===-->
    <?php wp_head(); ?>

    <!--=== DOP STYLE ===-->
    <link rel= "stylesheet" href= "<?php bloginfo('template_directory'); ?>/css/carusel.css" media= "all" />
    <link rel= "stylesheet" href= "<?php bloginfo('template_directory'); ?>/css/main-page.css" media= "all" />

</head>
<body>

<div class="container-fluid container-img" style="background: url(<?php the_field('pic'); ?>) no-repeat top center fixed; background-color: #656565;">

</div>

<div class="row block-info center-block" style="border-top: 1px solid #000; background-color: rgba(0, 0, 0, 0.7);">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2" style="color: #fff;"><span style="position: relative; top: 4px; right: 5px;" class="glyphicon glyphicon-earphone"></span><?php the_field('телефон_в_шапке_1',16); ?></div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2" style="color: #fff;"><span style="position: relative; top: 4px; right: 5px;" class="glyphicon glyphicon-earphone"></span><?php the_field('телефон_в_шапке_2',16); ?></div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2" style="color: #fff;"><span style="position: relative; top: 4px; right: 5px;" class="glyphicon glyphicon-earphone"></span><?php the_field('телефон_в_шапке_3',16); ?></div>
    <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 col-sm-offset-0 col-xs-offset-0 col-md-offset-1 col-lg-offset-4"><a href="/контакты/" class="address">Наши адреса<span style="position: relative; top: 2px; margin-left: 2px;" class="glyphicon glyphicon-map-marker"></span></a></div>
    <div class="clearfix"></div>
</div>

<div style="position: absolute; top: 0%; left: 10%;">
    <div class="container">
        <a href="/"><img class="logo" src="<?php the_field('логотип',16); ?>" alt="<?php bloginfo('name'); ?>" /></a>
    </div>
</div>

<div class="row center-block" style="background: #f8f8f8;">
    <div class="container">
        <nav role="navigation" class="navbar navbar-default" style="margin-bottom: 0px; border: none;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <?php
                wp_nav_menu( array(
                    'menu_class'=>'nav navbar-nav custom-menu',
                    'theme_location'=>'top'
                ) );
                ?>
            </div>
        </nav>
    </div>
</div>

<div class="container margin-top" style="margin-bottom: 20px;">
    <div class="row">
        <div class="col-xs-6 col-sm-3 text-center">
            <a href="<?php the_field('b1_link',29); ?>">
                <div class="around"><img style="display: inline;" class="img-responsive" src="<?php the_field('b1_img',29); ?>"/></div>
                <p><strong><?php the_field('b1_title',29); ?></strong></p>
            </a>
        </div>
        <div class="col-xs-6 col-sm-3 text-center">
            <a href="<?php the_field('b2_link',29); ?>">
                <div class="around"><img style="display: inline;" class="img-responsive" src="<?php the_field('b2_img',29); ?>"/></div>
                <p><strong><?php the_field('b2_title',29); ?></strong></p>
            </a>
        </div>
        <div class="col-xs-6 col-sm-3 text-center">
            <a href="<?php the_field('b3_link',29); ?>">
                <div class="around"><img style="display: inline;" class="img-responsive" src="<?php the_field('b3_img',29); ?>"/></div>
                <p><strong><?php the_field('b3_title',29); ?></strong></p>
            </a>
        </div>
        <div class="col-xs-6 col-sm-3 text-center">
            <a href="<?php the_field('b4_link',29); ?>">
                <div class="around"><img style="display: inline;" class="img-responsive" src="<?php the_field('b4_img',29); ?>"/></div>
                <p><strong><?php the_field('b4_title',29); ?></strong></p>
            </a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>




