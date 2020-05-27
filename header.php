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

   <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
          new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-MQDG2KV');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Ads: 650991677 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-650991677"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-650991677');
    </script>
    
    <script>
      function gtag_report_conversion(url) {
        var callback = function () {
          if (typeof(url) != 'undefined') {
            window.location = url;
          }
        };
        gtag('event', 'conversion', {
            'send_to': 'AW-650991677/9dMiCIm6j9EBEL2wtbYC',
            'value': 1.0,
            'currency': 'EUR',
            'event_callback': callback
        });
        return false;
      }
    </script> 

    <!-- Event snippet for Linkedin social media conversion page
    In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
    function gtag_report_conversion(url) {
      var callback = function () {
        if (typeof(url) != 'undefined') {
          window.location = url;
        }
      };
      gtag('event', 'conversion', {
          'send_to': 'AW-650991677/sJdlCOCRkdEBEL2wtbYC',
          'event_callback': callback
      });
      return false;
    }
    </script>

    <!-- Event snippet for Whatsupp social media link conversion page
    In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
    function gtag_report_conversion(url) {
      var callback = function () {
        if (typeof(url) != 'undefined') {
          window.location = url;
        }
      };
      gtag('event', 'conversion', {
          'send_to': 'AW-650991677/Gyl9CIv_gNEBEL2wtbYC',
          'event_callback': callback
      });
      return false;
    }
    </script>

    <!-- Event snippet for Twitter social media link conversion page
    In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
    function gtag_report_conversion(url) {
      var callback = function () {
        if (typeof(url) != 'undefined') {
          window.location = url;
        }
      };
      gtag('event', 'conversion', {
          'send_to': 'AW-650991677/8HEKCLe-gtEBEL2wtbYC',
          'event_callback': callback
      });
      return false;
    }
    </script>

    <!-- Event snippet for Git hub social media links conversion page
    In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
    function gtag_report_conversion(url) {
      var callback = function () {
        if (typeof(url) != 'undefined') {
          window.location = url;
        }
      };
      gtag('event', 'conversion', {
          'send_to': 'AW-650991677/aWo-CMTIk9EBEL2wtbYC',
          'event_callback': callback
      });
      return false;
    }
    </script>

    <?php wp_head(); ?>

</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQDG2KV"
                    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    <?php $detect = new Mobile_Detect; ?>
    <!--Start NavBar-->
    <nav class="navbar navbar-light navbar-expand-md custom-nav py-3">
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
