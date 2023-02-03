    <footer>
       <div id="footer" class="container">
          <div class="row">
             <div class="col-lg-4 col-12 mb-5">
                <div class="footer-body w-75">
                   <h2>
                      Our Mission
                   </h2>
                   <p>
                      The Royal African Society is a membership organisation that
                      provides opportunities for people to connect,
                      celebrate and engage critically with a wide range
                      of topics and ideas about Africa today. </br></br>

                      We amplify African voices and interests in academia,
                      business, politics, the arts and education,
                      reaching a network of more than one million people globally.
                   </p>
                </div>
             </div>
             <div class="col-lg-3 col-12 mb-5">
                <div class="footer-body w-75">
                   <h2>
                      Contact Us
                   </h2>
                   <p>
                      <span>e-mail</span><br>
                      <?php echo get_option('email'); ?></br><br>

                      <span>address</span><br>
                      <?php echo get_option('address'); ?><br><br>

                      Registered Charity 1062764
                   </p>
                </div>
             </div>
             <div class="col-lg-2 col-12 mb-5 ">
                <div class="footer-body ">
                   <h2>
                      Site Map
                   </h2>
                   <ul class="site-links">
                      <li>About us</li>
                      <li>What we do</li>
                      <li>Events</li>
                      <li>Membership</li>
                      <li>Contact us</li>
                   </ul>
                </div>
             </div>
             <div class="col-lg-2 col-12 mb-5">
                <div class="footer-body">
                   <h2 class="text-lg-center">
                      Follow Us
                   </h2>
                   <ul class="social-links d-flex justify-content-lg-center">
                      <li>
                         <a href="<?php echo get_option('facebook_url'); ?>">
                            <img src="<?php echo get_theme_file_uri("/asset/facebook.png") ?>" class="img-fluid" alt="">
                         </a>
                      </li>
                      <li>
                         <a href="<?php echo get_option('instagram_url'); ?>">
                            <img src="<?php echo get_theme_file_uri("/asset/instagram.png") ?>" class="img-fluid" alt="">
                         </a>
                      </li>
                      <li>
                         <a href="<?php echo get_option('youtube_url'); ?>">
                            <img src="<?php echo get_theme_file_uri("/asset/youube.png") ?>" class="img-fluid" alt="">
                         </a>
                      </li>


                   </ul>
                </div>
             </div>
          </div>
       </div>
    </footer>
    <section id="bottom-footer">
       <div class="container-fluid bottom-footer">
          <div>
             <p class="text-center">
                © 2019 Royal African Society ltd - All rights reserved. <a href="">Privacy Policy </a> <a href="">Terms Of Use </a> <a href="">Privacy Policy</a>
             </p>
          </div>
       </div>
    </section>
    <?php wp_footer() ?>

    </body>

    </html>