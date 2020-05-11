<?php

	/* Template Name: Services */
  // This Page Is For Services Page

 get_header() ?>

<!--Start About Us Separate Page-->
<div class="our-services position-relative">
	<?php if ( !$detect->isMobile() ): ?>
    <img src="<?php echo get_template_directory_uri() . '/img/about-us-separate-background.png'; ?>" class="d-block d-sm-none d-md-block responsive-element position-absolute" >
  <?php endif; ?>
	<?php if ( $detect->isMobile() ): ?>
    <img src="<?php echo get_template_directory_uri() . '/img/mobile-about-us-separate-background.png'; ?>" class="d-none d-sm-block d-md-none responsive-element position-absolute" >
  <?php endif; ?>
	<div class="position-relative">
		<div class="services-title">
			<div class="container">
				<h3 class="text-center mb-5"><?php pl_e( 'Services We Provide' ); ?></h3>
				<div class="row">
					<div class="col-12 col-sm-6 col-lg-4"><h4 class="text-center font-weight-bolder"><a href="#e-commerce"># <?php pl_e( 'E-Commerce Service' ); ?></a></h4><hr class="w-50 mx-auto mt-2 mb-4"></div>
					<div class="col-12 col-sm-6 col-lg-4"><h4 class="text-center font-weight-bolder"><a href="#e-market"># <?php pl_e( 'E-Market Service' ); ?></a></h4><hr class="w-50 mx-auto mt-2 mb-4"></div>
					<!-- <div class="col-12 col-sm-6 col-lg-4"><h4 class="text-center font-weight-bolder mb-4"><a href="#android-app"># Android App Development</a></h4></div>
					<div class="col-12 col-sm-6 col-lg-4"><h4 class="text-center mb-4"><a href=""># Remote Maintenance</a></h4></div> -->
					<!--                    <div class="col-4"><a href=""></a></div>-->
				</div>
			</div>
		</div>
		<div id="e-commerce" class="ecommerce-section text-center pb-5">
			<div class="container">
				<h3 class="text-left font-weight-bold my-5"><?php pl_e( 'E-Commerce' ); ?> :</h3>
				<div class="row">
					<div class="col-12 col-sm-6 col-md-4 mb-4">
						<a href="<?php echo get_site_url() . '/presta-shop'?>">
							<div class="card mb-3">
								<img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/services/presta-shop.jpg'?>" alt="Card image cap">
								<div class="card-body">
									<h3 class="card-title"><?php pl_e( 'PrestaShop' ); ?></h3>
									<p class="card-text text-justify"><?php pl_e( 'What if we tell you that we are a Professional Custom Prestashop Development Company? And what if we offer Dedicated Custom Work Services?' ); ?><br /></p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-12 col-sm-6 col-md-4 mb-4">
						<a href="<?php echo get_site_url() . '/magento-service'?>">
							<div class="card mb-3">
								<img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/services/magento.jpg'?>" alt="Card image cap">
								<div class="card-body">
									<h3 class="card-title"><?php pl_e( 'Magento' ); ?></h3>
									<p class="card-text text-justify"><?php pl_e( 'If you are looking to lift your business into a whole new level, then It is important to know that the special secret behind the success of online businesses is E-commerce.' ); ?></p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-12 col-sm-6 col-md-4 mb-4">
						<a href="<?php echo get_site_url() . '/spryker-service'?>">
							<div class="card mb-3">
								<img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/services/spryker.png'?>" alt="Card image cap">
								<div class="card-body">
									<h3 class="card-title"><?php pl_e( 'Spryker' ); ?></h3>
									<p class="card-text text-justify"><?php pl_e( 'If you are thinking of developing a long-term professional e-commerce site, then It is important to know that the special secret behind the success of online businesses is e-commerce.' ); ?></p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-12 col-sm-6 col-md-4 mb-4">
						<a href="<?php echo get_site_url() . '/ishtar-service'?>">
							<div class="card mb-3">
								<img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/services/ishtar.jpg'?>" alt="Card image cap">
								<div class="card-body">
									<h3 class="card-title"><?php pl_e( 'Ishtar' ); ?></h3>
									<p class="card-text text-justify"><?php pl_e( 'we are one of the first companies that provide artist e-commerce stores, and above that, we are the leading company in this field.' ); ?></p>
								</div>
							</div>
						</a>
					</div>
          <div class="col-12 col-sm-6 col-md-4 mb-4">
            <a href="<?php echo get_site_url() . '/woocommerce-service'?>">
              <div class="card mb-3">
                <img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/services/woocommerce.png'?>" alt="Card image cap">
                <div class="card-body">
                  <h3 class="card-title"><?php pl_e( 'WooCommerce' ); ?></h3>
                  <p class="card-text text-justify"><?php pl_e( 'Do you have a wordpress website and you want to convert it to an ecommerce website?' ); ?></p>
                </div>
              </div>
            </a>
          </div>
				</div>
			</div>
		</div>

		<div id="e-market" class="market-section text-center py-5">
			<div class="container">
				<h3 class="text-left font-weight-bold my-5"><?php pl_e( 'Digital Marketing' ); ?> :</h3>
				<div class="row">
					<div class="col-12 col-sm-6 col-md-4 mb-4">
						<a href="<?php echo get_site_url() . '/seo-service'?>">
							<div class="card mb-3">
								<img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/services/seo.png'?>" alt="Card image cap">
								<div class="card-body">
									<h3 class="card-title"><?php pl_e( 'SEO' ); ?></h3>
									<p class="card-text text-justify"><?php pl_e( 'Everyone wants to be on the first rank of google search results, but not everyone deserves that.' ); ?></p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-12 col-sm-6 col-md-4 mb-4">
						<a href="<?php echo get_site_url() . '/social-media-marketing-service'?>">
							<div class="card mb-3">
								<img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/services/smm.jpg'?>" alt="Card image cap">
								<div class="card-body">
									<h3 class="card-title"><?php pl_e( 'Social Media Marketing Service' ); ?></h3>
									<p class="card-text text-justify"><?php pl_e( 'Remember when a TV ad about a new blender showed up that late Sunday night, and you said: “I have to buy this!”? Those days are gone. Well. Not exactly.' ); ?></p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-12 col-sm-6 col-md-4 mb-4">
						<a href="<?php echo get_site_url() . '/sem-service'?>">
							<div class="card mb-3">
								<img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/services/sem.jpg'?>" alt="Card image cap">
								<div class="card-body">
									<h3 class="card-title"><?php pl_e( 'SEM' ); ?></h3>
									<p class="card-text text-justify"><?php pl_e( 'Do you want to reach your most important audience members at the perfect moment, and be on top search results when they search for you?' ); ?></p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-12 col-sm-6 col-md-4 mb-4">
						<a href="<?php echo get_site_url() . '/full-package-service'?>">
							<div class="card mb-3">
								<img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/services/fullpackage.jpg'?>" alt="Card image cap">
								<div class="card-body">
									<h3 class="card-title"><?php pl_e( 'Full Package' ); ?></h3>
									<p class="card-text text-justify"><?php pl_e( 'You are in the right place, here is the best offer you can ever get in your business journey.' ); ?></p>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- <div id="android-app" class="android-app-section text-center py-5">
            <div class="container">
                <h3 class="text-left font-weight-bold my-5">Android App :</h3>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <a href="<?php // echo get_site_url() . '/presta-shop'?>">
                            <div class="card mb-3">
                                <img class="card-img-top" src="<?php // echo get_template_directory_uri() . '/img/services/quality-e-commerce.jpg'?>" alt="Card image cap">
                                <div class="card-body">
                                    <h3 class="card-title">Magento</h3>
                                    <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at facere inventore mollitia, possimus quia tempore voluptatem?</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <a href="<?php // echo get_site_url() . '/presta-shop'?>">
                            <div class="card mb-3">
                                <img class="card-img-top" src="<?php // echo get_template_directory_uri() . '/img/services/flayer-service.png'?>" alt="Card image cap">
                                <div class="card-body">
                                    <h3 class="card-title">Magento</h3>
                                    <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at facere inventore mollitia, possimus quia tempore voluptatem?</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <a href="<?php // echo get_site_url() . '/presta-shop'?>">
                            <div class="card mb-3">
                                <img class="card-img-top" src="<?php //  echo get_template_directory_uri() . '/img/services/business-card-design.png'?>" alt="Card image cap">
                                <div class="card-body">
                                    <h3 class="card-title">Magento</h3>
                                    <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at facere inventore mollitia, possimus quia tempore voluptatem?</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div> -->

	</div>
</div> <!--.about-us-separate-page-->
<!--End About Us Separate Page-->


<?php get_footer(); ?>
