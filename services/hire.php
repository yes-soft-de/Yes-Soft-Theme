<?php /* Template Name: hireService */?>

<?php get_header() ?>

<!--STart Our Posts Page-->
<div class="our-posts our-services hire-service py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="post p-3">
                    <h4 class="text-center mb-1"><?php pl_e( 'We are Hiring' ); ?></h4>
                    <p class="lead text-center">
                        <?php pl_e( 'Be one of our team Programmers front end / back end' ); ?>
                        <span><?php pl_e( 'Required' ); ?></span>
                    </p>
                    <div class="row">
                        <div class="col-12">
                            <div class="hire-image-background position-relative">
                                <img src="<?php echo get_template_directory_uri() . '/img/services/hire-background.png' ?>" class="responsive-element position-absolute" alt="Hire Image" />
<!--                                <div class="row">-->
<!--                                    <div class="col-6">-->
<!--                                        <p class="text-center">-->
<!--                                            Be one of our team<br>-->
<!--                                            Programmars front end / back<br>-->
<!--                                            end<br>-->
<!--                                            <span>Required</span>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                    <div class="col-6"></div>-->
<!--                                </div>-->
                            </div>
                        </div>
                        <div class="col-12">
                            <p class="hire-content mb-0 mt-5 text-center">
                                <?php pl_e( 'We are looking for the best developers and emarketers to work with us at Yes Soft.
                                We work on open source projects that contain ecommerce, emarketing, websites and apps.
                                Work is freelance, totally online and continuous practice.' ); ?>
                                <?php pl_e( 'For interested people, send your CV to' ); ?>:<br>
                                <span class="email-to-hire"><?php pl_e( 'Email' ); ?>: Jobs@yes-soft.de</span>
                            </p>
                        </div>
                    </div>
                </div><!--.port-->
            </div>
        </div><!--.row-->
    </div>
</div>
<!--End Post Content Page-->
<?php get_footer(); ?>

