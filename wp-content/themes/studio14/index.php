<?php
get_header();
?>
<main id="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12 mb-5">
                <section>
                    <div class="section-title">
                        <h2>Contact Us</h2>
                        <div class="section-line my-5"></div>
                    </div>
                    <div class="section-body w-75">
                        <h4>Address:</h4>
                        <p class="">
                            We are based at SOAS, University of London. </br></br>

                            Royal African Society, SOAS, 21 Russell Square London</br></br>
                            WC1B 5EA

                            Tel: <?php echo get_option('phone'); ?></br></br>
                        </p>
                    </div>
                </section>
            </div>
            <div class="col-lg-8 col-12 mb-5">
                <section>
                    <div class="section-map">
                        <!--<img src="<?php echo get_theme_file_uri("/asset/map.png") ?>" class="img-fluid" alt=""> -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2482.5057883673912!2d-0.13062803401934842!3d51.52228231743557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRoyal%20African%20Society%2C%20SOAS%2C%2021%20Russell%20Square%20London!5e0!3m2!1sen!2sus!4v1675451278408!5m2!1sen!2sus" width=”100%” height=”100%” style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                    <div class="section-body my-5 ">
                        <h4 class="my-3">General Enquiries</h4>
                        <p class="w-75">
                            For General Enquiries, please send an email to <a class="url-link">ras@soas.ac.uk</a> or get in touch via the contact form below</br></br>

                            For Donations and Legacies, please contact Caitlin Pearson on <a class="url-link">caitlin.pearson@soas.ac.uk</a>

                        </p>
                    </div>
                </section>
            </div>
        </div>

    </div>

</main>
<section id="donate">
    <div class="container-fluid">
        <div class="row call-action">
            <section>
                <div class="section-body">
                    <h2 class="text-center mb-4">
                        Help us tell the <br>African Story
                    </h2>
                    <div class="d-flex justify-content-center">
                        <a href="" class="button primary"> Donate <i class="bi bi-chevron-right px-2"></i> </a>
                    </div>

                </div>
            </section>
        </div>
    </div>
</section>


<?php
get_footer();
?>