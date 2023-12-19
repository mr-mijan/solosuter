<?php 
    // Using the global argment
    global $redux_demo; 
    ?>
  
  <!-- Start:: footer -->
            <footer class="container">
                <div class="footer relative">
                    <!-- Footer header -->
                    <div class="footer-head">
                        <div class="footer-content">
                            <h2 class="h1"><?php echo $redux_demo['footer_title']; ?></h2>
                            <p><?php echo $redux_demo['footer_desc']; ?></p>
                        </div>
                        <a href="#" aria-label="Scroll top" class="circle" data-offset="0">
                            <img src="<?php echo get_template_directory_uri();?>/images/icons/scroll-top.svg" alt="">
                        </a>
                    </div>
                    <!-- Footer body -->
                    <div class="footer-body fw-medium">
                        <div class="footer-body__item">
                            <span class="footer-body__title">Call:</span>
                            <a href="tel:(385)278-7858" class="underline-animation"><?php echo $redux_demo['footer_contact_info_call']; ?></a>
                        </div>
                        <div class="footer-body__item">
                            <span class="footer-body__title">Email:</span>
                            <a href="mailto:<?php echo $redux_demo['footer_contact_info_email']; ?>" class="underline-animation"><?php echo $redux_demo['footer_contact_info_email']; ?></a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End:: footer -->

        </main>
        <!-- End:: main -->

    </div>
    <!-- End:: wrapper -->

    <!-- Scripts -->
    <?php wp_footer() ?>
</body>
</html>