<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>" />

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Yes-Soft is a software company that makes Commercial and Open-Source Software. We endeavor on highly proficient, timely delivered and cost effective software, web and mobile development services">

    <title><?php bloginfo('name'); ?></title>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="icon" href="<?php echo get_template_directory_uri() . '/img/logo.svg'?>" />


    <?php wp_head(); ?>

</head>

<body>

    <?php $detect = new Mobile_Detect; ?>
    <!--Start NavBar-->
    <nav class="navbar navbar-default navbar-light navbar-expand-md custom-nav py-3">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>
            <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
              <img class="responsive-element rounded" src="<?php echo get_template_directory_uri() . '/img/logo.gif' ?>" alt="logo" loading="lazy">
            </a>
  	        <?php if ( !$detect->isMobile() ): endif; ?>
<!--              <div class="bg-nav-logo d-none d-md-block">-->
<!--                  <img src="--><?php //echo get_template_directory_uri() . '/img/bg-logo.png' ?><!--" class="responsive-element" alt="background Logo">-->
<!--                  <div class="nav-logo">-->
<!--                      <a href="--><?php //echo get_site_url()?><!--">-->
<!--                          <img src="--><?php //echo get_template_directory_uri() . '/img/logo.gif' ?><!--" class="responsive-element" alt="Logo">-->
<!--                      </a>-->
<!--                  </div>-->
<!--              </div>-->
<!--            --><?php //endif; ?>
<!--            --><?php //if ( $detect->isMobile() ): ?>
<!--              <div class="col-4 d-md-none px-0 px-sm-3">-->
<!--                  <a href="--><?php //echo get_site_url(); ?><!--">-->
<!--                      <img src="--><?php //echo get_template_directory_uri() . '/img/logo.svg' ?><!--" class="" alt="yes soft logo">-->
<!--                  </a>-->
<!--              </div>-->
<!--              --><?php //endif; ?>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <?php yes_soft_position_custom_nav(); ?>

            </div>
        </div>

    </nav>
    <!--End NavBar-->

    <!--Start Booking Section-->
    <div class="booking">
      <div class="booking-section d-inline-block">
        <p class="mb-0"><?php pl_e( 'Start Design Your Online Store' ); ?></p>
      </div>
      <button class="booking-button d-inline-block"><?php pl_e( 'Book Appointment' ) ?></button>
      <div class="booking-popup">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid beatae dicta ducimus error eveniet expedita in labore maiores minus, molestias nisi nostrum officiis omnis placeat possimus quas, qui sit.</p>
        <!--        --><?php //echo do_shortcode('[booking]'); ?>
        <i class="fa fa-window-close booking_close"></i>
      </div>

    </div>
    <!--Start Booking Section-->

    <!--Start Whats App Button-->
    <?php
      $whatsAppNumber = get_option('WhatsAppNumber');
      if ( !empty( $whatsAppNumber ) ): ?>
        <div class="whatsapp-chat">
          <a alt="whatsapp"
             target="_blank"
             onclick="ga('send', 'event', 'WhatsApp Chat', 'WhatsApp Clicked', '<?php the_title(); ?>')"
             href="https://api.whatsapp.com/send?phone=<?php echo $whatsAppNumber; ?>">
            <img class="img-fluid" title="WhatsApp us" src="<?php echo get_template_directory_uri() . '/img/whatsup.png' ?>" alt="Whats App">
          </a>
        </div>
    <?php endif; ?>
    <!--End Whats App Button-->
