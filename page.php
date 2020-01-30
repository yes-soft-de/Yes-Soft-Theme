<!--This Page Is For Services Page-->
<?php get_header() ?>

<!--Start About Us Separate Page-->
<div class="our-services position-relative">
    <img src="<?php echo get_template_directory_uri() . '/img/about-us-separate-background.png'; ?>" class="d-block d-sm-none d-md-block responsive-element position-absolute" >
    <img src="<?php echo get_template_directory_uri() . '/img/mobile-about-us-separate-background.png'; ?>" class="d-none d-sm-block d-md-none responsive-element position-absolute" >
    <div class="position-relative">
        <div class="services-title">
            <div class="container">
                <h3 class="text-center mb-5">Services We Provide</h3>
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4"><h4 class="text-center font-weight-bolder mb-4"><a href="#e-commerce"># E-Commerce Service</a></h4></div>
                    <div class="col-12 col-sm-6 col-lg-4"><h4 class="text-center font-weight-bolder mb-4"><a href="#e-market"># E-Market Service</a></h4></div>
                    <div class="col-12 col-sm-6 col-lg-4"><h4 class="text-center font-weight-bolder mb-4"><a href="#android-app"># Android App Development</a></h4></div>
                    <div class="col-12 col-sm-6 col-lg-4"><h4 class="text-center mb-4"><a href=""># Remote Maintenance</a></h4></div>
<!--                    <div class="col-4"><a href=""></a></div>-->
                </div>
            </div>
        </div>
        <div id="e-commerce" class="ecommerce-section text-center py-5">
            <div class="container">
                <h3 class="text-left font-weight-bold my-5">E-Commerce :</h3>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <a href="<?php echo get_site_url() . '/presta-shop'?>">
                            <div class="card mb-3">
                                <img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/services/presta-shop.jpg'?>" alt="Card image cap">
                                <div class="card-body">
                                    <h3 class="card-title">PrestaShop</h3>
                                    <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at facere inventore mollitia, possimus quia tempore voluptatem?</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <a href="<?php echo get_site_url() . '/magento-service'?>">
                            <div class="card mb-3">
                                <img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/services/magento.jpg'?>" alt="Card image cap">
                                <div class="card-body">
                                    <h3 class="card-title">Magento</h3>
                                    <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at facere inventore mollitia, possimus quia tempore voluptatem?</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <a href="<?php echo get_site_url() . '/presta-shop'?>">
                            <div class="card mb-3">
                                <img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/services/presta-shop-2.jpg'?>" alt="Card image cap">
                                <div class="card-body">
                                    <h3 class="card-title">PrestaShop</h3>
                                    <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at facere inventore mollitia, possimus quia tempore voluptatem?</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="e-market" class="market-section text-center py-5">
            <div class="container">
                <h3 class="text-left font-weight-bold my-5">E-Market :</h3>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <a href="<?php echo get_site_url() . '/presta-shop'?>">
                            <div class="card mb-3">
                                <img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/services/magento.jpg'?>" alt="Card image cap">
                                <div class="card-body">
                                    <h3 class="card-title">Magento</h3>
                                    <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at facere inventore mollitia, possimus quia tempore voluptatem?</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <a href="<?php echo get_site_url() . '/presta-shop'?>">
                            <div class="card mb-3">
                                <img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/services/website-test.png'?>" alt="Card image cap">
                                <div class="card-body">
                                    <h3 class="card-title">Magento</h3>
                                    <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at facere inventore mollitia, possimus quia tempore voluptatem?</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <a href="<?php echo get_site_url() . '/presta-shop'?>">
                            <div class="card mb-3">
                                <img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/services/remote-maintenance.png'?>" alt="Card image cap">
                                <div class="card-body">
                                    <h3 class="card-title">Magento</h3>
                                    <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at facere inventore mollitia, possimus quia tempore voluptatem?</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="android-app" class="android-app-section text-center py-5">
            <div class="container">
                <h3 class="text-left font-weight-bold my-5">Android App :</h3>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <a href="<?php echo get_site_url() . '/presta-shop'?>">
                            <div class="card mb-3">
                                <img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/services/quality-e-commerce.jpg'?>" alt="Card image cap">
                                <div class="card-body">
                                    <h3 class="card-title">Magento</h3>
                                    <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at facere inventore mollitia, possimus quia tempore voluptatem?</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <a href="<?php echo get_site_url() . '/presta-shop'?>">
                            <div class="card mb-3">
                                <img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/services/flayer-service.png'?>" alt="Card image cap">
                                <div class="card-body">
                                    <h3 class="card-title">Magento</h3>
                                    <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at facere inventore mollitia, possimus quia tempore voluptatem?</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <a href="<?php echo get_site_url() . '/presta-shop'?>">
                            <div class="card mb-3">
                                <img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/services/business-card-design.png'?>" alt="Card image cap">
                                <div class="card-body">
                                    <h3 class="card-title">Magento</h3>
                                    <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at facere inventore mollitia, possimus quia tempore voluptatem?</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div> <!--.about-us-separate-page-->
<!--End About Us Separate Page-->


<?php get_footer(); ?>
