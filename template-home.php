<?php
// Template Name: Home Page
?>
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
        <div class="container relative">
            <img src="images/shapes/stars.svg" class="shape shape--3" data-animate="fade-right" alt="">
            <div class="row">
                <div class="intro-content relative">
                    <img src="images/shapes/party.svg" class="shape shape--2" data-animate="fade" data-animate-delay="800ms" alt="">
                    <h1 class="relative" data-animate="fade-up">Hello, I’m Ahana Gill Front-end Developer & UX/UI Designer <span data-animate="opacity" data-animate-delay="500ms">Based in California</span></h1>
                    <div class="link-group" data-animate="fade-up" data-animate-delay="250ms">
                        <a href="#contact" class="btn btn--primary">
                            <span>Let's Talk</span>
                            <span class="btn__icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" d="M21 3C21.5523 3 22 3.44772 22 4V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V19H20V7.3L12 14.5L2 5.5V4C2 3.44772 2.44772 3 3 3H21ZM8 15V17H0V15H8ZM5 10V12H0V10H5ZM19.5659 5H4.43414L12 11.8093L19.5659 5Z"/>
                                </svg>
                            </span>
                        </a>
                        <a href="portfolio.html" class="arrow-link underline-animation">
                            <span>My Works</span>
                            <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor" d="M12.8137 1.00819C12.8137 0.732049 12.5899 0.508192 12.3137 0.508191L7.81371 0.508191C7.53757 0.508191 7.31371 0.732049 7.31371 1.00819C7.31371 1.28433 7.53757 1.50819 7.81371 1.50819L11.8137 1.50819L11.8137 5.50819C11.8137 5.78433 12.0376 6.00819 12.3137 6.00819C12.5899 6.00819 12.8137 5.78433 12.8137 5.50819L12.8137 1.00819ZM1.35355 12.6755L12.6673 1.36174L11.9602 0.654638L0.646447 11.9683L1.35355 12.6755Z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="hero-1">
                    <div class="hero-cover relative" data-animate="fade-left">
                        <img src="images/hero/hero-1.png" class="hero-cover__image" alt="">
                        <img src="images/shapes/warm.svg" class="shape shape--1" alt="">
                        <div class="hero-border"></div>
                        <a href="#about" class="circle scroll-down" aria-label="Scroll down" data-animate="fade-down" data-animate-delay="400ms">
                            <img src="images/icons/scroll-down.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: intro section -->

    <!-- Start:: about section -->
    <section id="about" class="section">
        <div class="container">
            <div class="row">
                <!-- About info -->
                <div class="about-info" data-animate="fade-right">
                    <div class="about-info__block">
                        <div class="about-info__item">
                            <span>Name</span>
                            <div class="about-info__text fw-medium">Ahana Gill</div>
                        </div>
                        <div class="about-info__item">
                            <span>Date of birth</span>
                            <div class="about-info__text fw-medium">March, 24 1990</div>
                        </div>
                        <div class="about-info__item">
                            <span>Email id</span>
                            <a href="mailto:ahana.gill@example.com" class="about-info__text fw-medium">ahana.gill@example.com</a>
                        </div>
                        <div class="about-info__item">
                            <span>Phone no.</span>
                            <a href="tel:(385)278-7858" class="about-info__text fw-medium">(385) 278-7858</a>
                        </div>
                        <div class="about-info__item">
                            <span>Address</span>
                            <div class="about-info__text fw-medium">2614 W Campbell Ave</div>
                        </div>
                    </div>
                    <a href="#" class="btn btn--primary">
                        <span>Download Resume</span>
                        <span class="btn__icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor" d="M12.9999 16.1716L18.3638 10.8076L19.778 12.2218L11.9999 20L4.22168 12.2218L5.63589 10.8076L10.9999 16.1716V4H12.9999V16.1716Z"/>
                            </svg>
                        </span>
                    </a>
                </div>
                <!-- About content -->
                <div class="about-content" data-animate="fade-left">
                    <h2>About <span class="fw-semibold">me</span></h2>
                    <p class="fw-medium">Hello, I’m Ahana Gill, Front-end Developer and UX/UI Designer Based in California.</p>
                    <p>Crafting seamless user experiences through code and creativity, I specialize in front-end development and design. Let's bring your website to life with intuitive interfaces and visually stunning layouts, tailored to engage and inspire your audience.</p>
                    <div class="stats">
                        <div class="stats__item">
                            <span class="stats__number">10</span>
                            <p>Years of Experience</p>
                        </div>
                        <div class="stats__item">
                            <span class="stats__number">68</span>
                            <p>Happy client’s Worldwide</p>
                        </div>
                        <div class="stats__item">
                            <span class="stats__number">90</span>
                            <p>Projects Completed</p>
                        </div>
                        <div class="stats__item">
                            <span class="stats__number">15</span>
                            <p>Award & Achievements</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-block">
                <div class="row">
                    <!-- Experience -->
                    <div class="experience" data-animate="fade-right">
                        <div class="mb-48">
                            <h3>My <span class="fw-semibold">experience</span></h3>
                            <p>Experienced front-end developer & designer creating compelling digital experiences. Elevating online presence through expertly crafted interfaces and captivating designs.</p>
                        </div>
                        <div class="experience-list">
                            <div class="experience-list__item">
                                <div class="experience-list__block">
                                    <span class="experience-list__subtitle">2023 - Present</span>
                                    <span class="experience-list__title">UI/UX Team leader</span>
                                    <p>Envato Market</p>
                                </div>
                            </div>
                            <div class="experience-list__item">
                                <div class="experience-list__block">
                                    <span class="experience-list__subtitle">2021 - 23</span>
                                    <span class="experience-list__title">Front-end Developer</span>
                                    <p>Envato Market</p>
                                </div>
                            </div>
                            <div class="experience-list__item">
                                <div class="experience-list__block">
                                    <span class="experience-list__subtitle">2018 - 21</span>
                                    <span class="experience-list__title">Front-end Developer</span>
                                    <p>Envato Market</p>
                                </div>
                            </div>
                            <div class="experience-list__item">
                                <div class="experience-list__block">
                                    <span class="experience-list__subtitle">2016 - 18</span>
                                    <span class="experience-list__title">UI/UX Designer</span>
                                    <p>Envato Market</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Skill -->
                    <div class="skill" data-animate="fade-left">
                        <h3 class="mb-48">My <span class="fw-semibold">skills</span></h3>
                        <div class="skill-list">
                            <div class="skill-list__item">
                                <span class="skill-list__title fw-semibold">UI/UX Design</span>
                                <div class="progress">
                                    <div class="progress__bar" style="--progress-width: 90%">
                                        <span class="progress__badge">90%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-list__item">
                                <span class="skill-list__title fw-semibold">Graphic Design</span>
                                <div class="progress">
                                    <div class="progress__bar" style="--progress-width: 80%">
                                        <span class="progress__badge">80%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-list__item">
                                <span class="skill-list__title fw-semibold">UI Development</span>
                                <div class="progress">
                                    <div class="progress__bar" style="--progress-width: 97%">
                                        <span class="progress__badge">97%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-list__item">
                                <span class="skill-list__title fw-semibold">Angular</span>
                                <div class="progress">
                                    <div class="progress__bar" style="--progress-width: 88%">
                                        <span class="progress__badge">88%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-list__item">
                                <span class="skill-list__title fw-semibold">React</span>
                                <div class="progress">
                                    <div class="progress__bar" style="--progress-width: 82%">
                                        <span class="progress__badge">82%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: about section -->

    <!-- Start:: services section -->
    <section id="services" class="section">
        <div class="container relative">
            <span class="shape shape--4" data-animate="fade">
                <svg width="186" height="100%" viewBox="0 0 186 198" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M75.7729 17.2222L70.6186 22.3765L115.371 22.3766L110.217 17.2219L75.7729 17.2222ZM97.7723 4.77753L88.2177 4.77745L92.9949 0.000169516L97.7723 4.77753ZM127.816 34.8209L58.1738 34.8213L53.0195 39.9756L132.97 39.9757L127.816 34.8209ZM145.415 52.42L40.5747 52.4204L35.4204 57.5748L150.57 57.5748L145.415 52.42ZM163.014 70.0191L22.9756 70.0195L17.8211 75.174L168.169 75.1739L163.014 70.0191ZM180.613 87.6182L5.37668 87.6184L0.221987 92.7731L185.768 92.773L180.613 87.6182ZM185.767 105.218L0.222294 105.217L5.37703 110.372L180.613 110.372L185.767 105.218ZM168.168 122.817L17.8214 122.817L22.976 127.971L163.014 127.971L168.168 122.817ZM150.569 140.416L35.4204 140.415L40.5751 145.57L145.415 145.57L150.569 140.416ZM132.97 158.015L53.0195 158.015L58.1742 163.169L127.816 163.169L132.97 158.015ZM115.371 175.614L70.6186 175.614L75.7733 180.768L110.216 180.769L115.371 175.614ZM97.772 193.213L88.2177 193.213L92.9949 197.99L97.772 193.213Z"/>
                </svg>
            </span>
            <div class="section__head relative" data-animate="fade-up">
                <span class="section__subtitle"><?php echo $redux_demo['section_sub_heading'];?></span>
                <h2><?php echo $redux_demo['section_heading'];?></h2>
                <p><?php echo $redux_demo['section_description'];?></p>
            </div>
            <!-- Services -->
            <?php
            foreach $services as $service
            ?>
            <div class="service">
                <div class="service__item" data-animate="fade-up">
                    <div class="service__number"><?php echo $redux_demo['service_number'];?></div>
                    <div class="service__info">
                        <span><?php echo $redux_demo['service_sub_title'];?></span>
                        <span class="service__title"><?php echo $redux_demo['service_title'];?></span>
                    </div>
                    <div class="service__text">
                    <?php echo $redux_demo['service_description'];?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: services section -->

    <!-- Start:: portfolio section -->
    <section id="portfolio" class="section">
        <div class="container">
            <!-- Portfolio head -->
            <div class="portfolio-head relative">
                <div class="shape shape--5" data-animate="fade-right">
                    <img src="images/shapes/direction.svg" alt="">
                </div>
                <div class="portfolio-content" data-animate="fade" data-animate-delay="200ms">
                    <h2>Recent <span class="fw-semibold">works</span></h2>
                    <p>Discover my curated portfolio showcasing seamless user experiences and the fusion of code and creativity in engaging websites.</p>
                </div>
                <a href="portfolio.html" class="arrow-link underline-animation" data-animate="fade" data-animate-delay="200ms">
                    <span>View All</span>
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor" d="M12.8137 1.00819C12.8137 0.732049 12.5899 0.508192 12.3137 0.508191L7.81371 0.508191C7.53757 0.508191 7.31371 0.732049 7.31371 1.00819C7.31371 1.28433 7.53757 1.50819 7.81371 1.50819L11.8137 1.50819L11.8137 5.50819C11.8137 5.78433 12.0376 6.00819 12.3137 6.00819C12.5899 6.00819 12.8137 5.78433 12.8137 5.50819L12.8137 1.00819ZM1.35355 12.6755L12.6673 1.36174L11.9602 0.654638L0.646447 11.9683L1.35355 12.6755Z"/>
                    </svg>
                </a>
            </div>
            <!-- Portfolio body -->
            <div class="portfolio-body relative">
                <div id="portfolio_cards" class="swiper" data-animate="fade-up">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="portfolio-details.html" class="card__cover" aria-labelledby="portfolio_card_1">
                                    <img src="images/hero/portfolio-1.jpg" alt="">
                                </a>
                                <span class="card__subtitle">Development</span>
                                <div id="portfolio_card_1" class="h5 mb-0">
                                    <a href="portfolio-details.html" class="underline-animation">Widdizy smart home app development</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="portfolio-details.html" class="card__cover" aria-labelledby="portfolio_card_2">
                                    <img src="images/hero/portfolio-2.jpg" alt="">
                                </a>
                                <span class="card__subtitle">UI/UX Design</span>
                                <div id="portfolio_card_2" class="h5 mb-0">
                                    <a href="portfolio-details.html" class="underline-animation">Jombee web app Figma design</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="portfolio-details.html" class="card__cover" aria-labelledby="portfolio_card_3">
                                    <img src="images/hero/portfolio-3.jpg" alt="">
                                </a>
                                <span class="card__subtitle">Business Analysis</span>
                                <div id="portfolio_card_3" class="h5 mb-0">
                                    <a href="portfolio-details.html" class="underline-animation">Kneew-Show business & data analysis</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: portfolio section -->

    <!-- Start:: testimonials section -->
    <section id="testimonials" class="section">
        <div class="container">
            <div class="section__head" data-animate="fade-up">
                <span class="section__subtitle">Testimonials</span>
                <h2>What client's <span class="fw-semibold">say?</span></h2>
            </div>
            <!-- Testimonial slider -->
            <div class="testimonial" data-animate="fade-up" data-animate-delay="400ms">
                <div id="testimonial_slider" class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="images/icons/quote.svg" class="quote" alt="">
                            <p>Outstanding design, user-friendly experience, exceeded expectations. Professional, creative, and a pleasure to work with. Highly recommended for projects.</p>
                            <div class="author">
                                <div class="author__image">
                                    <img src="images/avatar.png" alt="">
                                </div>
                                <span class="author__name">Jennie Nichols</span>
                                <p>Poore Simon's</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/icons/quote.svg" class="quote" alt="">
                            <p>Outstanding design, user-friendly experience, exceeded expectations. Professional, creative, and a pleasure to work with. Highly recommended for projects.</p>
                            <div class="author">
                                <div class="author__image">
                                    <img src="images/avatar.png" alt="">
                                </div>
                                <span class="author__name">Jennie Nichols</span>
                                <p>Poore Simon's</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/icons/quote.svg" class="quote" alt="">
                            <p>Outstanding design, user-friendly experience, exceeded expectations. Professional, creative, and a pleasure to work with. Highly recommended for projects.</p>
                            <div class="author">
                                <div class="author__image">
                                    <img src="images/avatar.png" alt="">
                                </div>
                                <span class="author__name">Jennie Nichols</span>
                                <p>Poore Simon's</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: testimonials section -->

    <!-- Start:: cta section -->
    <section class="section">
        <div class="container relative">
            <img src="images/shapes/dawn.svg" class="shape shape--6" data-animate="fade" data-animate-delay="400ms" alt="">
            <div class="cta relative">
                <h2 class="cta__title" data-animate="fade-right">Have a Project? <span class="fw-semibold">Let's Discuss!</span></h2>
                <div class="cta__content" data-animate="fade-left">
                    <p>Discuss your project needs with me; together, we'll create remarkable solutions and experiences.</p>
                    <div class="link-group">
                        <a href="#" class="btn btn--secondary">
                            <span>Download Resume</span>
                            <span class="btn__icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" d="M12.9999 16.1716L18.3638 10.8076L19.778 12.2218L11.9999 20L4.22168 12.2218L5.63589 10.8076L10.9999 16.1716V4H12.9999V16.1716Z"/>
                                </svg>
                            </span>
                        </a>
                        <a href="portfolio.html" class="arrow-link underline-animation">
                            <span>My Portfolio</span>
                            <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor" d="M12.8137 1.00819C12.8137 0.732049 12.5899 0.508192 12.3137 0.508191L7.81371 0.508191C7.53757 0.508191 7.31371 0.732049 7.31371 1.00819C7.31371 1.28433 7.53757 1.50819 7.81371 1.50819L11.8137 1.50819L11.8137 5.50819C11.8137 5.78433 12.0376 6.00819 12.3137 6.00819C12.5899 6.00819 12.8137 5.78433 12.8137 5.50819L12.8137 1.00819ZM1.35355 12.6755L12.6673 1.36174L11.9602 0.654638L0.646447 11.9683L1.35355 12.6755Z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: cta section -->

    <!-- Start:: blog section -->
    <section id="blog" class="section">
        <div class="container">
            <!-- Blog head -->
            <div class="blog-head relative">
                <span class="shape shape--7">
                    <svg width="170" height="100%" viewBox="0 0 170 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M89.9868 94.6842C90.1488 96.5099 86.756 97.5095 84.9974 94.6842C83.0965 92.1885 84.4941 86.3929 89.9868 84.7198C95.1601 82.7389 103.346 86.5413 104.955 94.6842C107.005 102.514 100.815 113.077 89.9868 114.615C79.4951 116.731 66.4941 108.16 65.0397 94.6842C62.8353 81.5369 73.8404 66.1755 89.9868 64.7895C105.82 62.5215 123.595 75.8869 124.913 94.6842C127.257 113.153 111.475 133.311 89.9868 134.544C68.8161 136.964 46.2513 118.8 45.0823 94.6842C42.5923 70.8825 63.1614 45.9542 89.9868 44.8597C116.474 42.3036 143.857 65.2353 144.87 94.6842C147.512 123.804 122.138 153.531 89.9868 154.474C58.159 157.182 25.999 129.454 25.1247 94.6842C22.3464 60.2438 52.4954 25.7239 89.9868 24.9299C127.143 22.0701 164.106 54.5969 164.828 94.6842C167.761 134.459 132.804 173.749 89.9868 174.404C47.5057 177.403 5.73722 140.105 5.16703 94.6842C2.09421 49.5923 41.8352 5.50298 89.9868 5" stroke="currentColor" stroke-width="10" stroke-linecap="round"/>
                    </svg>
                </span>
                <div class="blog-content relative">
                    <span class="section__subtitle">Blogs</span>
                    <h2 class="mb-0">Recent <span class="fw-semibold">Blog</span></h2>
                </div>
                <a href="blog.html" class="arrow-link underline-animation">
                    <span>View All</span>
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor" d="M12.8137 1.00819C12.8137 0.732049 12.5899 0.508192 12.3137 0.508191L7.81371 0.508191C7.53757 0.508191 7.31371 0.732049 7.31371 1.00819C7.31371 1.28433 7.53757 1.50819 7.81371 1.50819L11.8137 1.50819L11.8137 5.50819C11.8137 5.78433 12.0376 6.00819 12.3137 6.00819C12.5899 6.00819 12.8137 5.78433 12.8137 5.50819L12.8137 1.00819ZM1.35355 12.6755L12.6673 1.36174L11.9602 0.654638L0.646447 11.9683L1.35355 12.6755Z"/>
                    </svg>
                </a>
            </div>
            <!-- Blog slider -->
            <div id="blog_cards" class="swiper" data-animate="fade-up">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                            <a href="blog-details.html" class="card__cover" aria-labelledby="blog_card_1">
                                <img src="images/hero/blog-1.jpg" alt="">
                            </a>
                            <span class="card__subtitle">24 Mar. 2023 | 8 min read</span>
                            <div id="blog_card_1" class="h5 mb-0">
                                <a href="blog-details.html" class="underline-animation">Innovation Junction: Exploring Cutting-Edge Solutions and Ideas</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <a href="blog-details.html" class="card__cover" aria-labelledby="blog_card_2">
                                <img src="images/hero/blog-2.jpg" alt="">
                            </a>
                            <span class="card__subtitle">14 Apr. 2023 | 4 min read</span>
                            <div id="blog_card_2" class="h5 mb-0">
                                <a href="blog-details.html" class="underline-animation">Navigating Tech Trends: Insights into the Ever-Evolving Digital Landscape</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <a href="blog-details.html" class="card__cover" aria-labelledby="blog_card_3">
                                <img src="images/hero/blog-3.jpg" alt="">
                            </a>
                            <span class="card__subtitle">26 May. 2023 | 5 min read</span>
                            <div id="blog_card_3" class="h5 mb-0">
                                <a href="blog-details.html" class="underline-animation">Beyond Pixels: Unveiling the Artistry in Digital Design</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- End:: blog section -->

    <!-- Start:: contact section -->
    <section id="contact" class="section">
        <div class="container">
            <div class="mb-64 relative">
                <img src="images/shapes/stars.svg" class="shape shape--9" alt="">
                <span class="section__subtitle">Let’s talk</span>
                <h2 class="mb-0">Get in <span class="fw-semibold">touch</span></h2>
            </div>
            <div class="row">
                <!-- Contact form -->
                <div class="contact-form relative">
                    <img src="images/shapes/flower.svg" class="shape shape--8" alt="">
                    <form class="relative">
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" id="email" class="form-control" placeholder="Enter your email id">
                        </div>
                        <div class="form-group">
                            <label for="msg" class="form-label">Message</label>
                            <textarea name="msg" id="msg" cols="30" rows="5" class="form-control" placeholder="Write your words"></textarea>
                        </div>
                        <button type="submit" id="contact_btn" class="btn btn--primary">
                            <span>Send Now</span>
                            <span class="btn__icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" d="M21.7264 2.95706L16.2732 22.0433C16.1222 22.5718 15.7976 22.5958 15.5561 22.1127L10.9998 13.0002L1.92266 9.36931C1.41298 9.16544 1.41929 8.86034 1.9567 8.6812L21.0429 2.31913C21.5714 2.14297 21.8745 2.43878 21.7264 2.95706ZM19.0351 5.0966L6.81197 9.17097L12.4486 11.4256L15.4893 17.507L19.0351 5.0966Z"/>
                                </svg>
                            </span>
                        </button>
                        <div id="form_message"></div>
                    </form>
                </div>
                <!-- Contact cover image -->
                <div class="contact-cover relative">
                    <span class="shape shape--10">
                        <svg width="186" height="100%" viewBox="0 0 186 198" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M75.7729 17.2222L70.6186 22.3765L115.371 22.3766L110.217 17.2219L75.7729 17.2222ZM97.7723 4.77753L88.2177 4.77745L92.9949 0.000169516L97.7723 4.77753ZM127.816 34.8209L58.1738 34.8213L53.0195 39.9756L132.97 39.9757L127.816 34.8209ZM145.415 52.42L40.5747 52.4204L35.4204 57.5748L150.57 57.5748L145.415 52.42ZM163.014 70.0191L22.9756 70.0195L17.8211 75.174L168.169 75.1739L163.014 70.0191ZM180.613 87.6182L5.37668 87.6184L0.221987 92.7731L185.768 92.773L180.613 87.6182ZM185.767 105.218L0.222294 105.217L5.37703 110.372L180.613 110.372L185.767 105.218ZM168.168 122.817L17.8214 122.817L22.976 127.971L163.014 127.971L168.168 122.817ZM150.569 140.416L35.4204 140.415L40.5751 145.57L145.415 145.57L150.569 140.416ZM132.97 158.015L53.0195 158.015L58.1742 163.169L127.816 163.169L132.97 158.015ZM115.371 175.614L70.6186 175.614L75.7733 180.768L110.216 180.769L115.371 175.614ZM97.772 193.213L88.2177 193.213L92.9949 197.99L97.772 193.213Z"/>
                        </svg>
                    </span>
                    <img src="images/hero/hero-1.png" class="contact-cover__image" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End:: contact section -->
<?php get_footer(); ?>