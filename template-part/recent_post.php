    <!-- Start:: recent post section -->
    <section class="section">
        <div class="container">
            <h2>Recent <span class="fw-semibold">Post</span></h2>
            <div id="blog_cards" class="swiper" data-animate="fade-up">
                <div class="swiper-wrapper">
                    <?php 
                            $args = array(
                                'post_type' => 'post',
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