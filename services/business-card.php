<?php /* Template Name: businessCard*/ ?>

<?php get_header() ?>


<div class="our-posts business-card e-commerce-service our-services py-5">
    <div class="container">
        <h1 class="col-12 col-sm-9 col-lg-7 col-xl-6 mx-auto text-center">Business Card</h1>
        <div class="post p-3 pb-4 bg-white mb-5">
            <hr class="mb-3 mt-1">
            <p class="general-desc mb-5">
                We will give you a unique design that makes your business card a transition point of your business and build a strong image of you as well.
                We want this service to be our first step to build a long-term business relationship with you. We offer these categories in this field:
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
                            Professional business card design.
                        </p>
                        <div class="row">
                            <div class="col-5 mb-1">
                                <strong>Delivery time: 2 Days </strong>
                            </div>
                            <div class="col-4 mb-1">
                                <strong>Revisions: 1 </strong>
                            </div>
                            <div class="col-3 text-center mb-1">
                                <strong>Cost: 10$</strong>
                            </div>
                            <div class="col-12 mt-3 mb-1"><p class="mb-0">Number of concepts: 1</p></div>
                            <div class="col-12 mt-3 mb-1"><p class="mb-0">Print ready</p></div>
                            <div class="col-12 mb-1"><p class="mb-0">Double-Sided</p></div>
                            <div class="col-12 d-none text-center mt-5">
                                <button type="button" class="btn">Continue With Basic</button>
                            </div>
                        </div>
                    </div>
                    <div class="standard">
                        <p>
                            Professional business card design +1
                        </p>
                        <div class="row">
                            <div class="col-5 mb-1">
                                <strong>Delivery time: 4 Days </strong>
                            </div>
                            <div class="col-4 mb-1">
                                <strong>Revisions: 2</strong>
                            </div>
                            <div class="col-3 text-center mb-1">
                                <strong>Cost: 20$</strong>
                            </div>
                            <div class="col-12 mt-3 mb-1"><p class="mb-0">Number of concepts: 2</p></div>
                            <div class="col-12 d-none text-center mt-5">
                                <button type="button" class="btn">Continue With Standard</button>
                            </div>
                        </div>
                    </div>
                    <div class="premium">
                        <p>
                            Professional business card design +2
                        </p>
                        <div class="row">
                            <div class="col-5 mb-1">
                                <strong>Delivery time: 5 Days </strong>
                            </div>
                            <div class="col-4 mb-1">
                                <strong>Revisions: 3 </strong>
                            </div>
                            <div class="col-3 text-center mb-1">
                                <strong>Cost: 50$</strong>
                            </div>
                            <div class="col-12 mt-3 mb-1"><p class="mb-0">Number of concepts: 3</p></div>
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


<?php get_footer() ?>
