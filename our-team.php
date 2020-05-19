<?php
	/*
	    Template Name: Our Team Page
	 */
	get_header(); ?>

	<!--Start Our Team Separate Page-->
	<div class="our-team-separate-page py-5">
		<div class="container">
			<h1 class="text-center">So Nice To Meet You :)</h1>
			<h3 class="text-center">LET'S MEET OUR TEAM</h3>
				<div class="row management-box mb-4 mt-5">
					<h3 class="mb-3"><i class="fa fa-calendar fa-xl fa-fw"></i> Management</h3>
					<div class="col-12 col-md-10 mx-auto">
						<div class="employee-box manager-employee">
              <div class="row justify-content-center">
                <div class="col-12 col-sm-3">
	                <?php
		                $img_html = '<img src="'. get_template_directory_uri() . '/img/team/team-old-size/osama-alhamoud.jpg" class="rounded-circle" alt="Osama Alhamoud">';
		                $img_html = apply_filters( 'bj_lazy_load_html', $img_html );
		                echo $img_html;
	                ?>
                </div>
                <div class="col-12 col-sm-9 body-box">
                  <div class="body-header mb-4">
                    <div class="row">
                      <div class="col">
                        <p class="mb-0">Osama Alhamoud</p>
                        <p class="mb-0">Manager</p>
                      </div>
                      <div class="col"><a href="https://www.linkedin.com/in/osama-alhamoud"><i class="fab fa-linkedin fa-fw fa-lg"></i>LinkedIn</a></div>
                      <div class="col"><a href="https://github.com/osama-alhamoud"><i class="fab fa-github fa-fw fa-lg"></i>Github</a></div>
                      <div class="col">Yes Go</div>
                    </div>
                  </div>
                  <div class="body-content py-3 px-2">
                    <i class="fas fa-quote-right fa-lg text-info"></i>
                    Open your eyes and say Yes.
                  </div>
                </div>
              </div>
						</div><!--.employee-box-->
					</div><!--.col-12.mx-auto-->
				</div><!--.management-box-->
				<div class="our-team-box">
					<h3 class="mb-3"><i class="fa fa-box fa-fw fa-xl"></i>Our Team</h3>
					<div class="row">
						<div class="col-12 col-sm-6 mb-5 employee-box">
							<div class="row">
								<div class="col-12 col-md-4 text-center">
									<?php
										$img_html = '<img src="'. get_template_directory_uri() . '/img/team/team-old-size/talal-danoun.jpg" class="rounded-circle" alt="Talal Danoun">';
										$img_html = apply_filters( 'bj_lazy_load_html', $img_html );
										echo $img_html;
									?>
								</div>
								<div class="col-12 col-md-8 body-box">
									<div class="body-header mb-4">
										<p class="mb-0">Talal Danoun</p>
										<p class="mb-0">Web Developer</p>
									</div>
									<div class="body-content py-3 px-2 mb-2">
										<i class="fas fa-quote-right fa-lg text-info"></i>
										Leave your comfort zone and you’ll reach the impossible.
									</div>
									<div class="body-footer text-center">
										<div class="row">
											<div class="col"><a href="https://www.linkedin.com/in/talal-danoon-38945b154"><i class="fab fa-linkedin fa-fw fa-lg"></i>LinkedIn</a></div>
											<div class="col"><a href="https://github.com/tald7344"><i class="fab fa-github fa-fw fa-lg"></i>Github</a></div>
											<div class="col">Yes Go</div>
										</div>
									</div>
								</div>
							</div><!--.row-->
						</div><!--.col-12.col-md-6-->

						<div class="col-12 col-sm-6 mb-5 employee-box">
							<div class="row">
								<div class="col-12 col-md-4 text-center">
									<?php
										$img_html = '<img src="'. get_template_directory_uri() . '/img/team/team-old-size/qusai-ali.jpg" class="rounded-circle" alt="Qusai Ali">';
										$img_html = apply_filters( 'bj_lazy_load_html', $img_html );
										echo $img_html;
									?>
								</div>
								<div class="col-12 col-md-8 body-box">
									<div class="body-header mb-4">
										<p class="mb-0">Qusai Ali</p>
										<p class="mb-0">Front End Developer</p>
									</div>
									<div class="body-content py-3 px-2 mb-2">
										<i class="fas fa-quote-right fa-lg text-info"></i>
										Work smarter, not harder.
									</div>
									<div class="body-footer text-center">
										<div class="row">
											<div class="col"><a href="https://www.linkedin.com/in/qusai-ali-it/"><i class="fab fa-linkedin fa-fw fa-lg"></i>LinkedIn</a></div>
											<div class="col"><a href="https://github.com/qusai-ali/IT"><i class="fab fa-github fa-fw fa-lg"></i>Github</a></div>
											<div class="col">Yes Go</div>
										</div>
									</div>
								</div>
							</div><!--.row-->
						</div><!--.col-12.col-md-6-->

            <div class="col-12 col-sm-6 mb-5 employee-box">
              <div class="row">
                <div class="col-12 col-md-4 text-center">
									<?php
										$img_html = '<img src="'. get_template_directory_uri() . '/img/team/team-old-size/basel-sallom.jpg" class="rounded-circle" alt="Basel Sallom">';
										$img_html = apply_filters( 'bj_lazy_load_html', $img_html );
										echo $img_html;
									?>
                </div>
                <div class="col-12 col-md-8 body-box">
                  <div class="body-header mb-4">
                    <p class="mb-0">Bassel Al-Salloum</p>
                    <p class="mb-0">Graphic Designer</p>
                  </div>
                  <div class="body-content py-3 px-2 mb-2">
                    <i class="fas fa-quote-right fa-lg text-info"></i>
                    It's not only a style .. it's an attitude era.
                  </div>
                  <div class="body-footer text-center">
                    <div class="row">
                      <div class="col"><a href="https://www.linkedin.com/in/basel-sy-851910196/"><i class="fab fa-linkedin fa-fw fa-lg"></i>LinkedIn</a></div>
                      <div class="col">Yes Go</div>
                    </div>
                  </div>
                </div>
              </div><!--.row-->
            </div><!--.col-12.col-md-6-->

            <div class="col-12 col-sm-6 mb-5 employee-box">
              <div class="row">
                <div class="col-12 col-md-4 text-center">
									<?php
										$img_html = '<img src="'. get_template_directory_uri() . '/img/team/team-old-size/mahmoud.jpg" class="rounded-circle" alt="Qusai Ali">';
										$img_html = apply_filters( 'bj_lazy_load_html', $img_html );
										echo $img_html;
									?>
                </div>
                <div class="col-12 col-md-8 body-box">
                  <div class="body-header mb-4">
                    <p class="mb-0">Mahmoud Aldiek</p>
                    <p class="mb-0">Emarketer & Content Creator</p>
                  </div>
                  <div class="body-content py-3 px-2 mb-2">
                    <i class="fas fa-quote-right fa-lg text-info"></i>
                    If you want to be special, you have to be ambitious first.
                  </div>
                  <div class="body-footer text-center">
                    <div class="row">
                      <div class="col"><a href="https://www.linkedin.com/in/mahmoud-aldiek-74a919196"><i class="fab fa-linkedin fa-fw fa-lg"></i>LinkedIn</a></div>
                      <div class="col">Yes Go</div>
                    </div>
                  </div>
                </div>
              </div><!--.row-->
            </div><!--.col-12.col-md-6-->

            <div class="col-12 col-sm-6 mb-5 employee-box">
              <div class="row">
                <div class="col-12 col-md-4 text-center">
									<?php
										$img_html = '<img src="'. get_template_directory_uri() . '/img/team/team-old-size/ahmad-mustafa.jpg" class="rounded-circle" alt="Ahmad Mustafa">';
										$img_html = apply_filters( 'bj_lazy_load_html', $img_html );
										echo $img_html;
									?>
                </div>
                <div class="col-12 col-md-8 body-box">
                  <div class="body-header mb-4">
                    <p class="mb-0">Ahmad Mustafa</p>
                    <p class="mb-0">Front End Developer</p>
                  </div>
                  <div class="body-content py-3 px-2 mb-2">
                    <i class="fas fa-quote-right fa-lg text-info"></i>
                    You never lose until you actually give up.
                  </div>
                  <div class="body-footer text-center">
                    <div class="row">
                      <div class="col"><a href="https://www.linkedin.com/in/ahmadmustafa-business"><i class="fab fa-linkedin fa-fw fa-lg"></i>LinkedIn</a></div>
                      <div class="col">Yes Go</div>
                    </div>
                  </div>
                </div>
              </div><!--.row-->
            </div><!--.col-12.col-md-6-->

            <div class="col-12 col-sm-6 mb-5 employee-box">
              <div class="row">
                <div class="col-12 col-md-4 text-center">
									<?php
										$img_html = '<img src="'. get_template_directory_uri() . '/img/team/team-old-size/hammam-zarefa.jpg" class="rounded-circle" alt="Hammam Zarefa">';
										$img_html = apply_filters( 'bj_lazy_load_html', $img_html );
										echo $img_html;
									?>
                </div>
                <div class="col-12 col-md-8 body-box">
                  <div class="body-header mb-4">
                    <p class="mb-0">Hammam Zarefa</p>
                    <p class="mb-0">Backend Developer</p>
                  </div>
                  <div class="body-content py-3 px-2 mb-2">
                    <i class="fas fa-quote-right fa-lg text-info"></i>
                    Never dream of success, work for it.
                  </div>
                  <div class="body-footer text-center">
                    <div class="row">
                      <div class="col"><a href="https://www.linkedin.com/in/hammam-zarefa-806721190"><i class="fab fa-linkedin fa-fw fa-lg"></i>LinkedIn</a></div>
                      <div class="col"><a href="https://github.com/HammamZarefa"><i class="fab fa-github fa-fw fa-lg"></i>Github</a></div>
                      <div class="col">Yes Go</div>
                    </div>
                  </div>
                </div>
              </div><!--.row-->
            </div><!--.col-12.col-md-6-->

            <div class="col-12 col-sm-6 mb-5 employee-box">
              <div class="row">
                <div class="col-12 col-md-4 text-center">
									<?php
										$img_html = '<img src="'. get_template_directory_uri() . '/img/team/team-old-size/kenan-hussein.jpg" class="rounded-circle" alt="Kenan Hussein">';
										$img_html = apply_filters( 'bj_lazy_load_html', $img_html );
										echo $img_html;
									?>
                </div>
                <div class="col-12 col-md-8 body-box">
                  <div class="body-header mb-4">
                    <p class="mb-0">Kenan Hussein</p>
                    <p class="mb-0">Web Developer</p>
                  </div>
                  <div class="body-content py-3 px-2 mb-2">
                    <i class="fas fa-quote-right fa-lg text-info"></i>
                    Think a lot, code a few, Keep it simple, keep it stupid.
                  </div>
                  <div class="body-footer text-center">
                    <div class="row">
                      <div class="col"><a href="https://www.linkedin.com/in/kenan-hussein"><i class="fab fa-linkedin fa-fw fa-lg"></i>LinkedIn</a></div>
                      <div class="col"><a href="https://github.com/Kenan-Hussein"><i class="fab fa-github fa-fw fa-lg"></i>Github</a></div>
                      <div class="col">Yes Go</div>
                    </div>
                  </div>
                </div>
              </div><!--.row-->
            </div><!--.col-12.col-md-6-->

            <div class="col-12 col-sm-6 mb-5 employee-box">
              <div class="row">
                <div class="col-12 col-md-4 text-center">
									<?php
										$img_html = '<img src="'. get_template_directory_uri() . '/img/team/team-old-size/mohammad-al-kalaleeb.jpg" class="rounded-circle" alt="Mohammad al Kalaleeb">';
										$img_html = apply_filters( 'bj_lazy_load_html', $img_html );
										echo $img_html;
									?>
                </div>
                <div class="col-12 col-md-8 body-box">
                  <div class="body-header mb-4">
                    <p class="mb-0">Mohammad Al Kalaleeb</p>
                    <p class="mb-0">Web Developer</p>
                  </div>
                  <div class="body-content py-3 px-2 mb-2">
                    <i class="fas fa-quote-right fa-lg text-info"></i>
                    Work smarter, not harder.
                  </div>
                  <div class="body-footer text-center">
                    <div class="row">
                      <div class="col"><a href="https://www.linkedin.com/in/mohammad-al-kalaleeb-6ab521140"><i class="fab fa-linkedin fa-fw fa-lg"></i>LinkedIn</a></div>
                      <div class="col"><a href="https://github.com/mickSawy3r"><i class="fab fa-github fa-fw fa-lg"></i>Github</a></div>
                      <div class="col">Yes Go</div>
                    </div>
                  </div>
                </div>
              </div><!--.row-->
            </div><!--.col-12.col-md-6-->

            <div class="col-12 col-sm-6 mb-5 employee-box">
              <div class="row">
                <div class="col-12 col-md-4 text-center">
									<?php
										$img_html = '<img src="'. get_template_directory_uri() . '/img/team/team-old-size/mujeeba-haj-najeeb.jpg" class="rounded-circle" alt="Mujeeba Haj Najeeb">';
										$img_html = apply_filters( 'bj_lazy_load_html', $img_html );
										echo $img_html;
									?>
                </div>
                <div class="col-12 col-md-8 body-box">
                  <div class="body-header mb-4">
                    <p class="mb-0">Mujeeba Haj Najeeb</p>
                    <p class="mb-0">Scrum Master</p>
                  </div>
                  <div class="body-content py-3 px-2 mb-2">
                    <i class="fas fa-quote-right fa-lg text-info"></i>
                    Dream big & work hard.
                  </div>
                  <div class="body-footer text-center">
                    <div class="row">
                      <div class="col"><a href="https://www.linkedin.com/in/mujeeba-haj-najeeb-327228161"><i class="fab fa-linkedin fa-fw fa-lg"></i>LinkedIn</a></div>
                      <div class="col"><a href="https://github.com/Mujeeba-Haj-Najeeb"><i class="fab fa-github fa-fw fa-lg"></i>Github</a></div>
                      <div class="col">Yes Go</div>
                    </div>
                  </div>
                </div>
              </div><!--.row-->
            </div><!--.col-12.col-md-6-->

            <div class="col-12 col-sm-6 mb-5 employee-box">
              <div class="row">
                <div class="col-12 col-md-4 text-center">
									<?php
										$img_html = '<img src="'. get_template_directory_uri() . '/img/team/team-old-size/hanan.jpg" class="rounded-circle" alt="Hanan">';
										$img_html = apply_filters( 'bj_lazy_load_html', $img_html );
										echo $img_html;
									?>
                </div>
                <div class="col-12 col-md-8 body-box">
                  <div class="body-header mb-4">
                    <p class="mb-0">Hanan Al-Jarmakani</p>
                    <p class="mb-0">UX / UI Designer</p>
                  </div>
                  <div class="body-content py-3 px-2 mb-2">
                    <i class="fas fa-quote-right fa-lg text-info"></i>
                    We are what we believe in. I believe in unlimited ideas,  creative souls and unlimited passion I believe in unlimitedly.
                  </div>
                  <div class="body-footer text-center">
                    <div class="row">
                      <div class="col"><a href="https://www.linkedin.com/in/hanan-aljarmakani-6908b294/"><i class="fab fa-linkedin fa-fw fa-lg"></i>LinkedIn</a></div>
                      <div class="col"><a href="https://github.com/mickSawy3r"><i class="fab fa-github fa-fw fa-lg"></i>Github</a></div>
                      <div class="col">Yes Go</div>
                    </div>
                  </div>
                </div>
              </div><!--.row-->
            </div><!--.col-12.col-md-6-->

            <div class="col-12 col-sm-6 mb-5 employee-box mx-auto">
              <div class="row">
                <div class="col-12 col-md-4 text-center">
									<?php
										$img_html = '<img src="'. get_template_directory_uri() . '/img/team/team-old-size/hanan.jpg" class="rounded-circle" alt="Hanan">';
										$img_html = apply_filters( 'bj_lazy_load_html', $img_html );
										echo $img_html;
									?>
                </div>
                <div class="col-12 col-md-8 body-box">
                  <div class="body-header mb-4">
                    <p class="mb-0">Hanan Al-Jarmakani</p>
                    <p class="mb-0">UX / UI Designer</p>
                  </div>
                  <div class="body-content py-3 px-2 mb-2">
                    <i class="fas fa-quote-right fa-lg text-info"></i>
                    We are what we believe in. I believe in unlimited ideas,  creative souls and unlimited passion I believe in unlimitedly.
                  </div>
                  <div class="body-footer text-center">
                    <div class="row">
                      <div class="col"><a href="https://www.linkedin.com/in/hanan-aljarmakani-6908b294/"><i class="fab fa-linkedin fa-fw fa-lg"></i>LinkedIn</a></div>
                      <div class="col"><a href="https://github.com/mickSawy3r"><i class="fab fa-github fa-fw fa-lg"></i>Github</a></div>
                      <div class="col">Yes Go</div>
                    </div>
                  </div>
                </div>
              </div><!--.row-->
            </div><!--.col-12.col-md-6-->

					</div><!--.row-->
				</div><!--.our-team-box-->

		</div><!--.container-->
	</div><!--.our-team-separate-page-->
	<!--End Our Team Separate Page-->

<?php get_footer(); ?>
