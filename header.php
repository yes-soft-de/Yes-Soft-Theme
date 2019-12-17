<!DOCTYPE html>

<html <?php language_attributes(); ?>>



<head>

    <meta charset="<?php bloginfo('charset'); ?>" />

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Yes-Soft is a software company that makes Commercial and Open-Source Software. We endeavor on highly proficient, timely delivered and cost effective software, web and mobile development services">

    <title><?php bloginfo('name'); ?></title>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="icon" href="<?php echo get_template_directory_uri() . '/img/logo.svg'?>" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142190160-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-142190160-1');
    </script>

    <?php wp_head(); ?>

</head>



<body>

    <!--Start NavBar-->

    <nav class="navbar navbar-light navbar-expand-md custom-nav py-3">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="col-4 d-md-none px-0 px-sm-3">
                <img src="<?php echo get_template_directory_uri() . '/img/logo.svg' ?>" class="" alt="yes soft logo">
            </div>



            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <?php position_custom_nav(); ?>

            </div>
        </div>

    </nav>

    <!--End NavBar-->
