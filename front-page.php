<?php get_header(); ?>

<!-- Start Up Button Section -->
<div class="move-up">
    <button type="button" class="move-up-button">
        <i class="fa fa-angle-double-up fa-lg fa-fw" aria-hidden="true"></i>
    </button>
</div>
<!-- End Up Button Section -->

<div class="home">
    <div class="bg-nav-logo d-none d-md-block">
        <img src="<?php echo get_template_directory_uri() . '/img/bg-logo.png' ?>" class="responsive-element" alt="background Logo">
        <div class="nav-logo">
            <a href="<?php echo get_site_url()?>">
                <img src="<?php echo get_template_directory_uri() . '/img/logo.svg' ?>" class="responsive-element" alt="Logo">
            </a>
        </div>
    </div>
    <!--Start slider section-->
    <div class="home-slider">
        <div class="home-slide col-12">
            <div class="row">
                <div class="col-9 col-lg-6 col-xl-7 offset-2 offset-xl-1 slider-content align-self-center text-center">
                    <h1>E-commerce services</h1>
                    <p>it’s our main business field. We design and develop ecommerce websites and mobile apps from A to Z. Our products are highly secure, well designed and implemented, interactive and mobile-friendly. We deploy high trending techniques. Elasticsearch, Spryker, OAuth, Symfony, just to name a few. You can visit ISHTAR ART in order to take a look about products we build</p>
                </div>
                <div class="col-8 col-md-6 col-lg-4 align-self-center mx-auto">
                    <img src="<?php echo get_template_directory_uri() . '/img/e-marketing.png'?>" class="img-fluid" alt="Slider Image">
                </div>
            </div>
        </div>
        <div class="home-slide">
            <div class="row">
                <div class="col-9 col-lg-6 col-xl-7 offset-2 offset-xl-1 slider-content align-self-center text-center">
                    <h1>Android App Development</h1>
                    <p>Do you know that most of the internet traffic today comes from mobile users. This means that building an app will help your business bring value to modern users. Whether it is your first app or third, our expertise in android app development will help you succeed with your mobile strategy</p>
                </div>
                <div class="col-8 col-md-6 col-lg-4 align-self-center mx-auto">
                    <img src="<?php echo get_template_directory_uri() . '/img/android_app.png'?>" class="img-fluid" alt="Slider Image">
                </div>
            </div>
        </div>
        <div class="home-slide">
            <div class="row">
                <div class="col-9 col-lg-6 col-xl-7 offset-2 offset-xl-1 slider-content align-self-center text-center">
                    <h1>Remote maintenance</h1>
                    <p>this field is also trending in today’s world. We offer e-marketing campaigns at social media platforms or email-based, graphic design, promoting videos, content marketing, and SEO</p>
                </div>
                <div class="col-8 col-md-6 col-lg-4 align-self-center mx-auto">
                    <img src="<?php echo get_template_directory_uri() . '/img/online_trade.png'?>" class="img-fluid" alt="Slider Image">
                </div>
            </div>
        </div>
    </div>

    <!--Start Our Project Section-->
    <div class="our-projects">
        <div class="container-fluid">
            <h2 class="text-center">Our Projects</h2>
            <p class="col-12 col-sm-10 col-md-8 col-lg-6 lead text-center mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt incidunt sint fugiat suscipit culpa</p>
            <div class="our-projects-slider">
                <div class="col-11 col-md-10 col-lg-9 offset-1 offset-md-2 project">
                    <div id="project-1" class="project-list list">
                        <div class="row">
                            <div data-t="professional" class="col-4 selected project-item">
                                <img src="<?php echo get_template_directory_uri() . '/img/project-1.jpg'?>" class="responsive-element" alt="Project Image">
                                <div class="project-hovering">ISHTAR</div>
                                <p>Prof</p>
                            </div>
                            <div data-t="personal" class="col-4 project-item px-0">
                                <img src="<?php echo get_template_directory_uri() . '/img/project-2.jpg';?>" class="responsive-element" alt="Project Image">
                                <div class="project-hovering w-100">Personal</div>
                                <p>Pers</p>
                            </div>
                            <div data-t="furniture" class="col-4 project-item">
                                <img src="<?php echo get_template_directory_uri() . '/img/project-3.jpg'?>" class="responsive-element" alt="Project Image">
                                <div class="project-hovering">Furniture</div>
                                <p>Furni</p>
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="professional">
                            <h3>Background</h3>
                            <p>Today if we say the word "Syria", a stereotype will pop up to minds. It is related to war and victims. They may forget how Syria was full of creativity and beauty a few years ago. And how Syrians were living a fancy life. So, our mission at ISHTAR is to introduce Syrian Art and Artists again to the world. Thus, alter the word "Syria" to mean beauty and creativity again as it was forever.</p>
                        </div>
                        <div class="personal">
                            <h3>Personal</h3>
                            <p>About this is our first feature for the fast one thisture for the fast one the fast one thisture for the fast onethe fast one thisture for the fast onethis isture for the fast one this is is our first feature for the fast one this is our first feature for the fast one this is</p>
                        </div>
                        <div class="furniture">
                            <h3>Furniture</h3>
                            <p>About this is our first feature for the fast one thisture for the fast one the fast one thisture for the fast onethe fast one thisture for the fast onethis isture for the fast one this is is our first feature for the fast one this is our first feature for the fast one this is</p>
                        </div>
                    </div>
                </div>

                <div class="col-11 col-md-10 col-lg-9 offset-1 offset-md-2 project">
                    <div class="project-big-style">
                        <div id="project-2" class="project-list list">
                            <div class="row">
                                <div data-t="programing" class="col-4 selected project-item">
                                    <img src="<?php echo get_template_directory_uri() . '/img/project-4.jpg'?>" class="responsive-element" alt="Project Image">
                                    <div class="project-hovering">Programing</div>
                                    <p>Prog</p>
                                </div>
                                <div data-t="webDoctor" class="col-4 project-item px-0">
                                    <img src="<?php echo get_template_directory_uri() . '/img/project-5.png'?>" class="responsive-element" alt="Project Image">
                                    <div class="project-hovering w-100">WebDoctor</div>
                                    <p>WebD</p>
                                </div>
                                <div data-t="laptop" class="col-4 project-item">
                                    <img src="<?php echo get_template_directory_uri() . '/img/project-6.jpg'?>" class="responsive-element" alt="Project Image">
                                    <div class="project-hovering">Laptop</div>
                                    <p>Laptop</p>
                                </div>
                            </div>
                        </div>
                        <div class="info">
                            <div class="programing">
                                <h3>Programing</h3>
                                <p>About this is our first feature for the fast one thisture for the fast one the fast one thisture for the fast onethe fast one thisture for the fast onethis isture for the fast one this is is our first feature for the fast one this is our first feature for the fast one this is</p>
                            </div>
                            <div class="webDoctor">
                                <h3>WebDoctor</h3>
                                <p>About this is our first feature for the fast one thisture for the fast one the fast one thisture for the fast onethe fast one thisture for the fast onethis isture for the fast one this is is our first feature for the fast one this is our first feature for the fast one this is</p>
                            </div>
                            <div class="laptop">
                                <h3>Laptop</h3>
                                <p>About this is our first feature for the fast one thisture for the fast one the fast one thisture for the fast onethe fast one thisture for the fast onethis isture for the fast one this is is our first feature for the fast one this is our first feature for the fast one this is</p>
                            </div>
                        </div>
                    </div>
                </div> <!--End Project-->
            </div><!--End Our Project Silder-->
        </div><!--End Container fluid-->
    </div>
    <!--End Our Project Section-->

    <!--Start We Are Specialised Section-->
    <div class="specialise-in position-relative">
        <img src="<?php echo get_template_directory_uri() . '/img/specialise-in1.png';?>" class="responsive-element" alt="special-image">
        <div class="specialise-content">
            <h2 class="text-center mt-5">We Are Specialised In</h2>
            <div class="container-fluid specialise-slider">
                <div class="specialise">
                    <div class="col-8 col-sm-6 col-md-5 col-lg-4 col-xl-3 col-xl-3 specialise-image">
                        <img src="<?php echo get_template_directory_uri() . '/img/wordpress-solution.png' ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-8 col-md-6 col-lg-4 specialise-desc p-3">
                        <h3>UI & UX Design</h3>
                        <p>For Start Up, For Business & For You</p>
                    </div>
                </div>
                <div class="specialise">
                    <div class="col-8 col-sm-6 col-md-5 col-lg-4 col-xl-3 specialise-image">
                        <img src="<?php echo get_template_directory_uri() . '/img/graphic-design.jpg' ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-8 col-md-6 col-lg-4 specialise-desc p-3">
                        <h3>Graphic Design</h3>
                        <p>For You, For Business & For Start Up</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End We Are Specialised Section-->

    <!--Start About Us Section-->
    <div id="about-us" class="about-us position-relative text-white">
        <img src="<?php echo get_template_directory_uri() . '/img/bg-about-us.png'?>" class="responsive-element" alt="special-image">
        <div class="about-us-body">
            <h2 class="text-center mt-5">About Us</h2>
            <h3 class="col-4 col-lg-3">Think Smart</h3>
            <div class="container-fluid about-us-slider position-absolute">
                <div class="col-12 col-sm-10 col-md-8 col-lg-7 about-us-content mx-auto">
                    <div class="about-us-text">
                        <p>
                            <span class="font-weight-bold">Yes Soft</span> is an ecommerce specialized software company located in Berlin/ Germany. It adopts open-source methodology. All its projects’ codes are available on Github.
                            Its team consists of developers, designers, content makers, testers and team managers. They work together remotely and results are always great.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="language-circle">
                                <h3>Python</h3>
                                <span>90%</span>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="language-circle">
                                <h3>Php</h3>
                                <span>50%</span>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="language-circle">
                                <h3>Java</h3>
                                <span>30%</span>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="language-circle">
                                <h3>Javascript</h3>
                                <span>80%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-8 col-lg-7 about-us-content mx-auto">
                    <div class="about-us-text">
                        <p>
                            They use up-to-date technologies to bring your imaginary requirements to reality.
                            Are you still hesitated about the company? Why don't you check out ISHTAR ART to evaluate everything by yourself?
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="language-circle">
                                <h3>Assemble</h3>
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="language-circle">
                                <h3>Rube</h3>
                                <span>70%</span>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="language-circle">
                                <h3>C#</h3>
                                <span>40%</span>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="language-circle">
                                <h3>C++</h3>
                                <span>10%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End About Us Section-->

    <!--Start Client Say Section-->
    <div class="client-say pt-5">
        <div class="container-fluid">
            <h2 class="text-center">Our Client Say</h2>
            <hr class="w-25">
            <div class="client-say-slider mb-0">
                <div class="col-11 col-sm-9 col-md-8 offset-1 offset-sm-2 client">
                    <div class="row">
                        <div class="col-12 col-sm-3">
                            <div class="client-image text-center">
                                <img class="rounded-circle mx-auto" src="<?php echo get_template_directory_uri() . '/img/default-avatar.jpg'?>" alt="codeway" />
                                <h5 class="client-name font-weight-bold mt-2 mt-lg-3">First Client<a href="#"><i class="fab fa-linkedin fa-fw"></i></a></h5>
                                <p class="text-secondary">Client Career</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-9 client-content">
                            <p class="lead text-secondary pt-3 pt-md-4 pt-lg-5">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem ratione tempora consequatur quisquam nisi enim dicta fugiat blanditiis vel.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem ratione tempora consequatur quisquam nisi enim dicta fugiat blanditiis vel.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-11 col-sm-9 col-md-8 offset-1 offset-sm-2 client">
                    <div class="row">
                        <div class="col-12 col-sm-3">
                            <div class="client-image text-center">
                                <img class="rounded-circle mx-auto" src="<?php echo get_template_directory_uri() . '/img/default-avatar.jpg'?>" alt="codeway" />
                                <h5 class="client-name font-weight-bold mt-2 mt-lg-3">Second Client<a href="#"><i class="fab fa-linkedin fa-fw"></i></a></h5>
                                <p class="text-secondary">Client Career</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-9 client-content">
                            <p class="lead text-secondary pt-3 pt-md-4 pt-lg-5">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem ratione tempora consequatur quisquam nisi enim dicta fugiat blanditiis vel.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem ratione tempora consequatur quisquam nisi enim dicta fugiat blanditiis vel.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Customer Section-->

    <!--Start Our Team Section-->
    <div class="our-team py-5">
        <div class="container-fluid">
            <h2 class="text-center mb-4">Our Team</h2>
            <div class="our-team-slider">
                <div class="col-lg-9 col-xl-8 offset-1 offset-md-2 team">
                    <div class="row">
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="team-member position-relative px-3 px-lg-4 py-5">
                                <img src="<?php echo get_template_directory_uri() . '/img/team/talal-danoun.jpg' ?>" class="rounded-circle" alt="Talal Image">
                                <div class="team-member-body">
                                    <h5 class="mb-md-0 mb-lg-1"><a href="#">Talal Danoun</a></h5>
                                    <p class="text-secondary d-inline-block">Web Developer</p>
                                    <a href="https://www.linkedin.com/in/talal-danoon-38945b154"><i class="fab fa-linkedin-in fa-fw"></i></a>
                                    <a href="https://github.com/tald7344"><i class="fab fa-github fa-fw"></i></a>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-10 pl-sm-1 pr-0 pr-sm-1 px-md-3">
                                                <p class="text-secondary">
                                                    Leave your comfort zone and you’ll reach the impossible
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="team-member position-relative py-5 px-3 px-lg-4 ">
                                <img src="<?php echo get_template_directory_uri() . '/img/team/hammam-zarefa.jpg' ?>" class="rounded-circle" alt="Hammam Zarefa">
                                <div class="team-member-body">
                                    <h5 class="mb-md-0 mb-lg-1"><a href="#">Hammam Zarefa</a></h5>
                                    <p class="text-secondary d-inline-block">Backend Developer</p>
                                    <a href="https://www.linkedin.com/in/hammam-zarefa-806721190"><i class="fab fa-linkedin-in fa-fw"></i></a>
                                    <a href="https://github.com/HammamZarefa"><i class="fab fa-github fa-fw"></i></a>

                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-10 pl-sm-1 pr-0 pr-sm-1 px-md-3">
                                                <p class="text-secondary">
                                                    Never dream of success, work for it
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-xl-8 offset-1 offset-md-2 team">
                    <div class="row">
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="team-member position-relative py-5 px-3 px-lg-4 ">
                                <img src="<?php echo get_template_directory_uri() . '/img/team/kenan-hussein.jpg'?>" class="rounded-circle" alt="Kenan Hussein">
                                <div class="team-member-body">
                                    <h5 class="mb-md-0 mb-lg-1"><a href="#">Kenan Hussein</a></h5>
                                    <p class="text-secondary d-inline-block">Web Developer</p>
                                    <a href="https://www.linkedin.com/in/kenan-hussein"><i class="fab fa-linkedin-in fa-fw"></i></a>
                                    <a href="https://github.com/Kenan-Hussein"><i class="fab fa-github fa-fw"></i></a>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-10 pl-sm-1 pr-0 pr-sm-1 px-md-3">
                                                <p class="text-secondary">
                                                    Think a lot, code a few, Keep it simple, keep it stupid
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Qusai Ali-->
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="team-member position-relative py-5 px-3 px-lg-4 ">
                                <img src="<?php echo get_template_directory_uri() . '/img/team/qusai-ali.jpg'?>" class="rounded-circle" alt="Qusai Ali">
                                <div class="team-member-body">
                                    <h5 class="mb-md-0 mb-lg-1"><a href="#">Qusai Ali</a></h5>
                                    <p class="text-secondary d-inline-block">Front End Developer</p>
                                    <a href="https://www.linkedin.com/in/qusai-ali-it/"><i class="fab fa-linkedin-in fa-fw"></i></a>
                                    <a href="https://github.com/qusai-ali/IT"><i class="fab fa-github fa-fw"></i></a>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-10 pl-sm-1 pr-0 pr-sm-1 px-md-3">
                                                <p class="text-secondary">
                                                    Work smarter, not harder
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-xl-8 offset-1 offset-md-2 team">
                    <div class="row">
                        <!--Osama Alhamoud-->
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="team-member position-relative py-5 px-3 px-lg-4 ">
                                <img src="<?php echo get_template_directory_uri() . '/img/team/osama-alhamoud.jpg' ?>" class="rounded-circle" alt="Osama Alhamoud">
                                <div class="team-member-body">
                                    <h5 class="mb-md-0 mb-lg-1"><a href="#">Osama Alhamoud</a></h5>
                                    <p class="text-secondary d-inline-block">Manager</p>
                                    <a href="https://www.linkedin.com/in/osama-alhamoud"><i class="fab fa-linkedin-in fa-fw"></i></a>
                                    <a href="https://github.com/osama-alhamoud"><i class="fab fa-github fa-fw"></i></a>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-10 pl-sm-1 pr-0 pr-sm-1 px-md-3">
                                                <p class="text-secondary">
                                                    Open your eyes and say Yes
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Mohammad Al Kalaleeb-->
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="team-member position-relative py-5 px-3 px-lg-4 ">
                                <img src="<?php echo get_template_directory_uri() . '/img/team/mohammad-al-kalaleeb.jpg' ?>" class="rounded-circle" alt="Mohammad Al Kalaleeb">
                                <div class="team-member-body">
                                    <h5 class="mb-md-0 mb-lg-1"><a href="#">Mohammad Al Kalaleeb</a></h5>
                                    <p class="text-secondary d-inline-block">Web Developer</p>
                                    <a href="https://www.linkedin.com/in/mohammad-al-kalaleeb-6ab521140"><i class="fab fa-linkedin-in fa-fw"></i></a>
                                    <a href="https://github.com/mickSawy3r"><i class="fab fa-github fa-fw"></i></a>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-10 pl-sm-1 pr-0 pr-sm-1 px-md-3">
                                                <p class="text-secondary">
                                                    Success is a deep passion, long hours of work, and a lifestyle
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-xl-8 offset-1 offset-md-2 team">
                    <div class="row">
                        <!--Bassel Al-Salloum-->
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="team-member position-relative py-5 px-3 px-lg-4 ">
                                <img src="<?php echo get_template_directory_uri() . '/img/team/basel-sallom.jpg' ?>" class="rounded-circle" alt="Bassel Al-Salloum">
                                <div class="team-member-body">
                                    <h5 class="mb-md-0 mb-lg-1"><a href="#">Bassel Al-Salloum</a></h5>
                                    <p class="text-secondary d-inline-block">Graphic Designer</p>
                                    <a href="https://www.linkedin.com/in/basel-sy-851910196/ "><i class="fab fa-linkedin-in fa-fw"></i></a>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-10 pl-sm-1 pr-0 pr-sm-1 px-md-3">
                                                <p class="text-secondary">
                                                    It's not only a style .. it's an attitude era
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Mahmoud Aldiek -->
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="team-member position-relative py-5 px-3 px-lg-4 ">
                                <img src="<?php echo get_template_directory_uri() . '/img/team/mahmoud.jpg' ?>" class="rounded-circle" alt="Mahmoud Aldiek">
                                <div class="team-member-body">
                                    <h5 class="mb-md-0 mb-lg-1"><a href="#">Mahmoud Aldiek</a></h5>
                                    <p class="text-secondary d-inline-block">Emarketer & Content Creator</p>
                                    <a href="https://www.linkedin.com/in/mahmoud-aldiek-74a919196"><i class="fab fa-linkedin-in fa-fw"></i></a>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-10 pl-sm-1 pr-0 pr-sm-1 px-md-3">
                                                <p class="text-secondary">
                                                    If you want to be special, you have to be ambitious first
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-xl-8 offset-1 offset-md-2 team">
                    <div class="row">
                        <!--Mujeeba Haj Najeeb-->
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="team-member position-relative py-5 px-3 px-lg-4 ">
                                <img src="<?php echo get_template_directory_uri() . '/img/team/mujeeba-haj-najeeb.jpg' ?>" class="rounded-circle" alt="Mujeeba Haj Najeeb">
                                <div class="team-member-body">
                                    <h5 class="mb-md-0 mb-lg-1"><a href="#">Mujeeba Haj Najeeb</a></h5>
                                    <p class="text-secondary d-inline-block">Scrum Master</p>
                                    <a href="https://www.linkedin.com/in/mujeeba-haj-najeeb-327228161"><i class="fab fa-linkedin-in fa-fw"></i></a>
                                    <a href="https://github.com/Mujeeba-Haj-Najeeb "><i class="fab fa-github fa-fw"></i></a>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-10 pl-sm-1 pr-0 pr-sm-1 px-md-3">
                                                <p class="text-secondary">
                                                    Dream big & work hard
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Hanan Al-Jarmakani-->
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="team-member position-relative py-5 px-3 px-lg-4 ">
                                <img src="<?php echo get_template_directory_uri() . '/img/team/hanan.jpg' ?>" class="rounded-circle" alt="Hanan Aljarmakani">
                                <div class="team-member-body">
                                    <h5 class="mb-md-0 mb-lg-1"><a href="#">Hanan Al-Jarmakani</a></h5>
                                    <p class="text-secondary d-inline-block">UX / UI Designer</p>
                                    <a href="https://www.linkedin.com/in/hanan-aljarmakani-6908b294/"><i class="fab fa-linkedin-in fa-fw"></i></a>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-10 pl-sm-1 pr-0 pr-sm-1 px-md-3">
                                                <p class="text-secondary">
                                                    We are what we believe in. I believe in unlimited ideas ,  creative souls and unlimited passion I believe in unlimitedly
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-xl-8 offset-1 offset-md-2 team">
                    <div class="row">
                        <!--Nisreen Abu Zidan-->
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="team-member position-relative py-5 px-3 px-lg-4 ">
                                <img src="<?php echo get_template_directory_uri() . '/img/team/nisreen-abu-zidan.jpg' ?>" class="rounded-circle" alt="Nisreen Abu Zidan">
                                <div class="team-member-body">
                                    <h5 class="mb-md-0 mb-lg-1"><a href="#">Nisreen Abu Zidan</a></h5>
                                    <p class="text-secondary d-inline-block">Business Development Manager</p>
                                    <a href="https://www.linkedin.com/in/nisreenabuzidan/"><i class="fab fa-linkedin-in fa-fw"></i></a>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-10 pl-sm-1 pr-0 pr-sm-1 px-md-3">
                                                <p class="text-secondary">
                                                    Nothing is true and everything is permissible
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Ahmad Mustafa-->
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="team-member position-relative py-5 px-3 px-lg-4 ">
                                <img src="<?php echo get_template_directory_uri() . '/img/team/ahmad-mustafa.jpg' ?>" class="rounded-circle" alt="Ahmad Mustafa">
                                <div class="team-member-body">
                                    <h5 class="mb-md-0 mb-lg-1"><a href="#">Ahmad Mustafa</a></h5>
                                    <p class="text-secondary d-inline-block">E-Marketer</p>
                                    <a href="https://www.linkedin.com/in/ahmadmustafa-business"><i class="fab fa-linkedin-in fa-fw"></i></a>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-10 pl-sm-1 pr-0 pr-sm-1 px-md-3">
                                                <p class="text-secondary">
                                                    You never lose until you actually give up
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Our Team Section-->

    <!--Start Our Clients Section-->
    <div class="our-clients py-5">
        <div class="container">
            <h2 class="text-center mb-5">Our Client</h2>
            <div class="row text-center">
                <div class="col-6 col-sm-3">
                    <h4>Clients one</h4>
                </div>
                <div class="col-6 col-sm-3">
                    <h4>Clients Two</h4>
                </div>
                <div class="col-6 col-sm-3">
                    <h4>Clients Three</h4>
                </div>
                <div class="col-6 col-sm-3">
                    <h4>Clients Four</h4>
                </div>
            </div>
        </div>
    </div>
    <!--End Our Clients Section-->

</div>

<?php get_footer(); ?>
