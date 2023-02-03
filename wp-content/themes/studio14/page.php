<?php

get_header();

while (have_posts()) {
    the_post(); ?>
    <div class="container">
        <div class="row my-5">
            <h1><?php the_title() ?></h1>
        </div>
    </div>


<?php
}

get_footer();

?>