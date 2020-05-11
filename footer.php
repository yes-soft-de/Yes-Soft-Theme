	<!--Start Footer-->
	<div class="footer text-center text-white pt-4" id="footer">
		<div class="container">
            <!--Brand-->
            <div class="col-12 flex-column brand pb-2 mb-5">
                <img src="<?php echo get_template_directory_uri() . '/img/logo.svg'?>" class="img-fluid" alt="Yes Soft Logo">
            </div>
            <div class="row">
                <div class="col-12 col-sm-4">
                    <i class="fas fa-map-marker-alt fa-2x mb-3"></i>
                    <h6><?php pl_e( 'Address' ); ?></h6>
                    <p><?php pl_e( 'Deutschland - Berlin 10827' ); ?></p>
                </div>
                <hr class="col-6 bg-white mb-3 mt-1 d-sm-none">
                <div class="col-12 col-sm-4 border border-top-0 border-bottom-0 border-white footer-phone">
                    <i class="fas fa-phone fa-fw fa-2x mb-3"></i>
                    <h6><?php pl_e( 'Berlin Phone' ); ?></h6>
                    <p>+491633733146</p>
                </div>
                <hr class="col-6 bg-white mb-3 mt-1 d-sm-none">
                <div class="col-12 col-sm-4">
                    <i class="fas fa-envelope fa-fw fa-2x mb-3"></i>
                    <h6><?php pl_e( 'Email' ); ?></h6>
                    <p>info@yes-soft.de</p>
                </div>
                <hr class="col-12 bg-white mt-5 mb-0">
                <!-- Footer Menu-->
                <div class="col-8 col-md-6 footer-menu text-center mx-auto py-2">
                    <div class="row">
                        <div class="col-12 col-sm-4 align-self-center"><a href="<?php echo get_site_url() . '/privacy-policy'?>"><?php pl_e( 'Legal Information' ); ?></a></div>
                        <div class="col-12 col-sm-4 align-self-center"><a href="<?php echo get_site_url() . '/privacy-policy'?>"><?php pl_e( 'Privacy' ); ?></a></div>
                        <div class="col-12 col-sm-4 align-self-center"><a id="about_us" href="<?php echo get_site_url() . '/#about-us'?>"><?php pl_e( 'About Us' ); ?></a></div>
                    </div>
                </div>
                <hr class="col-12 bg-white mb-4 mt-0">
                <div class="col-12">
                    <div class="social-media">
                        <ul class="list-unstyled">
                            <li><a target="_blank" href="https://www.facebook.com/Yes-soft-328738448051690"><i class="fab fa-facebook-f fa-fw fa-2x"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/company/yes-soft"><i class="fab fa-linkedin-in fa-fw fa-2x"></i></a></li>
                            <li><a target="_blank" href="https://api.whatsapp.com/send?phone=96171575052" alt="whatsapp"><i class="fab fa-whatsapp fa-fw fa-2x"></i></a></li>
                            <li><a target="_blank" href="https://www.twitter.com/yessoft0"><i class="fab fa-twitter fa-fw fa-2x"></i></a></li>
                            <li><a target="_blank" href="https://github.com/yes-soft-de/"><i class="fab fa-github fa-fw fa-2x"></i></a></li>
                        </ul>
                    </div>
                </div>
			</div>
		</div>
	</div>
    <div class="bg-dark text-white text-center p-2">
	    <?php pl_e( 'Copyright' ); ?> &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - <?php pl_e( 'All right reserved' ); ?>. <br class="d-md-none">
	    <?php pl_e( 'Implemented By' ); ?> <a href=""><?php pl_e( 'Yes Soft Team' ); ?></a>.
    </div>
	<!--End Footer-->
	<?php wp_footer(); ?>
</body>
</html>
