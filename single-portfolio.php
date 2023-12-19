<?php get_header(); ?>

        <!-- Start:: main -->
        <main id="main">

            <!-- Start:: header -->
            <header id="header">
                <div class="container">
                    <ul class="lang unlist">
                        <li><a href="#" class="active underline-animation">Eng</a></li>
                        <li><a href="#" class="underline-animation">Spa</a></li>
                    </ul>

                    <!-- ========================= -->
                    <!--   Start:: theme setting   -->
                    <!-- ========================= -->
                    <div class="setting">
                        <input type="checkbox" id="theme">
                        <label for="theme">
                            <svg width="24" height="24" id="light" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor" d="M12 21.9966C6.47715 21.9966 2 17.5194 2 11.9966C2 6.47373 6.47715 1.99658 12 1.99658C17.5228 1.99658 22 6.47373 22 11.9966C22 17.5194 17.5228 21.9966 12 21.9966ZM12 19.9966C16.4183 19.9966 20 16.4149 20 11.9966C20 7.5783 16.4183 3.99658 12 3.99658C7.58172 3.99658 4 7.5783 4 11.9966C4 16.4149 7.58172 19.9966 12 19.9966ZM7.00035 15.3158C9.07995 15.1645 11.117 14.2938 12.7071 12.7037C14.2972 11.1136 15.1679 9.07654 15.3193 6.99694C15.6454 7.21396 15.955 7.46629 16.2426 7.75394C18.5858 10.0971 18.5858 13.8961 16.2426 16.2392C13.8995 18.5824 10.1005 18.5824 7.75736 16.2392C7.46971 15.9516 7.21738 15.642 7.00035 15.3158Z"/>
                            </svg>
                            <svg width="24" height="24" id="dark" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor" d="M12 21.9966C6.47715 21.9966 2 17.5194 2 11.9966C2 6.47373 6.47715 1.99658 12 1.99658C17.5228 1.99658 22 6.47373 22 11.9966C22 17.5194 17.5228 21.9966 12 21.9966ZM5.32889 16.4219C6.76378 18.5674 9.20868 19.9801 11.9836 19.9801C16.4018 19.9801 19.9836 16.3984 19.9836 11.9801C19.9836 9.20518 18.5707 6.76021 16.4251 5.32535C17.2705 8.35312 16.5025 11.7367 14.1213 14.118C11.7401 16.4992 8.3566 17.2671 5.32889 16.4219Z"/>
                            </svg>
                            <span class="hidden">Change theme</span>
                        </label>
                    </div>
                    <!-- ========================= -->
                    <!--    End:: theme setting    -->
                    <!-- ========================= -->

                    <a href="javascript:void(0);" role="button" id="hamburger" aria-label="Hamburger"></a>

                </div>
            </header>
            <!-- End:: header -->

            <!-- Start:: intro section -->
            <section id="intro">
                <div class="container">
                    <div class="page-container page-head mb-64">
                        <h1><?php the_title() ?></h1>
                        <p>Client: Aron Willy &nbsp;|&nbsp; Project: Widdizy &nbsp;|&nbsp; Sep 21, 2023</p>
                    </div>
                    <div class="page-cover mb-48">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                    </div>
                    <div class="page-container">
                        <?php  the_content(); ?>
                    </div>
                </div>
            </section>
            <!-- End:: intro section -->
            
            <!-- Start:: related project section -->
    <!-- Start:: recent post section -->
    <section class="section">
        <div class="container">
            <h2>Related <span class="fw-semibold">Post</span></h2>
            <div id="blog_cards" class="swiper" data-animate="fade-up">
                <div class="swiper-wrapper">
                    <?php 
                            $args = array(
                                'post_type' => 'portfolio',
                                'posts_per_page' => 5,
                                );
                            $query = new WP_Query( $args );
                            
                            if ($query-> have_posts() ) : 
                                while($query-> have_posts()  ) : $query-> the_post();
                                ?>
                    <div class="swiper-slide">
                        <div class="card">
                            <a href="<?php the_permalink(); ?>" class="card__cover" aria-labelledby="blog_card_1">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </a>
                            <span class="card__subtitle"><?php echo get_the_date(); ?> |
                                <?php comments_number(); ?></span>
                            <div id="blog_card_1" class="h5 mb-0">
                                <a href="<?php the_permalink(); ?>"
                                    class="underline-animation"><?php the_title(); ?></a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; else: _e('No post found');
                                endif; 
                                wp_reset_postdata();
                                ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- End:: recent post section -->
            <!-- End:: related project section -->

  <?php get_footer(); ?>