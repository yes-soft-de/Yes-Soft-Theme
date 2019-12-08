<?php get_header(); ?>

<!-- Start Up Button Section -->
<div class="move-up">
    <button type="button" class="move-up-button">
        <i class="fa fa-angle-double-up fa-lg fa-fw" aria-hidden="true"></i>
    </button>
</div>
<!-- End Up Button Section -->

<div class="home">
    <div class="bg-nav-logo">
        <img src="<?php echo get_template_directory_uri() . '/img/bg-logo.png' ?>" class="responsive-element" alt="background Logo">
        <div class="nav-logo">
            <a href="<?php echo get_site_url()?>">
                <img src="<?php echo get_template_directory_uri() . '/img/logo.svg' ?>" class="responsive-element" alt="Logo">
            </a>
        </div>
    </div>
    <!--Start slider section-->
    <div class="home-slider">
        <div class="home-slide">
            <div class="row">
                <div class="col-5 offset-1 slider-content align-self-center text-center">
                    <h1>Ecommerce Website</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt incidunt sint fugiat suscipit culpa</p>
                </div>
                <div class="col-5 align-self-center">
                    <img src="<?php echo get_template_directory_uri() . '/img/e-marketing.png'?>" class="img-fluid" alt="Slider Image">
                </div>
            </div>
        </div>
        <div class="home-slide">
            <div class="row">
                <div class="col-6 offset-1 slider-content align-self-center text-center">
                    <h1>Android Application</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt incidunt sint fugiat suscipit culpa</p>
                </div>
                <div class="col-4 align-self-center">
                    <img src="<?php echo get_template_directory_uri() . '/img/android_app.png'?>" class="img-fluid" alt="Slider Image">
                </div>
            </div>
        </div>
        <div class="home-slide">
            <div class="row">
                <div class="col-6 offset-1 slider-content align-self-center text-center">
                    <h1>Online Trade</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt incidunt sint fugiat suscipit culpa</p>
                </div>
                <div class="col-4 align-self-center">
                    <img src="<?php echo get_template_directory_uri() . '/img/online_trade.png'?>" class="img-fluid" alt="Slider Image">
                </div>
            </div>
        </div>

    </div>

    <!--Start Our Project Section-->
    <div class="our-projects">
        <div class="container-fluid">
            <h2 class="text-center">Our Projects</h2>
            <p class="col-6 lead text-center mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt incidunt sint fugiat suscipit culpa</p>
            <div class="our-projects-slider">
                <div class="col-9 offset-2 project">
                    <div id="project-1" class="project-list list">
                        <div class="row">
                            <div data-t="professional" class="col-4 selected project-item">
                                <img src="<?php echo get_template_directory_uri() . '/img/project-1.jpg'?>" class="responsive-element" alt="Project Image">
                                <div class="project-hovering">Professional</div>
                            </div>
                            <div data-t="personal" class="col-4 project-item px-0">
                                <img src="<?php echo get_template_directory_uri() . '/img/project-2.jpg';?>" class="responsive-element" alt="Project Image">
                                <div class="project-hovering w-100">Personal</div>
                            </div>
                            <div data-t="furniture" class="col-4 project-item">
                                <img src="<?php echo get_template_directory_uri() . '/img/project-3.jpg'?>" class="responsive-element" alt="Project Image">
                                <div class="project-hovering">Furniture</div>
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="professional">
                            <h3>Professional</h3>
                            <p>About this is our first feature for the fast one thisture for the fast one the fast one thisture for the fast onethe fast one thisture for the fast onethis isture for the fast one this is is our first feature for the fast one this is our first feature for the fast one this is</p>
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

                <div class="col-9 offset-2 project">
                    <div id="project-2" class="project-list list">
                        <div class="row">
                            <div data-t="programing" class="col-4 selected project-item">
                                <img src="<?php echo get_template_directory_uri() . '/img/project-4.jpg'?>" class="responsive-element" alt="Project Image">
                                <div class="project-hovering">Programing</div>
                            </div>
                            <div data-t="webDoctor" class="col-4 project-item px-0">
                                <img src="<?php echo get_template_directory_uri() . '/img/project-5.png'?>" class="responsive-element" alt="Project Image">
                                <div class="project-hovering w-100">WebDoctor</div>
                            </div>
                            <div data-t="laptop" class="col-4 project-item">
                                <img src="<?php echo get_template_directory_uri() . '/img/project-6.jpg'?>" class="responsive-element" alt="Project Image">
                                <div class="project-hovering">Laptop</div>
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
            </div>
        </div>
    </div>
    <!--End Our Project Section-->

    <!--Start We Are Specialised Section-->
    <div class="specialise-in position-relative">
        <img src="<?php echo get_template_directory_uri() . '/img/specialise-in1.png';?>" class="responsive-element" alt="special-image">
        <div class="specialise-content">
            <h2 class="text-center mt-5">We Are Specialised In</h2>
            <div class="container-fluid specialise-slider">
                <div class="specialise">
                    <div class="col-3 specialise-image">
                        <img src="<?php echo get_template_directory_uri() . '/img/wordpress-solution.png' ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-4 specialise-desc p-3">
                        <h3>UI & UX Design</h3>
                        <p>For Start Up, For Business & For You</p>
                    </div>
                </div>
                <div class="specialise">
                    <div class="col-3 specialise-image">
                        <img src="<?php echo get_template_directory_uri() . '/img/graphic-design.jpg' ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-4 specialise-desc p-3">
                        <h3>Graphic Design</h3>
                        <p>For You, For Business & For Start Up</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End We Are Specialised Section-->

    <!--Start About Us Section-->
    <div class="about-us position-relative text-white">
        <img src="<?php echo get_template_directory_uri() . '/img/bg-about-us.png'?>" class="responsive-element" alt="special-image">
        <div class="about-us-body">
            <h2 class="text-center mt-5">About Us</h2>
            <h3 class="col-3 h1">Think Smart</h3>
            <div class="container-fluid about-us-slider position-absolute">
                <div class="col-7 about-us-content mx-auto">
                    <div class="about-us-text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis deleniti maxime molestias nemo obcaecati rem.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis deleniti maxime molestias nemo obcaecati rem.
                            Amet asperiores aspernatur, assumenda, dolore error illum iusto quis repellat repudiandae sed similique sit sunt.
                            Amet asperiores aspernatur, assumenda, dolore error illum iusto quis repellat repudiandae sed similique sit sunt.
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
                <div class="col-7 about-us-content mx-auto">
                    <div class="about-us-text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis deleniti maxime molestias nemo obcaecati rem.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis deleniti maxime molestias nemo obcaecati rem.
                            Amet asperiores aspernatur, assumenda, dolore error illum iusto quis repellat repudiandae sed similique sit sunt.
                            Amet asperiores aspernatur, assumenda, dolore error illum iusto quis repellat repudiandae sed similique sit sunt.
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
                <div class="col-8 offset-2 client">
                    <div class="row">
                        <div class="col-3">
                            <div class="client-image text-center">
                                <img class="rounded-circle mx-auto" src="<?php echo get_template_directory_uri() . '/img/default-avatar.jpg'?>" alt="codeway" />
                                <h5 class="client-name font-weight-bold mt-3">First Client<a href="#"><i class="fab fa-linkedin fa-fw"></i></a></h5>
                                <p class="text-secondary">Client Career</p>
                            </div>
                        </div>
                        <div class="col-9">
                            <p class="lead text-secondary pt-5">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem ratione tempora consequatur quisquam nisi enim dicta fugiat blanditiis vel.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem ratione tempora consequatur quisquam nisi enim dicta fugiat blanditiis vel.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-8 offset-2 client">
                    <div class="row">
                        <div class="col-3">
                            <div class="client-image text-center">
                                <img class="rounded-circle mx-auto" src="<?php echo get_template_directory_uri() . '/img/default-avatar.jpg'?>" alt="codeway" />
                                <h5 class="client-name font-weight-bold mt-3">Second Client<a href="#"><i class="fab fa-linkedin fa-fw"></i></a></h5>
                                <p class="text-secondary">Client Career</p>
                            </div>
                        </div>
                        <div class="col-9">
                            <p class="lead text-secondary pt-5">
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
            <h2 class="text-center mb-4">Our Client Say</h2>
            <div class="our-team-slider">
                <div class="col-8 offset-2 team">
                    <div class="row">
                        <div class="col-6">
                            <div class="team-member position-relative p-5">
                                <img src="<?php echo get_template_directory_uri() . '/img/team/talal-danoun.jpg' ?>" class="rounded-circle" alt="Talal Image">
                                <div class="team-member-body">
                                    <h5><a href="#">Talal Danoun</a></h5>
                                    <p class="text-secondary">Web Developer</p>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-11">
                                                <p class="text-secondary">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab blanditiis, consectetur deleniti eaque enim error,
                                                    exercitationem facere ipsum maiores minima nostrum perspiciatis provident quae quasi repudiandae tenetur velit veritatis voluptatem!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="team-member position-relative p-5">
                                <img src="<?php echo get_template_directory_uri() . '/img/team/hammam-zarefa.jpg' ?>" class="rounded-circle" alt="Talal Image">
                                <div class="team-member-body">
                                    <h5><a href="#">Hammam Zarefa</a></h5>
                                    <p class="text-secondary">Web Developer</p>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-11">
                                                <p class="text-secondary">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab blanditiis, consectetur deleniti eaque enim error,
                                                    exercitationem facere ipsum maiores minima nostrum perspiciatis provident quae quasi repudiandae tenetur velit veritatis voluptatem!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8 offset-2 team">
                    <div class="row">
                        <div class="col-6">
                            <div class="team-member position-relative p-5">
                                <img src="<?php echo get_template_directory_uri() . '/img/team/kenan-hussein.jpg' ?>" class="rounded-circle" alt="Talal Image">
                                <div class="team-member-body">
                                    <h5><a href="#">Kenan Hussein</a></h5>
                                    <p class="text-secondary">Web Developer</p>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-11">
                                                <p class="text-secondary">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab blanditiis, consectetur deleniti eaque enim error,
                                                    exercitationem facere ipsum maiores minima nostrum perspiciatis provident quae quasi repudiandae tenetur velit veritatis voluptatem!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="team-member position-relative p-5">
                                <img src="<?php echo get_template_directory_uri() . '/img/team/qusai-ali.png' ?>" class="rounded-circle" alt="Talal Image">
                                <div class="team-member-body">
                                    <h5><a href="#">Qusai Ali</a></h5>
                                    <p class="text-secondary">Web Developer</p>
                                    <div class="col-12 team-member-content">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="fas fa-quote-right fa-lg"></i>
                                            </div>
                                            <div class="col-11">
                                                <p class="text-secondary">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab blanditiis, consectetur deleniti eaque enim error,
                                                    exercitationem facere ipsum maiores minima nostrum perspiciatis provident quae quasi repudiandae tenetur velit veritatis voluptatem!
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
                <div class="col-3">
                    <h4>Clients one</h4>
                </div>
                <div class="col-3">
                    <h4>Clients Two</h4>
                </div>
                <div class="col-3">
                    <h4>Clients Three</h4>
                </div>
                <div class="col-3">
                    <h4>Clients Four</h4>
                </div>
            </div>
        </div>
    </div>
    <!--End Our Clients Section-->

</div>

<?php get_footer(); ?>
