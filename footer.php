	<!--Start Footer-->
	<div class="footer <?php if ( ! is_front_page() ) { echo 'bg-light';}?> text-center mt-4" id="footer">
		<div class="container-fluid">
			<div class="row">
				<!--Brand-->
				<div class="col-lg-3 col-md-12 col-sm-12 flex-column brand">
					<img src="<?php echo get_template_directory_uri() . '/img/logo.svg'?>" alt="">

				</div>
				<!--Quick Access + Website Map-->
				<div class="col-lg-5 col-md-6 col-sm-12 quick-access">
					<ul>
						<!-- <li><a href="">Contact</a></li> -->
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Legal Information</a></li>
						<!-- <li><a href="">Site Map</a></li> -->
					</ul>
					<p>
					Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - All right reserved. <br>
						Power By <a href="">Yes Soft Team</a>.
					</p>
				</div>
				<!--Social Media-->
				<div class="col-lg-4 col-md-6 col-sm-12 social-media">
					<div class="row">
						<div class="col-12 footer_contact_us mb-3">
							<div class="pl-2">Email : <span>info@yes-soft.de</span></div>
							<div>Phone : <span>+491633733146</span></div>
						</div>
						<div class="col-12">
							<ul>
								<li><a href="https://www.facebook.com/Yes-soft-328738448051690"><i class="fab fa-facebook-f fa-fw"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li><a href="https://api.whatsapp.com/send?phone=96171575052"><i class="fab fa-whatsapp fa-fw"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li><a href="https://github.com/yes-soft-de/"><i class="fab fa-github fa-fw"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End Footer-->
	<?php wp_footer(); ?>
</body>
</html>