            <!-- Start:: intro section -->
            <section id="intro">
                <div class="container">
                    <div class="page-container page-head mb-64">
                        <h1><?php the_archive_title(); ?></h1>
                        <p><?php the_archive_description(); ?></p>
                    </div>
                    <div class="row card-list mb-48">
                    <?php 
                            if ( have_posts() ) :
                            while ( have_posts() ) : the_post();
                            ?>
                        <div class="card">
                            <a href="<?php the_permalink(); ?>" class="card__cover">
                                <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
                            </a>
                            <span class="card__subtitle"><?php echo get_the_date(); ?> | <?php comments_number(); ?></span>
                            <div class="h5 mb-0">
                                <a href="<?php the_permalink(); ?>" class="underline-animation"><?php the_title(); ?></a>
                            </div>
                        </div>
                        <?php
                            endwhile;
                            endif;
                            ?>
                    </div>
                    <div class="page-foot">
                        <a href="#" class="btn btn--primary">
                            <span>Load More</span>
                            <span class="btn__icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" d="M12 4C9.4095 4 7.10606 5.23053 5.64274 7.14274L8 9.5H2V3.5L4.21863 5.71863C6.05061 3.452 8.85558 2 12 2 17.5228 2 22 6.47715 22 12H20C20 7.58172 16.4183 4 12 4ZM4 12C4 16.4183 7.58172 20 12 20 14.5905 20 16.894 18.7695 18.3573 16.8573L16 14.5 22 14.5V20.5L19.7814 18.2814C17.9494 20.548 15.1444 22 12 22 6.47715 22 2 17.5228 2 12H4Z" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </section>
            <!-- End:: intro section -->