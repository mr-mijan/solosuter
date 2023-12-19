<?php get_header(); ?>

<!-- Start:: main -->
<main id="main">

    <!-- Start:: header -->
    <?php get_template_part('template-part/theme_header') ?>
    <!-- End:: header -->

    <!-- Start:: intro section -->
    <section id="intro">
        <div class="container">
            <div class="page-container page-head mb-64">
                <h1><?php the_title(); ?></h1>
                <p><?php echo get_the_date(); ?>|<?php comments_number(); ?></p>
            </div>
            <div class="page-cover mb-48">
                <img src="<?php the_post_thumbnail_url() ?>" alt="">
            </div>
            <div class="page-container">
                <?php the_content(); ?>
</div>
    </section>

    <!-- End:: intro section -->

    <!-- Start:: recent post section -->
        <?php get_template_part('template-part/recent_post') ?>
    <!-- End:: recent post section -->


    <?php get_footer(); ?>