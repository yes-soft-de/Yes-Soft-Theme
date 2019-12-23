<?php /* Template Name: remoteMaintenance */ ?>
<?php get_header() ?>

    <div class="our-posts remote-maintenance e-commerce-service our-services py-5">
        <div class="container">
            <h1 class="col-12 col-sm-9 col-lg-7 col-xl-6 mx-auto text-center">Remote maintenance</h1>
            <div class="post p-3 pb-4 bg-white mb-5">
                <hr class="mb-3 mt-1">
                <p class="general-desc mb-5">
                    Many are building websites. Few can test them quickly and efficiently to solve problems arise.
                    We are specialised in solving these sorts of problems:
                    ○	Browser compatibility problems.
                    ○	Responsive issues.
                    ○	Not working links and forms.
                    ○	Not removed indexing codes.
                    ○	Slow sites problem
                    We offer these categories in this field:
                </p>
                <div class="project">
                    <div id="project-4" class="project-list list mb-3">
                        <div class="row">
                            <div data-t="basic" class="col-4 selected project-item text-center align-self-center border p-3 border-dark border-left-0">
                                <p class="mb-0">Basic</p>
                            </div>
                            <div data-t="standard" class="col-4 project-item text-center align-self-center border p-3 border-dark">
                                <p class="mb-0">Standard</p>
                            </div>
                            <div data-t="premium" class="col-4 project-item text-center align-self-center border p-3 border-dark border-right-0">
                                <p class="mb-0">Premium</p>
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="basic">
                            <p>
                                Solving one problem and following up the performance after the solution.
                            </p>
                            <div class="row">
                                <div class="col-5 mb-1">
                                    <strong>Delivery time: 1 Days </strong>
                                </div>
                                <div class="col-3 text-center mb-1">
                                    <strong>Cost: 100$</strong>
                                </div>
                                <div class="col-12 d-none text-center mt-5">
                                    <button type="button" class="btn">Continue With Basic</button>
                                </div>
                            </div>
                        </div>
                        <div class="standard">
                            <p>
                                Responsive and speed issues.
                            </p>
                            <div class="row">
                                <div class="col-5 mb-1">
                                    <strong>Delivery time: 5 Days </strong>
                                </div>
                                <div class="col-4 mb-1">
                                    <strong>Revisions: 1</strong>
                                </div>
                                <div class="col-3 text-center mb-1">
                                    <strong>Cost: 250$</strong>
                                </div>
                                <div class="col-12 d-none text-center mt-5">
                                    <button type="button" class="btn">Continue With Standard</button>
                                </div>
                            </div>
                        </div>
                        <div class="premium">
                            <p>
                                make your website characterized by high performance and quality of appearance on all devices.
                            </p>
                            <div class="row">
                                <div class="col-5 mb-1">
                                    <strong>Delivery time: 15 Days </strong>
                                </div>
                                <div class="col-4 mb-1">
                                    <strong>Revisions: 2 </strong>
                                </div>
                                <div class="col-3 text-center mb-1">
                                    <strong>Cost: 990$</strong>
                                </div>
                                <div class="col-12 d-none text-center mt-5">
                                    <button type="button" class="btn">Continue With Premium</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="text-center my-4">Other Services</h4>
            <div class="row other-service">
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
                    <a href="<?php echo get_site_url() . '/flayer-design-service'?>">
                        <div class="card mb-3">
                            <img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/flayer-service.png'?>" alt="Flayer Service">
                            <div class="card-body text-center">
                                <h5 class="card-title">Flayer Design</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-4">
                    <a href="<?php echo get_site_url() . '/website-testing-service'?>">
                        <div class="card mb-3">
                            <img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/programming-test.png'?>" alt="Website Test">
                            <div class="card-body text-center">
                                <h5 class="card-title">Website Test</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php get_footer() ?>
