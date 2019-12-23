<!--This Page Is For Services Page-->
<?php get_header() ?>

    <!--STart Our Posts Page-->
    <div class="our-posts our-services pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="col-md-10 mx-auto pt-5">
                        <div class="row">
                            <div class="col-4 col-sm-3 col-md-2 mx-auto mb-3">
                                <img src="<?php echo get_template_directory_uri() . '/img/serviceBoard.jpg'?>" class="img-fluid" alt="">
                            </div>
                            <div class="col-12 col-sm-9 col-md-10 align-self-center">
                                <p class="service-desc">
                                    At our company, we create digital solutions for businesses and companies of any size. We are a team of experienced developers, creators, designers and project managers you can rely on.
                                    <br />We provide:
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="post p-3">
                        <h4 class="text-center mb-4">Services we provide</h4>
                        <div class="row">
                            <div class="col-6 col-md-4">
                                <a href="<?php echo get_site_url() . '/e-commerce-service'?>">
                                    <div class="card mb-3">
                                        <img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/quality-e-commerce.jpg'?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">High Quality Scalable E-commerce Platform</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4">
                                <a href="<?php echo get_site_url() . '/business-card-service'?>">
                                    <div class="card mb-3">
                                        <img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/business-card-design.png'?>" alt="business card design">
                                        <div class="card-body">
                                            <h5 class="card-title">Business Card</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4">
                                <a href="<?php echo get_site_url() . '/flayer-design-service'?>">
                                    <div class="card mb-3">
                                        <img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/flayer-service.png'?>" alt="Flayer Service">
                                        <div class="card-body">
                                            <h5 class="card-title">Flayer Design</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4">
                                <a href="<?php echo get_site_url() . '/remote-maintenance-service'?>">
                                    <div class="card mb-3">
                                        <img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/website-test.png'?>" alt="Remote Maintenance">
                                        <div class="card-body">
                                            <h5 class="card-title">Remote Maintenance</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4">
                                <a href="<?php echo get_site_url() . '/website-testing-service'?>">
                                    <div class="card mb-3">
                                        <img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/programming-test.png'?>" alt="Website Test">
                                        <div class="card-body">
                                            <h5 class="card-title">Website Test</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>               
            </div>
        </div>
    </div>
    <!--End Post Content Page-->
<?php get_footer(); ?>
