<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <?php wp_head(); ?>

        <link rel="author" href="https://plus.google.com/+YOUR-PROFILE-HERE"/>

        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/favicon.png" />
        <link href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/apple-touch-icon.png" rel="apple-touch-icon" />
        <link href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76" />
        <link href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120" />
        <link href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />

		<!-- A. CSS +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/stylesheet.css">

        <!-- A. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

        <!-- B. HEAD JS +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ --> 

        <!-- B.1. Components -->
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/components.js"></script>
        
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/components/jcarousel/jquery.jcarousel.min.js"></script>
        
        <!-- B.2. Your App -->
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/app.js"></script>
        
        <!-- B.3. Load Fonts -->

        <!-- B. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    </head>

    <body <?php body_class(); ?>>  
        
    <header class="masthead grid">

            <!-- C.1.1. MASTHEAD LOGO -->

            <figure class="masthead__logo one-quarter">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/logo.png" alt="Big House Voices" class="logo" />
            </figure>

            <!-- C.1.1. END -->

            <!-- C.1.2. NAVIGATION -->

            <div class="masthead__nav one-half">

                <!-- C.1.2.1. Burger Button -->

                <a href="#burger-menu" class="reveal burger-button">

                    <div class="line line-1"></div>
                    <div class="line line-2"></div>
                    <div class="line line-3"></div>

                </a>

                <!-- C.1.2.1. End -->

                <!-- C.1.2.2. Main Navigation -->

                <nav class="primary nav">

                    <ul>
                        <li><a href="#" class="active"><span>Home</span></a></li>
                        <li><a href="#"><span>Bio</span></a></li>
                        <li><a href="#"><span>Projects</span></a></li>
                        <li><a href="#"><span>Press</span></a></li>
                        <li><a href="#"><span>Blog</span></a></li>
                        <li><a href="#"><span>Speaker</span></a></li>
                        <li><a href="#"><span>Contact</span></a></li>
                    </ul>

                </nav>

                <!-- C.1.2.2. End -->

                <!-- C.1.2.3. Social Navigation -->

                <nav class="nav-social nav">

                    <ul>
                        <li>
                            <a href="#" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/icon-linkedIn.svg" alt="LinkedIn" />
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/icon-facebook.svg" alt="FB" />
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/icon-twitter.svg" alt="Twitter" />
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/icon-youtube.svg" alt="Youtube" />
                            </a>
                        </li>
                    </ul>

                </nav>

                <!-- C.1.2.3. End -->

            </div>

            <!-- C.1.2. END -->

            <!-- C.1.3. NEWSLETTER SIGN-UP -->
            <nav class="newsletter one-quarter">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/button-newsletter.png" alt="Sign Up" />

            </nav>
            <!-- C.1.3. END -->

    </header>
        

    <!-- C.1.2.2. BURGER Navigation -->

    <nav id="burger-menu" class="hidden">

        <ul>
            <li><a href="#" class="active"><span>Home</span></a></li>
            <li><a href="#"><span>Bio</span></a></li>
            <li><a href="#"><span>Projects</span></a></li>
            <li><a href="#"><span>Press</span></a></li>
            <li><a href="#"><span>Blog</span></a></li>
            <li><a href="#"><span>Speaker</span></a></li>
            <li><a href="#"><span>Contact</span></a></li>
        </ul>

    </nav>

    <!-- C.1.2.2. End -->

        
        