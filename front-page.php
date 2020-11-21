<?php get_header(); ?>


<!-- Start Up Button Section -->
<div class="move-up">
    <button type="button" class="move-up-button">
        <i class="fa fa-angle-double-up fa-lg fa-fw" aria-hidden="true"></i>
    </button>
</div>
<!-- End Up Button Section -->

<div class="home">
    <!--Start slider section-->
    <div class="home-slider">
        <div class="home-slide">
          <div class="row">
                <div class="col-9 col-lg-6 col-xl-7 offset-sm-2 offset-xl-1 slider-content align-self-center text-center">
                    <h1><?php pl_e( 'Your best choice for e-commerce services' ); ?></h1>
                    <p><?php pl_e( 'Your best choice for e-commerce services. Let us help you to build and improve your Site and design especially. 
                    Our team will develop your eCommerce From A to Z, with high security and great implemented, interactive, and mobile-friendly.' ); ?>
                    </p>
                </div>
                <div class="col-7 col-md-4 slider-img align-self-center mx-auto">
                    <img src="<?php echo get_template_directory_uri() . '/img/e-commerce.png'?>" class="img-fluid" alt="Slider Image">
                </div>
            </div>
        </div>
        <div class="home-slide">
            <div class="row">
                <div class="col-9 col-lg-6 col-xl-7 offset-sm-2 offset-xl-1 slider-content align-self-center text-center">
                    <h1><?php pl_e( 'Android App Development' ); ?></h1>
                    <p><?php pl_e( 'Improve your business by using mobile apps because most of the internet traffic these days comes from mobile users. We can help you with our expertise app developers to succeed with your mobile strategy.' ); ?></p>
                </div>
                <div class="col-7 col-md-4 slider-img align-self-center mx-auto">
                    <img src="<?php echo get_template_directory_uri() . '/img/android_app.png'?>" class="img-fluid" alt="Slider Image">
                </div>
            </div>
        </div>
        <div class="home-slide">
            <div class="row">
                <div class="col-9 col-lg-6 col-xl-7 offset-sm-2 offset-xl-1 slider-content align-self-center text-center">
                    <h1><?php pl_e( 'Try the Remote Maintenance with us' ); ?></h1>
                    <p><?php pl_e( 'We offer E-marketing campaigns at social media platforms or email-based, graphic design, promoting videos, content marketing, and best SEO services. You should try remote maintenance because this field is also trending in today’s world.' ); ?></p>
                </div>
                <div class="col-7 col-md-4 slider-img align-self-center mx-auto">
                    <img src="<?php echo get_template_directory_uri() . '/img/remote-maintenance.png'?>" class="img-fluid" alt="Slider Image">
                </div>
            </div>
        </div>
    </div>

    <!--Start Our Project Section-->
    <div class="our-projects">
        <div class="container-fluid">
            <h2 class="text-center"><?php pl_e( 'Our Projects' ); ?></h2>
            <p class="col-12 col-sm-10 col-md-8 col-lg-6 lead text-center mx-auto">
	            <?php pl_e( 'The final result will be a website where users can browse, interact, review and buy masterpieces or order a custom one if wanted. They also can follow artists or art schools.' ); ?>
            </p>
            <div class="our-projects-slider">
                <div class="col-11 col-md-10 col-lg-9 col-xl-8 offset-sm-1 offset-md-2 project">
                    <div id="project-1" class="project-list list">
                        <div class="row">
                            <div data-t="ishtar" class="col-4 selected project-item">
<!--                                  <img src="--><?php //echo get_template_directory_uri() . '/img/our-projects/ishtar.jpg'?><!--" class="responsive-element" alt="Project Image">-->
                                <?php
                                  if ( !$detect->isMobile() ):
                                    $img_html = '<img src="'. get_template_directory_uri() . '/img/our-projects/ishtar.jpg" class="responsive-element" alt="ishtar">';
                                    $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
                                    echo $img_html; ?>
                                  <div class="project-hovering"><?php pl_e( 'Ishtar' ); ?></div>
                                <?php endif; ?>
                                <p><?php pl_e( 'Ishtar' ); ?></p>
                            </div>
                            <div data-t="ishtar-art" class="col-4 project-item px-0">
<!--                                  <img src="--><?php //echo get_template_directory_uri() . '/img/our-projects/ishtar-art.png';?><!--" class="responsive-element" alt="Project Image">-->
                                <?php
                                  if ( !$detect->isMobile() ):
                                    $img_html = '<img src="'. get_template_directory_uri() . '/img/our-projects/ishtar-art.png" class="responsive-element" alt="ishtar art">';
                                    $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
                                    echo $img_html; ?>
                                    <div class="project-hovering w-100"><?php pl_e( 'Ishtar art' ); ?></div>
                                <?php endif; ?>
                                <p><?php pl_e( 'art' ); ?></p>
                            </div>
                            <div data-t="ishtar-goals" class="col-4 project-item">
<!--                                  <img src="--><?php //echo get_template_directory_uri() . '/img/our-projects/ishtar-goal.png'?><!--" class="responsive-element" alt="Project Image">-->
                                <?php
                                  if ( !$detect->isMobile() ):
                                    $img_html = '<img src="'. get_template_directory_uri() . '/img/our-projects/ishtar-goal.png" class="responsive-element" alt="ishtar-goal">';
                                    $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
                                    echo $img_html; ?>
                                    <div class="project-hovering"><?php pl_e( 'Goals' ); ?></div>
                                <?php endif; ?>
                                <p><?php pl_e( 'Goals' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="ishtar">
                            <h3><a href="http://ishtar-art.de/"><?php pl_e( 'Ishtar' ); ?></a></h3>
                            <p><?php pl_e( 'Ishtar is the East Semitic Akkadian, Assyrian and Babylonian goddess of fertility, love, war, and sex. She is the counterpart to the Sumerian Inanna, and is the cognate for the Northwest Semitic Aramean goddess Astarte.' ); ?>
                            </p>
                        </div>
                        <div class="ishtar-art">
                            <h3><?php pl_e( 'Ishtar art' ); ?></h3>
                            <p><?php pl_e( 'Ishtar is a website to introduce you with modern syrian painting art and artists. Our mission is showing the best of emerging syrian artists in the art market today' ); ?>
                            </p>
                        </div>
                        <div class="ishtar-goals">
                            <h3><?php pl_e( 'Ishtar\'s goals' ); ?></h3>
                            <p>
	                            <?php pl_e( 'ISHTAR is a website for art & artists that aims to' ); ?>:<br>
                                ● <?php pl_e( 'Display paintings' ); ?><br>
                                ● <?php pl_e( 'Introduce Artists' ); ?><br>
                                ● <?php pl_e( 'Make interactions with content possible through the platform' ); ?><br>
                                ● <?php pl_e( 'Facilitate buying process' ); ?>
                            </p>
                        </div>
                    </div>
                </div>
<!--              <div class="col-11 col-md-10 col-lg-9 col-xl-8 offset-sm-1 offset-md-2 project">-->
<!--                <div id="project-2" class="project-list list">-->
<!--                  <div class="row">-->
<!--                    <div data-t="ishtar" class="col-4 selected project-item">-->
<!--                      <!--                                  <img src="-->--><?php ////echo get_template_directory_uri() . '/img/our-projects/ishtar.jpg'?><!--<!--" class="responsive-element" alt="Project Image">-->-->
<!--					            --><?php
//						            if ( !$detect->isMobile() ):
//							            $img_html = '<img src="'. get_template_directory_uri() . '/img/our-projects/ishtar.jpg" class="responsive-element" alt="ishtar">';
//							            $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
//							            echo $img_html; ?>
<!--                          <div class="project-hovering">--><?php //pl_e( 'Ishtar' ); ?><!--</div>-->
<!--						            --><?php //endif; ?>
<!--                      <p>--><?php //pl_e( 'Ishtar' ); ?><!--</p>-->
<!--                    </div>-->
<!--                    <div data-t="ishtar-art" class="col-4 project-item px-0">-->
<!--                      <!--                                  <img src="-->--><?php ////echo get_template_directory_uri() . '/img/our-projects/ishtar-art.png';?><!--<!--" class="responsive-element" alt="Project Image">-->-->
<!--					            --><?php
//						            if ( !$detect->isMobile() ):
//							            $img_html = '<img src="'. get_template_directory_uri() . '/img/our-projects/ishtar-art.png" class="responsive-element" alt="ishtar art">';
//							            $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
//							            echo $img_html; ?>
<!--                          <div class="project-hovering w-100">--><?php //pl_e( 'Ishtar art' ); ?><!--</div>-->
<!--						            --><?php //endif; ?>
<!--                      <p>--><?php //pl_e( 'art' ); ?><!--</p>-->
<!--                    </div>-->
<!--                    <div data-t="ishtar-goals" class="col-4 project-item">-->
<!--                      <!--                                  <img src="-->--><?php ////echo get_template_directory_uri() . '/img/our-projects/ishtar-goal.png'?><!--<!--" class="responsive-element" alt="Project Image">-->-->
<!--					            --><?php
//						            if ( !$detect->isMobile() ):
//							            $img_html = '<img src="'. get_template_directory_uri() . '/img/our-projects/ishtar-goal.png" class="responsive-element" alt="ishtar-goal">';
//							            $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
//							            echo $img_html; ?>
<!--                          <div class="project-hovering">--><?php //pl_e( 'Goals' ); ?><!--</div>-->
<!--						            --><?php //endif; ?>
<!--                      <p>--><?php //pl_e( 'Goals' ); ?><!--</p>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <div class="info">-->
<!--                  <div class="ishtar">-->
<!--                    <h3><a href="http://ishtar-art.de/">--><?php //pl_e( 'Ishtar' ); ?><!--</a></h3>-->
<!--                    <p>--><?php //pl_e( 'Ishtar is the East Semitic Akkadian, Assyrian and Babylonian goddess of fertility, love, war, and sex. She is the counterpart to the Sumerian Inanna, and is the cognate for the Northwest Semitic Aramean goddess Astarte.' ); ?>
<!--                    </p>-->
<!--                  </div>-->
<!--                  <div class="ishtar-art">-->
<!--                    <h3>--><?php //pl_e( 'Ishtar art' ); ?><!--</h3>-->
<!--                    <p>--><?php //pl_e( 'Ishtar is a website to introduce you with modern syrian painting art and artists. Our mission is showing the best of emerging syrian artists in the art market today' ); ?>
<!--                    </p>-->
<!--                  </div>-->
<!--                  <div class="ishtar-goals">-->
<!--                    <h3>--><?php //pl_e( 'Ishtar\'s goals' ); ?><!--</h3>-->
<!--                    <p>-->
<!--					            --><?php //pl_e( 'ISHTAR is a website for art & artists that aims to' ); ?><!--:<br>-->
<!--                      ● --><?php //pl_e( 'Display paintings' ); ?><!--<br>-->
<!--                      ● --><?php //pl_e( 'Introduce Artists' ); ?><!--<br>-->
<!--                      ● --><?php //pl_e( 'Make interactions with content possible through the platform' ); ?><!--<br>-->
<!--                      ● --><?php //pl_e( 'Facilitate buying process' ); ?>
<!--                    </p>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
                <div class="col-11 col-md-10 col-lg-9 col-xl-8 offset-sm-1 offset-md-2 project">
                    <div class="project-big-style">
                        <div id="project-3" class="project-list list">
                            <div class="row">
                                <div data-t="doctor-notebook" class="col-4 selected project-item">
<!--                                    <img src="--><?php //echo get_template_directory_uri() . '/img/our-projects/doctor-site.png'?><!--" class="responsive-element" alt="Project Image">-->
	                                  <?php
	                                    if ( !$detect->isMobile() ):
                                        $img_html = '<img src="'. get_template_directory_uri() . '/img/our-projects/doctor-site.png" class="responsive-element" alt="Project Image">';
                                        $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
                                        echo $img_html;
	                                  ?>
                                    <div class="project-hovering"><?php pl_e( 'Doctor' ); ?></div>
                                  <?php endif; ?>
                                  <p><?php pl_e( 'NDoctor' ); ?></p>
                                </div>
                                <div data-t="online-store" class="col-4 project-item px-0">
<!--                                    <img src="--><?php //echo get_template_directory_uri() . '/img/our-projects/doctor-store.png'?><!--" class="responsive-element" alt="Project Image">-->
                                  <?php
                                    if ( !$detect->isMobile() ):
                                      $img_html = '<img src="'. get_template_directory_uri() . '/img/our-projects/doctor-store.png" class="responsive-element" alt="Project Image">';
                                      $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
                                      echo $img_html; ?>
                                      <div class="project-hovering w-100"><?php pl_e( 'Online Store' ); ?></div>
                                  <?php endif; ?>
                                    <p><?php pl_e( 'Store' ); ?></p>
                                </div>
                                <div data-t="maintenance" class="col-4 project-item">
<!--                                    <img src="--><?php //echo get_template_directory_uri() . '/img/our-projects/doctor-maintenance.jpg'?><!--" class="responsive-element" alt="Project Image">-->
	                                <?php
		                                if ( !$detect->isMobile() ):
			                                $img_html = '<img src="'. get_template_directory_uri() . '/img/our-projects/doctor-maintenance.jpg" class="responsive-element" alt="Project Image">';
			                                $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
			                                echo $img_html;?>
                                      <div class="project-hovering"><?php pl_e( 'Maintain' ); ?></div>
                                  <?php endif; ?>
                                  <p><?php pl_e( 'Maint' ); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="info">
                            <div class="doctor-notebook">
                                <h3><?php pl_e( 'Doctor notebook' ); ?></h3>
                                <p><?php pl_e( 'Doctor notebook store is located in Brazil' ); ?>.
                                </p>
                            </div>
                            <div class="online-store">
                                <h3><?php pl_e( 'Online store' ); ?></h3>
                                <p><?php pl_e( 'Doctor notebook is a website that sell computers, laptops and related gadgets' ); ?>.
                                </p>
                            </div>
                            <div class="maintenance">
                                <h3><?php pl_e( 'Maintenance services' ); ?></h3>
                                <p><?php pl_e( 'It also provides maintenance services (Software & Hardware) to any of the computers and laptops it sells' ); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div> <!--End Project-->
                <div class="col-11 col-md-10 col-lg-9 col-xl-8 offset-sm-1 offset-md-2 project">
                  <div class="project-big-style">
                    <div id="project-4" class="project-list list">
                      <div class="row">
                        <div data-t="agora" class="col-4 selected project-item">
<!--                            <img src="--><?php //echo get_template_directory_uri() . '/img/our-projects/agora.jpg'?><!--" class="responsive-element" alt="Project Image">-->
	                        <?php
		                        if ( !$detect->isMobile() ):
			                        $img_html = '<img src="'. get_template_directory_uri() . '/img/our-projects/agora.jpg" class="responsive-element" alt="Project Image">';
			                        $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
			                        echo $img_html;
			                        ?>
                              <div class="project-hovering"><?php pl_e( 'Agora' ); ?></div>
                          <?php endif; ?>
                          <p><?php pl_e( 'Agora' ); ?></p>
                        </div>
                        <div data-t="features" class="col-4 project-item px-0">
<!--                            <img src="--><?php //echo get_template_directory_uri() . '/img/our-projects/feature-2.jpg'?><!--" class="responsive-element" alt="Project Image">-->
	                        <?php
		                        if ( !$detect->isMobile() ):
			                        $img_html = '<img src="'. get_template_directory_uri() . '/img/our-projects/feature-2.jpg" class="responsive-element" alt="Project Image">';
			                        $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
			                        echo $img_html;
			                        ?>
                              <div class="project-hovering w-100"><?php pl_e( 'Features' ); ?></div>
                          <?php endif; ?>
                          <p><?php pl_e( 'Features' ); ?></p>
                        </div>
                        <div data-t="agora-maintenance" class="col-4 project-item">
<!--                            <img src="--><?php //echo get_template_directory_uri() . '/img/our-projects/maintain.jpg'?><!--" class="responsive-element" alt="Project Image">-->
	                        <?php
		                        if ( !$detect->isMobile() ):
			                        $img_html = '<img src="'. get_template_directory_uri() . '/img/our-projects/maintain.jpg" class="responsive-element" alt="Project Image">';
			                        $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
			                        echo $img_html; ?>
                              <div class="project-hovering"><?php pl_e( 'Maintain' ); ?></div>
                          <?php endif; ?>
                          <p><?php pl_e( 'Maint' ); ?></p>
                        </div>
                      </div>
                    </div>
                    <div class="info">
                      <div class="agora">
                        <h3><a href="https://agorachegou.com.br"><?php pl_e( 'Agora' ); ?></a></h3>
                        <p><?php pl_e( 'Brazilian online shop for second-hand laptops' ); ?>.
                        </p>
                      </div>
                      <div class="features">
                        <h3><?php pl_e( 'Features' ); ?>:</h3>
                        <p>
                          ● <?php pl_e( 'Easy to use' ); ?><br>
                          ● <?php pl_e( 'Direct contact available' ); ?><br>
                          ● <?php pl_e( 'Secure' ); ?><br>
                        </p>
                      </div>
                      <div class="agora-maintenance">
                        <h3><?php pl_e( 'Maintenance services' ); ?></h3>
                        <p><?php pl_e( 'Collaborated with Notebook Doctor for maintenance' ); ?>
                        </p>
                      </div>
                    </div>
                  </div>
                </div> <!--End Project-->
              <div class="col-11 col-md-10 col-lg-9 col-xl-8 offset-sm-1 offset-md-2 project">
                <div class="project-big-style">
                  <div id="project-5" class="project-list list">
                    <div class="row">
                      <div data-t="wow" class="col-4 selected project-item">
<!--                          <img src="--><?php //echo get_template_directory_uri() . '/img/our-projects/wow.jpg'?><!--" class="responsive-element" alt="Project Image">-->
	                      <?php
		                      if ( !$detect->isMobile() ):
			                      $img_html = '<img src="'. get_template_directory_uri() . '/img/our-projects/wow.jpg" class="responsive-element" alt="Project Image">';
			                      $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
			                      echo $img_html; ?>
                            <div class="project-hovering"><?php pl_e( 'Wow' ); ?></div>
                        <?php endif; ?>
                        <p><?php pl_e( 'Wow' ); ?></p>
                      </div>
                      <div data-t="wow-features" class="col-4 project-item px-0">
<!--                          <img src="--><?php //echo get_template_directory_uri() . '/img/our-projects/feature-1.png'?><!--" class="responsive-element" alt="Project Image">-->
	                      <?php
		                      if ( !$detect->isMobile() ):
			                      $img_html = '<img src="'. get_template_directory_uri() . '/img/our-projects/feature-1.png" class="responsive-element" alt="Project Image">';
			                      $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
			                      echo $img_html; ?>
                            <div class="project-hovering w-100"><?php pl_e( 'Features' ); ?></div>
                        <?php endif; ?>
                        <p><?php pl_e( 'Features' ); ?></p>
                      </div>
                      <div data-t="payment-delivery" class="col-4 project-item">
<!--                          <img src="--><?php //echo get_template_directory_uri() . '/img/our-projects/wow-payment.jpg'?><!--" class="responsive-element" alt="Project Image">-->
	                      <?php
		                      if ( !$detect->isMobile() ):
			                      $img_html = '<img src="'. get_template_directory_uri() . '/img/our-projects/wow-payment.jpg" class="responsive-element" alt="Project Image">';
			                      $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
			                      echo $img_html; ?>
                            <div class="project-hovering"><?php pl_e( 'Payment' ); ?></div>
                        <?php endif; ?>
                        <p><?php pl_e( 'Payment' ); ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="info">
                    <div class="wow">
                      <h3><a href="https://wow-ae.com/index.php"><?php pl_e( 'Wow' ); ?></a></h3>
                      <p><?php pl_e( 'Emarati online shop' ); ?>.
                      </p>
                    </div>
                    <div class="wow-features">
                      <h3><?php pl_e( 'Features' ); ?>:</h3>
                      <p>
                        ● <?php pl_e( 'Wide range of products' ); ?><br>
                        ● <?php pl_e( 'Clothes, Furniture, Accessories and more' ); ?><br>
                      </p>
                    </div>
                    <div class="payment-delivery">
                      <h3><?php pl_e( 'Payment & Delivery' ); ?></h3>
                      <p><?php pl_e( 'No e-payment method needed, pay when delivered' ); ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div> <!--End Project-->
              <div class="col-11 col-md-10 col-lg-9 col-xl-8 offset-sm-1 offset-md-2 project">
                <div class="project-big-style">
                  <div id="project-6" class="project-list list">
                    <div class="row">
                      <div data-t="yes-go" class="col-4 selected project-item">
<!--                          <img src="--><?php //echo get_template_directory_uri() . '/img/our-projects/yesgo.png'?><!--" class="responsive-element" alt="Project Image">-->
	                      <?php
		                      if ( !$detect->isMobile() ):
			                      $img_html = '<img src="'. get_template_directory_uri() . '/img/our-projects/yesgo.png" class="responsive-element" alt="Project Image">';
			                      $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
			                      echo $img_html; ?>
                            <div class="project-hovering"><?php pl_e( 'Yes Go' ); ?></div>
                        <?php endif; ?>
                        <p><?php pl_e( 'YesGo' ); ?></p>
                      </div>
                      <div data-t="yes-go-features" class="col-4 project-item px-0">
<!--                          <img src="--><?php //echo get_template_directory_uri() . '/img/our-projects/features.png'?><!--" class="responsive-element" alt="Project Image">-->
	                      <?php
		                      if ( !$detect->isMobile() ):
			                      $img_html = '<img src="'. get_template_directory_uri() . '/img/our-projects/features.png" class="responsive-element" alt="Project Image">';
			                      $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
			                      echo $img_html; ?>
                            <div class="project-hovering w-100"><?php pl_e( 'Features' ); ?></div>
                        <?php endif; ?>
                        <p><?php pl_e( 'Features' ); ?></p>
                      </div>
                      <div data-t="quality" class="col-4 project-item">
<!--                          <img src="--><?php //echo get_template_directory_uri() . '/img/our-projects/quality.jpg'?><!--" class="responsive-element" alt="Project Image">-->
	                      <?php
		                      if ( !$detect->isMobile() ):
			                      $img_html = '<img src="'. get_template_directory_uri() . '/img/our-projects/quality.jpg" class="responsive-element" alt="Project Image">';
			                      $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
			                      echo $img_html; ?>
                          <div class="project-hovering"><?php pl_e( 'Quality' ); ?></div>
                        <?php endif; ?>
                        <p><?php pl_e( 'Quality' ); ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="info">
                    <div class="yes-go">
                      <h3><?php pl_e( 'Yes Go' ); ?></h3>
                      <p><?php pl_e( 'Freelance platform for Yes Soft employees only' ); ?>.
                      </p>
                    </div>
                    <div class="yes-go-features">
                      <h3><?php pl_e( 'Features' ); ?>:</h3>
                      <p>
                        ● <?php pl_e( 'Wide variety of highest in demand services' ); ?><br>
                        ● <?php pl_e( 'Daily, Weekly and Yearly based contracts' ); ?><br>
                      </p>
                    </div>
                    <div class="quality">
                      <h3><?php pl_e( 'Quality & Delivery of Products' ); ?></h3>
                      <p><?php pl_e( 'Guaranteed by Yes Soft company' ); ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div> <!--End Project-->
              <div class="col-11 col-md-10 col-lg-9 col-xl-8 offset-sm-1 offset-md-2 project">
                <div id="project-7" class="project-list list">
                  <div class="row">
                    <div data-t="p3ly" class="col-4 selected project-item">
                      <!--                                  <img src="--><?php //echo get_template_directory_uri() . '/img/our-projects/ishtar.jpg'?><!--" class="responsive-element" alt="Project Image">-->
					            <?php
						            if ( !$detect->isMobile() ):
							            $img_html = '<img src="'. get_template_directory_uri() . '/img/our-projects/p3ly.jpg" class="responsive-element" alt="p3ly">';
							            $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
							            echo $img_html; ?>
                          <div class="project-hovering"><?php pl_e( 'P3ly' ); ?></div>
						            <?php endif; ?>
                      <p><?php pl_e( 'P3ly' ); ?></p>
                    </div>
                  </div>
                </div>
                <div class="info">
                  <div class="p3ly">
                    <h3><a href="http://p3ly.com/"><?php pl_e( 'P3ly' ); ?></a></h3>
                    <p>
                      <?php pl_e( 'P3ly ' ); ?>
                      <?php pl_e( 'is Shop powered by PrestaShop.' ); ?>
                    </p>
                  </div>
                </div>
              </div><!--End Project-->
              <div class="col-11 col-md-10 col-lg-9 col-xl-8 offset-sm-1 offset-md-2 project">
                <div id="project-8" class="project-list list">
                  <div class="row">
                    <div data-t="almuwajeh" class="col-4 selected project-item">
                      <!--                                  <img src="--><?php //echo get_template_directory_uri() . '/img/our-projects/ishtar.jpg'?><!--" class="responsive-element" alt="Project Image">-->
					            <?php
						            if ( !$detect->isMobile() ):
							            $img_html = '<img src="'. get_template_directory_uri() . '/img/our-projects/almuwajeh.jpg" class="responsive-element" alt="p3ly">';
							            $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
							            echo $img_html; ?>
                          <div class="project-hovering"><?php pl_e( 'Al-Muwajeh' ); ?></div>
						            <?php endif; ?>
                      <p><?php pl_e( 'Al-Muwajeh' ); ?></p>
                    </div>
                  </div>
                </div>
                <div class="info">
                  <div class="almuwajeh">
                    <h3><a href="https://almuwajeh.com/"><?php pl_e( 'Al-Muwajeh' ); ?></a></h3>
                    <p>
                      <?php pl_e( 'Al-Muwajeh ' ); ?>
	                    <?php pl_e( 'is Shop powered by PrestaShop.' ); ?>
                    </p>
                  </div>
                </div>
              </div><!--End Project-->
              <div class="col-11 col-md-10 col-lg-9 col-xl-8 offset-sm-1 offset-md-2 project">
                <div id="project-9" class="project-list list">
                  <div class="row">
                    <div data-t="nomads" class="col-4 selected project-item">
                      <!--                                  <img src="--><?php //echo get_template_directory_uri() . '/img/our-projects/ishtar.jpg'?><!--" class="responsive-element" alt="Project Image">-->
					            <?php
						            if ( !$detect->isMobile() ):
							            $img_html = '<img src="'. get_template_directory_uri() . '/img/our-projects/nomads.jpg" class="responsive-element" alt="p3ly">';
							            $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
							            echo $img_html; ?>
                          <div class="project-hovering"><?php pl_e( 'Nomads' ); ?></div>
						            <?php endif; ?>
                      <p><?php pl_e( 'Nomads' ); ?></p>
                    </div>
                  </div>
                </div>
                <div class="info">
                  <div class="nomads">
                    <h3><a href="https://nomads.ae.org/"><?php pl_e( 'Nomads' ); ?></a></h3>
                    <p><?php pl_e( 'Nomads The app brings together all the needs of digital nomads, an arena for competition between service providers and a place to announce the latest offers and services
.' ); ?>
                    </p>
                  </div>
                </div>
              </div><!--End Project-->
            </div><!--End Our Project Silder-->
        </div><!--End Container fluid-->
    </div>
    <!--End Our Project Section-->

    <!--Start We Are Specialised Section-->
    <div class="specialise-in position-relative">
<!--        <img src="--><?php //echo get_template_directory_uri() . '/img/specialise-in1.png';?><!--" class="responsive-element" alt="special-image">-->
        <?php
          $img_html = '<img src="'. get_template_directory_uri() . '/img/specialise-in1.png" class="responsive-element" alt="special-image">';
          $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
          echo $img_html;
        ?>
        <div class="specialise-content">
            <h2 class="text-center mt-5"><?php pl_e( 'We Are Specialised In' ); ?></h2>
            <div class="container-fluid specialise-slider">
                <div class="specialise">
                    <?php if ( !$detect->isMobile() || !$detect->isTablet() ): ?>
                      <div class="col-10 col-sm-8 col-sm-6 col-md-5 col-lg-4 col-xl-3 col-xl-3 specialise-image d-none">
<!--                          <img src="--><?php //echo get_template_directory_uri() . '/img/online-shopping.png' ?><!--" class="img-fluid" alt="online shopping">-->
                          <?php
                            $img_html = '<img src="'. get_template_directory_uri() . '/img/online-shopping.png" class="img-fluid" alt="online shopping">';
                            $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
                            echo $img_html;
                          ?>
                      </div>
                    <?php endif; ?>
                    <div class="col-10 col-sm-8 col-md-6 specialise-desc p-3">
                        <h3><?php pl_e( 'Working remotely' ); ?></h3>
                        <p><?php pl_e( 'Our presence around the world makes us aware of all the modern technologies that exist in the world' ); ?></p>
                    </div>
                </div>
                <div class="specialise">
                    <?php if ( !$detect->isMobile() || !$detect->isTablet() ): ?>
                      <div class="col-10 col-sm-8 col-sm-6 col-md-5 col-lg-4 col-xl-3 specialise-image d-none">
<!--                          <img src="--><?php //echo get_template_directory_uri() . '/img/special-commerce.png' ?><!--" class="img-fluid" alt="special commerce">-->
	                      <?php
		                      $img_html = '<img src="'. get_template_directory_uri() . '/img/special-commerce.png" class="img-fluid" alt="special commerce">';
		                      $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
		                      echo $img_html;
	                      ?>
                      </div>
                    <?php endif; ?>
                    <div class="col-10 col-sm-8 col-md-6 specialise-desc p-3">
                        <h3><?php pl_e( 'Great experience in e-commerce' ); ?></h3>
                        <p><?php pl_e( 'The multiplicity of experiences and openness to all that is new will be the reason for achieving the best results' ); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End We Are Specialised Section-->

    <!--Start About Us Section-->
    <div id="about-us" class="about-us position-relative text-white">
<!--          <img src="--><?php //echo get_template_directory_uri() . '/img/bg-about-us-rtl.png'?><!--" class="responsive-element" alt="special-image">-->
	        <?php
	          if ( is_rtl() ):
              $img_html = '<img src="'. get_template_directory_uri() . '/img/bg-about-us-rtl.png" class="responsive-element" alt="special-image">';
              $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
              echo $img_html;
            else:
	            $img_html = '<img src="'. get_template_directory_uri() . '/img/bg-about-us.png" class="responsive-element" alt="special-image">';
	            $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
	            echo $img_html;
            endif;
	        ?>
<!--          <img src="--><?php //echo get_template_directory_uri() . '/img/bg-about-us.png'?><!--" class="responsive-element" alt="special-image">-->
        <div class="about-us-body">
            <h2 class="text-center mt-5"><?php pl_e( 'About Us' ); ?></h2>
            <h3 class="col-4 col-lg-3"><?php pl_e( 'Think Smart' ); ?></h3>
            <div class="container-fluid about-us-slider position-absolute">
                <div class="col-12 col-sm-10 col-md-8 col-lg-7 about-us-content mx-auto">
                    <div class="about-us-text">
                        <p>
                            <span class="font-weight-bold"><?php pl_e( 'Yes Soft' ); ?> </span><?php pl_e( 'is an ecommerce specialized software company located in Berlin/ Germany. It adopts open-source methodology. All its projects’ codes are available on Github.
                            Its team consists of developers, designers, content makers, testers and team managers. They work together remotely and results are always great.' ); ?>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="language-circle">
                                <h3>Mysql</h3>
                                <span>15%</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="language-circle">
                                <h3>Php</h3>
                                <span>30%</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="language-circle">
                                <h3>Java</h3>
                                <span>25%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-8 col-lg-7 about-us-content mx-auto">
                    <div class="about-us-text">
                        <p><?php pl_e( 'They use up-to-date technologies to bring your imaginary requirements to reality.
                            Are you still hesitated about the company? Why don\'t you check out ISHTAR ART to evaluate everything by yourself' ); ?>?</p>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="language-circle">
                                <h3>Symfony</h3>
                                <span>25%</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="language-circle">
                                <h3>Angular</h3>
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="language-circle">
                                <h3>TypeScript</h3>
                                <span>15%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End About Us Section-->

    <!--Start Client Say Section-->
<!--    <div class="client-say py-5">-->
<!--        <div class="container-fluid">-->
<!--            <h2 class="text-center">Our Client Say</h2>-->
<!--            <hr class="w-25">-->
<!--            <div class="client-say-slider mb-0">-->
<!--                <div class="col-12 col-sm-11 col-sm-9 col-md-8 offset-sm-2 client">-->
<!--                    <div class="row">-->
<!--                        <div class="col-12 col-sm-4">-->
<!--                            <div class="client-image text-center">-->
<!--                                <img class="rounded-circle mx-auto" src="--><?php //echo get_template_directory_uri() . '/img/default-avatar.jpg'?><!--" alt="codeway" />-->
<!--                                <h5 class="client-name font-weight-bold mt-2 mt-lg-3">Waleed Alhamoud<a href="https://www.linkedin.com/in/walid-alhamoud-06b1b9157"><i class="fab fa-linkedin fa-fw"></i></a></h5>-->
<!--                                <p class="text-secondary">CEO Of Notebook Doctor</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-12 col-sm-8 client-content">-->
<!--                            <p class="lead text-secondary pt-3 pt-md-4 pt-lg-5">-->
<!--                                Through my long market experience I found with Yes Soft a lot of variation. Punctuality, excellent performance and great communication are what sets them apart. I'm so happy to be one of your clients-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!--End Customer Section-->

    <!--Start Our Team Section-->
    <div class="our-team py-5">
        <?php
//        global $wpdb;
//        $query = "SELECT * from $wpdb->users";
//        $author_ids = $wpdb->get_results($query);
//        $users = array();
//        foreach($author_ids as $author) {
//	        // Get user data
//	        $curauth = get_userdata($author->ID);
//	        // Get link to author page
//	        $link = 'author/' . $curauth->user_nicename;
//	        $name = $curauth->display_name;
//	        $users[$link] = $name;
//        }
//        asort($users);
//        ?>
<!--        <ol>-->
<!--            // Loop through each author-->
<!--		    --><?php //foreach($users as $link => $name) : ?>
<!--                <li>-->
<!--                    <a href="--><?php //echo $link; ?><!--" title="--><?php //echo $name; ?><!--">-->
<!--					    --><?php //echo $name; ?>
<!--                    </a>-->
<!--                </li>-->
<!--		    --><?php //endforeach; ?>
<!--        </ol>-->

<!--        ?>-->
        <div class="container-fluid">
            <h2 class="text-center mb-4"><?php pl_e( 'Our Team' ); ?></h2>
            <div class="our-team-slider">
                <div class="col-12 col-sm-11 col-lg-9 col-xl-8 offset-sm-1 offset-md-2 team">
                    <div class="row">
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="team-member position-relative px-3 px-lg-4 py-5">
<!--                                <img src="--><?php //echo get_template_directory_uri() . '/img/team/talal-danoun.jpg' ?><!--" class="rounded-circle" alt="Talal Image">-->
                                 <?php
	                                 $img_html = '<img src="'. get_template_directory_uri() . '/img/team/talal-danoun.jpg" class="rounded-circle" alt="Talal Danoun">';
	                                 $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
	                                 echo $img_html;
                                 ?>
                                <div class="team-member-body">
                                    <h5 class="mb-md-0 mb-lg-1"><a><?php pl_e( 'Talal Danoun' ); ?></a></h5>
                                    <p class="text-secondary d-inline-block"><?php pl_e( 'Web Developer' ); ?></p>
                                    <a href="https://www.linkedin.com/in/talal-danoon-38945b154"><i class="fab fa-linkedin-in fa-fw"></i></a>
                                    <a href="https://github.com/tald7344"><i class="fab fa-github fa-fw"></i></a>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-10 pl-sm-1 pr-0 pr-sm-1 px-md-3">
                                                <p class="text-secondary">
	                                                <?php pl_e( 'Leave your comfort zone and you’ll reach the impossible' ); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="team-member position-relative py-5 px-3 px-lg-4 ">
<!--                                <img src="--><?php //echo get_template_directory_uri() . '/img/team/hammam-zarefa.jpg' ?><!--" class="rounded-circle" alt="Hammam Zarefa">-->
                                <?php
                                  $img_html = '<img src="'. get_template_directory_uri() . '/img/team/hammam-zarefa.jpg" class="rounded-circle" alt="Hammam Zarefa">';
                                  $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
                                  echo $img_html;
                                ?>
                                <div class="team-member-body">
                                    <h5 class="mb-md-0 mb-lg-1"><a><?php pl_e( 'Hammam Zarefa' ); ?></a></h5>
                                    <p class="text-secondary d-inline-block"><?php pl_e( 'Backend Developer' ); ?></p>
                                    <a href="https://www.linkedin.com/in/hammam-zarefa-806721190"><i class="fab fa-linkedin-in fa-fw"></i></a>
                                    <a href="https://github.com/HammamZarefa"><i class="fab fa-github fa-fw"></i></a>

                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-10 pl-sm-1 pr-0 pr-sm-1 px-md-3">
                                                <p class="text-secondary">
	                                                <?php pl_e( 'Never dream of success, work for it' ); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-11 col-lg-9 col-xl-8 offset-sm-1 offset-md-2 team">
                    <div class="row">
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="team-member position-relative py-5 px-3 px-lg-4 ">
<!--                                <img src="--><?php //echo get_template_directory_uri() . '/img/team/kenan-hussein.jpg'?><!--" class="rounded-circle" alt="Kenan Hussein">-->
                                <?php
                                  $img_html = '<img src="'. get_template_directory_uri() . '/img/team/kenan-hussein.jpg" class="rounded-circle" alt="Kenan Hussein">';
                                  $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
                                  echo $img_html;
                                ?>
                                <div class="team-member-body">
                                    <h5 class="mb-md-0 mb-lg-1"><a><?php pl_e( 'Kenan Hussein' ); ?></a></h5>
                                    <p class="text-secondary d-inline-block"><?php pl_e( 'Web Developer' ) ?></p>
                                    <a href="https://www.linkedin.com/in/kenan-hussein"><i class="fab fa-linkedin-in fa-fw"></i></a>
                                    <a href="https://github.com/Kenan-Hussein"><i class="fab fa-github fa-fw"></i></a>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-10 pl-sm-1 pr-0 pr-sm-1 px-md-3">
                                              <p class="text-secondary"><?php pl_e( 'Think a lot, code a few, Keep it simple, keep it stupid' ); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Qusai Ali-->
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="team-member position-relative py-5 px-3 px-lg-4 ">
<!--                                <img src="--><?php //echo get_template_directory_uri() . '/img/team/qusai-ali.jpg'?><!--" class="rounded-circle" alt="Qusai Ali">-->
                                <?php
                                  $img_html = '<img src="'. get_template_directory_uri() . '/img/team/qusai-ali.jpg" class="rounded-circle" alt="Qusai Ali">';
                                  $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
                                  echo $img_html;
                                ?>
                                <div class="team-member-body">
                                    <h5 class="mb-md-0 mb-lg-1"><a><?php pl_e( 'Qusai Ali' ); ?></a></h5>
                                    <p class="text-secondary d-inline-block"><?php pl_e( 'Front End Developer' ) ?></p>
                                    <a href="https://www.linkedin.com/in/qusai-ali-it/"><i class="fab fa-linkedin-in fa-fw"></i></a>
                                    <a href="https://github.com/qusai-ali/IT"><i class="fab fa-github fa-fw"></i></a>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-10 pl-sm-1 pr-0 pr-sm-1 px-md-3">
                                                <p class="text-secondary"><?php pl_e( 'Work smarter, not harder' ); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-11 col-lg-9 col-xl-8 offset-sm-1 offset-md-2 team">
                    <div class="row">
                        <!--Osama Alhamoud-->
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="team-member position-relative py-5 px-3 px-lg-4 ">
<!--                                <img src="--><?php //echo get_template_directory_uri() . '/img/team/osama-alhamoud.jpg' ?><!--" class="rounded-circle" alt="Osama Alhamoud">-->
                                <?php
                                  $img_html = '<img src="'. get_template_directory_uri() . '/img/team/osama-alhamoud.jpg" class="rounded-circle" alt="Osama Alhamoud">';
                                  $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
                                  echo $img_html;
                                ?>
                                <div class="team-member-body">
                                    <h5 class="mb-md-0 mb-lg-1"><a><?php pl_e( 'Osama Alhamoud' ); ?></a></h5>
                                    <p class="text-secondary d-inline-block"><?php pl_e( 'Manager' ) ?></p>
                                    <a href="https://www.linkedin.com/in/osama-alhamoud"><i class="fab fa-linkedin-in fa-fw"></i></a>
                                    <a href="https://github.com/osama-alhamoud"><i class="fab fa-github fa-fw"></i></a>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-10 pl-sm-1 pr-0 pr-sm-1 px-md-3">
                                                <p class="text-secondary"><?php pl_e( 'Open your eyes and say Yes' ); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Mohammad Al Kalaleeb-->
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="team-member position-relative py-5 px-3 px-lg-4 ">
<!--                                <img src="--><?php //echo get_template_directory_uri() . '/img/team/mohammad-al-kalaleeb.jpg' ?><!--" class="rounded-circle" alt="Mohammad Al Kalaleeb">-->
                                <?php
                                  $img_html = '<img src="'. get_template_directory_uri() . '/img/team/mohammad-al-kalaleeb.jpg" class="rounded-circle" alt="Mohammad Al Kalaleeb">';
                                  $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
                                  echo $img_html;
                                ?>
                                <div class="team-member-body">
                                    <h5 class="mb-md-0 mb-lg-1"><a><?php pl_e( 'Mohammad Al Kalaleeb' ); ?></a></h5>
                                    <p class="text-secondary d-inline-block"><?php pl_e( 'Web Developer' ) ?></p>
                                    <a href="https://www.linkedin.com/in/mohammad-al-kalaleeb-6ab521140"><i class="fab fa-linkedin-in fa-fw"></i></a>
                                    <a href="https://github.com/mickSawy3r"><i class="fab fa-github fa-fw"></i></a>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-10 pl-sm-1 pr-0 pr-sm-1 px-md-3">
                                                <p class="text-secondary"><?php pl_e( 'Success is a deep passion, long hours of work, and a lifestyle' ); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-11 col-lg-9 col-xl-8 offset-sm-1 offset-md-2 team">
                    <div class="row">
                        <!--Bassel Al-Salloum-->
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="team-member position-relative py-5 px-3 px-lg-4 ">
<!--                                <img src="--><?php //echo get_template_directory_uri() . '/img/team/basel-sallom.jpg' ?><!--" class="rounded-circle" alt="Bassel Al-Salloum">-->
                                <?php
                                  $img_html = '<img src="'. get_template_directory_uri() . '/img/team/basel-sallom.jpg" class="rounded-circle" alt="Bassel Al-Salloum">';
                                  $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
                                  echo $img_html;
                                ?>
                                <div class="team-member-body">
                                    <h5 class="mb-md-0 mb-lg-1"><a><?php pl_e( 'Bassel Al-Salloum' ); ?></a></h5>
                                    <p class="text-secondary d-inline-block"><?php pl_e( 'Graphic Designer' ) ?></p>
                                    <a href="https://www.linkedin.com/in/basel-sy-851910196/ "><i class="fab fa-linkedin-in fa-fw"></i></a>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-10 pl-sm-1 pr-0 pr-sm-1 px-md-3">
                                                <p class="text-secondary"><?php pl_e( 'It\'s not only a style .. it\'s an attitude era' ); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Mahmoud Aldiek -->
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="team-member position-relative py-5 px-3 px-lg-4 ">
<!--                                <img src="--><?php //echo get_template_directory_uri() . '/img/team/mahmoud.jpg' ?><!--" class="rounded-circle" alt="Mahmoud Aldiek">-->
	                            <?php
		                            $img_html = '<img src="'. get_template_directory_uri() . '/img/team/mahmoud.jpg" class="rounded-circle" alt="Mahmoud Aldiek">';
		                            $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
		                            echo $img_html;
	                            ?>
                                <div class="team-member-body">
                                    <h5 class="mb-md-0 mb-lg-1"><a><?php pl_e( 'Mahmoud Aldiek' ); ?></a></h5>
                                    <p class="text-secondary d-inline-block"><?php pl_e( 'Emarketer & Content Creator' ) ?></p>
                                    <a href="https://www.linkedin.com/in/mahmoud-aldiek-74a919196"><i class="fab fa-linkedin-in fa-fw"></i></a>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-10 pl-sm-1 pr-0 pr-sm-1 px-md-3">
                                                <p class="text-secondary"><?php pl_e( 'If you want to be special, you have to be ambitious first' ); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-11 col-lg-9 col-xl-8 offset-sm-1 offset-md-2 team">
                    <div class="row">
                        <!--Mujeeba Haj Najeeb-->
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="team-member position-relative py-5 px-3 px-lg-4 ">
<!--                                <img src="--><?php //echo get_template_directory_uri() . '/img/team/mujeeba-haj-najeeb.jpg' ?><!--" class="rounded-circle" alt="Mujeeba Haj Najeeb">-->
	                            <?php
		                            $img_html = '<img src="'. get_template_directory_uri() . '/img/team/mujeeba-haj-najeeb.jpg" class="rounded-circle" alt="Mujeeba Haj Najeeb">';
		                            $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
		                            echo $img_html;
	                            ?>
                                <div class="team-member-body">
                                    <h5 class="mb-md-0 mb-lg-1"><a><?php pl_e( 'Mujeeba Haj Najeeb' ); ?></a></h5>
                                    <p class="text-secondary d-inline-block"><?php pl_e( 'Scrum Master' ) ?></p>
                                    <a href="https://www.linkedin.com/in/mujeeba-haj-najeeb-327228161"><i class="fab fa-linkedin-in fa-fw"></i></a>
                                    <a href="https://github.com/Mujeeba-Haj-Najeeb "><i class="fab fa-github fa-fw"></i></a>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-10 pl-sm-1 pr-0 pr-sm-1 px-md-3">
                                                <p class="text-secondary"><?php pl_e( 'Dream big & work hard' ); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Hanan Al-Jarmakani-->
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="team-member position-relative py-5 px-3 px-lg-4 ">
<!--                                <img src="--><?php //echo get_template_directory_uri() . '/img/team/hanan.jpg' ?><!--" class="rounded-circle" alt="Hanan Aljarmakani">-->
	                            <?php
		                            $img_html = '<img src="'. get_template_directory_uri() . '/img/team/hanan.jpg" class="rounded-circle" alt="Hanan Aljarmakani">';
		                            $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
		                            echo $img_html;
	                            ?>
                                <div class="team-member-body">
                                    <h5 class="mb-md-0 mb-lg-1"><a><?php pl_e( 'Hanan Al-Jarmakani' ); ?></a></h5>
                                    <p class="text-secondary d-inline-block"><?php pl_e( 'UX / UI Designer' ) ?></p>
                                    <a href="https://www.linkedin.com/in/hanan-aljarmakani-6908b294/"><i class="fab fa-linkedin-in fa-fw"></i></a>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-10 pl-sm-1 pr-0 pr-sm-1 px-md-3">
                                                <p class="text-secondary"><?php pl_e( 'We are what we believe in. I believe in unlimited ideas ,  creative souls and unlimited passion I believe in unlimitedly' ); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-11 col-lg-9 col-xl-8 offset-sm-1 offset-md-2 team">
                    <div class="row">
                        <!--Nisreen Abu Zidan-->
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="team-member position-relative py-5 px-3 px-lg-4 ">
<!--                                <img src="--><?php //echo get_template_directory_uri() . '/img/team/nisreen-abu-zidan.jpg' ?><!--" class="rounded-circle" alt="Nisreen Abu Zidan">-->
	                            <?php
		                            $img_html = '<img src="'. get_template_directory_uri() . '/img/team/nisreen-abu-zidan.jpg" class="rounded-circle" alt="Nisreen Abu Zidan">';
		                            $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
		                            echo $img_html;
	                            ?>
                                <div class="team-member-body">
                                    <h5 class="mb-md-0 mb-lg-1"><a><?php pl_e( 'Nisreen Abu Zidan' ); ?></a></h5>
                                    <p class="text-secondary d-inline-block"><?php pl_e( 'Business Development Manager' ) ?></p>
                                    <a href="https://www.linkedin.com/in/nisreenabuzidan/"><i class="fab fa-linkedin-in fa-fw"></i></a>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-10 pl-sm-1 pr-0 pr-sm-1 px-md-3">
                                                <p class="text-secondary"><?php pl_e( 'Nothing is true and everything is permissible' ); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Ahmad Mustafa-->
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="team-member position-relative py-5 px-3 px-lg-4 ">
<!--                                <img src="--><?php //echo get_template_directory_uri() . '/img/team/ahmad-mustafa.jpg' ?><!--" class="rounded-circle" alt="Ahmad Mustafa">-->
                                <?php
                                  $img_html = '<img src="'. get_template_directory_uri() . '/img/team/ahmad-mustafa.jpg" class="rounded-circle" alt="Ahmad Mustafa">';
                                  $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
                                  echo $img_html;
                                ?>
                                <div class="team-member-body">
                                    <h5 class="mb-md-0 mb-lg-1"><a><?php pl_e( 'Ahmad Mustafa' ); ?></a></h5>
                                    <p class="text-secondary d-inline-block"><?php pl_e( 'E-Marketer' ) ?></p>
                                    <a href="https://www.linkedin.com/in/ahmadmustafa-business"><i class="fab fa-linkedin-in fa-fw"></i></a>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-10 pl-sm-1 pr-0 pr-sm-1 px-md-3">
                                                <p class="text-secondary"><?php pl_e( 'You never lose until you actually give up' ); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Our Team Section-->

    <!--Start Our Services Section-->
    <div class="our-home-services py-5">
        <div class="container">
            <h2 class="text-center mb-5"><?php pl_e( 'Our Services' ); ?></h2>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4 p-0 bg-graphic-section">
<!--                    <img class="custom-image-service text-left p-2" src="--><?php //echo get_template_directory_uri() . '/img/services-icons/graphic-design.png' ?><!--" alt="" />-->
                    <?php
                      $img_html = '<img src="'. get_template_directory_uri() . '/img/services-icons/graphic-design.png" class="custom-image-service text-left p-2" alt="graphic-design">';
                      $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
                      echo $img_html;
                    ?>
                    <h4 class="font-weight-bold text-right mr-3"><?php pl_e( 'Graphic Design' ); ?></h4>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 p-0 border border-info">
<!--                    <img class="custom-image-service text-left p-2" src="--><?php //echo get_template_directory_uri() . '/img/services-icons/development.png' ?><!--" alt="" />-->
	                <?php
		                $img_html = '<img src="'. get_template_directory_uri() . '/img/services-icons/development.png" class="custom-image-service text-left p-2" alt="development">';
		                $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
		                echo $img_html;
	                ?>
                    <h4 class="font-weight-bold text-right mr-3"><?php pl_e( 'Development' ); ?></h4>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 p-0 bg-maintenance-section">
<!--                    <img class="custom-image-service text-left p-2" src="--><?php //echo get_template_directory_uri() . '/img/services-icons/maintainance.png' ?><!--" alt="" />-->
	                <?php
		                $img_html = '<img src="'. get_template_directory_uri() . '/img/services-icons/maintainance.png" class="custom-image-service text-left p-2" alt="maintainance">';
		                $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
		                echo $img_html;
	                ?>
                    <h4 class="font-weight-bold text-right mr-3"><?php pl_e( 'Maintenance' ); ?></h4>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 p-0 border border-info">
<!--                    <img class="custom-image-service text-left p-2" src="--><?php //echo get_template_directory_uri() . '/img/services-icons/uiux-designer.png' ?><!--" alt="" />-->
	                <?php
		                $img_html = '<img src="'. get_template_directory_uri() . '/img/services-icons/uiux-designer.png" class="custom-image-service text-left p-2" alt="UI/UX designer">';
		                $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
		                echo $img_html;
	                ?>
                    <h4 class="font-weight-bold text-right mr-3"><?php pl_e( 'UX / UI Designer' ); ?></h4>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 p-0 bg-market-section">
<!--                    <img class="custom-image-service text-left p-2" src="--><?php //echo get_template_directory_uri() . '/img/services-icons/Digitalmarketing.png' ?><!--" alt="" />-->
	                <?php
		                $img_html = '<img src="'. get_template_directory_uri() . '/img/services-icons/Digitalmarketing.png" class="custom-image-service text-left p-2" alt="Digitalmarketing">';
		                $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
		                echo $img_html;
	                ?>
                    <h4 class="font-weight-bold text-right mr-3"><?php pl_e( 'Digital Market' ); ?></h4>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 p-0 border border-info">
<!--                    <img class="custom-image-service text-left p-2" src="--><?php //echo get_template_directory_uri() . '/img/services-icons/project-managment.png' ?><!--" alt="" />-->
                    <?php
                      $img_html = '<img src="'. get_template_directory_uri() . '/img/services-icons/project-managment.png" class="custom-image-service text-left p-2" alt="Project Managment">';
                      $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
                      echo $img_html;
                    ?>
                    <h4 class="font-weight-bold text-right mr-3"><?php pl_e( 'Project Managment' ); ?></h4>
                </div>
            </div>
        </div>
    </div>
    <!--End Our Clients Section-->


    <!--Start Our Clients Section-->
<!--    <div class="our-clients py-5">-->
<!--        <div class="container">-->
<!--            <h2 class="text-center mb-5">Our Client</h2>-->
<!--            <div class="row text-center">-->
<!--                <div class="col-6 col-sm-3 mx-auto">-->
<!--                    <img src="--><?php //echo get_template_directory_uri() . '/img/doctor-notebook.png'?><!--" class="img-fluid" alt="Doctor Notebook">-->
<!--                </div>-->
<!--                <div class="col-6 col-sm-3 mx-auto">-->
<!--                    <img src="--><?php //echo get_template_directory_uri() . '/img/Agora-logo-01.png'?><!--" class="img-fluid" alt="Doctor Notebook">-->
<!--                </div>-->
<!--                <div class="col-6 col-sm-3">-->
<!--                    <h4>Clients Three</h4>-->
<!--                </div>-->
<!--                <div class="col-6 col-sm-3">-->
<!--                    <h4>Clients Four</h4>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!--End Our Clients Section-->
    <div class="newsletter-section py-5">
        <div class="container">
            <div class="col-12 col-sm-10 col-md-8 mx-auto">
                <?php
                // check if This side bar with id we insert is active
                if (is_active_sidebar('main-sidebar')) {
                    // fetch this side bar
                    dynamic_sidebar('main-sidebar');
                }
                ?>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>
