<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <!-- Meta Tag -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <?php 
    // Using the global argment
    global $redux_demo; 
    ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Page loader -->
    <div id="loader">
        <div id="loader_bar"></div>
    </div>

    <!-- Start:: wrapper -->
    <div id="wrapper">

        <!-- Start:: sidebar -->
        <aside id="sidebar">
            <div class="sidebar-header">
                <?php if (has_custom_logo('custom-logo')){
                    ?> <a class="navbar-brand"><?php the_custom_logo(); ?></a> <?php
                    } else{ 
                    ?><a href="<?php echo get_home_url(); ?>" class="text-logo"><?php bloginfo(); ?></a><?php
                } ?>
                <a href="javascript:void(0);" role="button" id="sidebar_close">&times;</a>
            </div>
            <div class="sidebar-body">
                <nav class="navbar">
                    <?php
                        wp_nav_menu(array(
                        'theme_location' => 'Primary_Menu',
                        ));
                        ?>
                </nav>
            </div>
            <div class="sidebar-footer">
                <ul class="social unlist">
                    <li><a href="#"> <i class="fa fa"></i> </a></li>
                </ul>
                <p><?php echo $redux_demo['opt-textarea']; ?></p>
            </div>
        </aside>
        <!-- End:: sidebar -->