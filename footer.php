	<!--Start Footer-->
	<div class="footer <?php if ( ! is_front_page() ) { echo 'bg-light';}?> text-center pt-4 mt-4" id="footer">
		<div class="container-fluid">
            <!--Brand-->
            <div class="col-12 flex-column brand pb-2 mb-5">
                <img src="<?php echo get_template_directory_uri() . '/img/logo.svg'?>" alt="Yes Soft Logo">
            </div>
			<div class="row">
                <!--Quick Access + Website Map-->
                <div class="col-12 col-md-6 quick-access mb-4">
                    <h5 class="font-weight-bold">Site Map :</h5>
                    <ul>
                        <li><a href="<?php echo get_site_url()?>">Home</a></li>
                        <li><a href="<?php echo get_site_url() . '/blog'?>">Blog</a></li>
                        <li><a href="<?php echo get_site_url() . '/services'?>">Services</a></li>
                    </ul>
                </div>
                <!--Social Media-->
                <div class="col-12 col-md-6 social-media">
                    <div class="row">
                        <h5 class="col-12 text-center font-weight-bold">Contact Us :</h5>
                        <div class="col-12 footer_contact_us mb-3">
                            <div><i class="fas fa-phone fa-fw"></i> Berlin Phone : <span>+491633733146</span></div>
                            <div><i class="fas fa-phone fa-fw"></i> Beirut <span class="text-success p-0">Whatsapp</span> : <span>+96171575052</span></div>
                        </div>
                        <div class="col-12">
                            <ul>
                                <li><a href="https://www.facebook.com/Yes-soft-328738448051690"><i class="fab fa-facebook-f fa-fw"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/yes-soft"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                                <li><a alt="whatsapp" href="https://api.whatsapp.com/send?phone=96171575052"><i class="fab fa-whatsapp fa-fw"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                                <li><a href="https://github.com/yes-soft-de/"><i class="fab fa-github fa-fw"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Footer Contact -->
                <div class="col-12 footer-contact mt-4">
                    <div class="container p-2">
                        <div class="row">
                            <div class="col"><i class="fas fa-phone fa-fw"></i> Berlin Phone : <span>+491633733146</span></div>
                            <div class="col"><i class="fas fa-envelope fa-fw"></i> Email : <span>info@yes-soft.de</span></div>
                        </div>
                    </div>
                </div>
                <!-- Footer Menu-->
                <div class="col-6 footer-menu text-center mx-auto py-4">
                    <div class="row">
                        <div class="col-12 col-sm-4"><a href="#">Legal Information</a></div>
                        <div class="col-12 col-sm-4"><a href="<?php echo get_site_url() . '/privacy-policy'?>">Privacy</a></div>
                        <div class="col-12 col-sm-4"><a href="<?php echo get_site_url() . '/#about-us'?>">About Us</a></div>
                    </div>
                </div>
			</div>
		</div>
	</div>
    <div class="bg-dark text-white text-center p-2">
        Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - All right reserved. <br class="d-md-none">
        Power By <a href="">Yes Soft Team</a>.
    </div>
	<!--End Footer-->
	<?php wp_footer(); ?>
</body>
</html>