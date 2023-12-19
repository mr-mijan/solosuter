<?php
// Template Name: Home
?>
<?php get_header(); ?>

<!-- Start:: main -->
<main id="main">

    <!-- Start:: header -->
    <?php get_template_part('template-part/theme_header') ?>
    <!-- End:: header -->

    <!-- Start:: intro section -->
    <section id="intro">
        <div class="container relative">
            <div class="row">
            <div class="page_content"><?php the_content(); ?></div>
            </div>
        </div>
    </section>
    <!-- End:: intro section -->

 



<?php get_footer(); ?>