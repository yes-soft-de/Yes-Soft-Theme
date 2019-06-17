<?php /* Template Name: contactUsPage */ ?>

<?php get_header(); ?>



<!--Start Contact Us-->
 
<div class="contact-us" id="contact-us">

    <div class="row m-0">

        <div class="col-lg-4 bg-info pl-4 pt-5 pb-4">

            <h2 class="font-weight-bold">Contact information</h2>

            <span class="text-white">For your enquiries and projects don’t hesitate to contact us :</span>

            <div class="information">

                <div>

                    <i class="fa fa-fw fa-map-marker-alt"></i>

                    <span>Berlin, Germany</span>

                </div>

                <div>

                    <i class="fa fa-fw fa-phone"></i>

                    <span>+491633733146</span>

                </div>

                <div>

                    <i class="fa fa-fw fa-envelope"></i>

                    <span>info@yes-soft.de</span>

                </div>

            </div>

            <ul class="social-media">

                <li><a href="#"><i class="fab fa-facebook-f fa-fw"></i></a></li>

                <li><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>

                <li><a href="#"><i class="fab fa-whatsapp fa-fw"></i></a></li>

                <li><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>

                <li><a href="#"><i class="fab fa-github fa-fw"></i></a></li>

            </ul>

        </div>

        <div class="col-lg-8 bg-light">

            <h2 class=" text-dark pt-5 pb-4">

                <i class="fa fa-fw fa-envelope-open-text"></i>

                Write to us

            </h2>

            <form action="" method="post" class="pr-4 pb-5 mb-5">

                <div class="d-flex my-5">

                    <input type="text" class="form-control mr-4" required name="name" id="name" placeholder="Your Name" title="Your Name">

                    <input type="text" class="form-control mr-4" required name="email" id="email" placeholder="Your Email" title="Your Email">

                </div>

                <div class="d-flex my-5">

                    <input type="tel" class="form-control mr-4" required name="phone" id="phone" placeholder="Your Phone" title="Your Phone">

                    <input type="text" class="form-control mr-4" name="company" id="company" placeholder="Your Company" title="Your Company">

                </div>

                <div>

                    <textarea class="form-control" name="massage" required id="massage" rows="4" placeholder="Your Massage" title="Your Massage"></textarea>

                    <button type="submit" class="btn btn-info rounded-circle p-3"><i class="fa fa-paper-plane fa-2x"></i></button>

                </div>

            </form>

        </div>

    </div>

</div>

<!--End Contact Us-->



<?php get_footer(); ?>