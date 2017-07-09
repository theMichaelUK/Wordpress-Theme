<?php

/*
Template Name: Content
*/

get_header();

while ( have_posts() ) { the_post();
?>

Page

<?php
}

get_footer();
