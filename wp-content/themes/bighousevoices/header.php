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
        <script>
          (function(d) {
            var config = {
              kitId: 'ouw7uym',
              scriptTimeout: 3000
            },
            h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
          })(document);
        </script>

        <!-- B. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    </head>
    <body <?php body_class(); ?>>
        
        <div class="page-wrapping">
        
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

		<!-- C. WORK AREA +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

            <!-- C.1. SITE HEADER --------------------------------------------------------------------------------- -->
        
			<header class="masthead">
					
                    <!-- C.1.1. MASTHEAD LOGO -->
                    
                    <figure class="masthead__logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/logo.svg" alt="Matt Silver-Vallance" />
                        </a>
                    </figure>
                    
                    <!-- C.1.1. END -->
                    
                    <!-- C.1.2. NAVIGATION -->
                    
                    <div class="masthead__nav">
                        
                        <!-- C.1.2.1. Burger Button -->
                
                        <a href="#burger-menu" class="reveal burger-button">
                        
                            <div class="line line-1"></div>
                            <div class="line line-2"></div>
                            <div class="line line-3"></div>
                        
                        </a>
                        
                        <!-- C.1.2.1. End -->
                        
                        <!-- C.1.2.2. Main Navigation -->
                        
                        <nav class="nav-main">
                        
                            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => '', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                        
                        </nav>
                        
                        <!-- C.1.2.2. End -->
                        
                        <!-- C.1.2.3. Social Navigation -->
                        
                        <nav class="nav-social">

                            <ul>
                                <li>
                                    <a href="http://www.linkedin.com/profile/view?id=89924610" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/icon-linkedIn.svg" alt="Connect with Matt Silver-Vallance on LinkedIn" />
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/TheLongunderwaterWalk" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/icon-facebook.svg" alt="Add Matt Silver-Vallance on Facebook" />
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/balloonbloke" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/icon-twitter.svg" alt="Follow Matt Silver-Vallance on Twitter" />
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UCq9Rvjt8EGKpLbPmZVLK3Rw/videos" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/icon-youtube.svg" alt="Watch what Matt Silver-Vallance get's up to next" />
                                    </a>
                                </li>
                            </ul>

                        </nav>
                        
                        <!-- C.1.2.3. End -->
                        
                    </div>
                
                    <!-- C.1.2. END -->
                
                    
                    
                    <!-- C.1.3. NEWSLETTER SIGN-UP -->
                
                    <div class="news-wrapper">
                
                    <nav class="newsletter">
                    
                        <a href="#mailchimp-signup" class="reveal">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/button-newsletter.svg" alt="Sign up for Matt's Newsletter" />
                        </a>
                        
                    </nav>
                
                    <aside class="newsletter-form hidden" id="mailchimp-signup">
                    
                        <!-- Begin MailChimp Signup Form -->
                        <form action="//lfcf.us8.list-manage.com/subscribe/post?u=e831b1eb7261dc122d524daa7&amp;id=180288ad75" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            
                            <div class="mc-field-group">
                                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter your Email Address">
                                <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button-skew">Subscribe</button>
                                <a href="#mailchimp-signup" class="reveal">No Thanks</a>
                            </div>
                            
                            <div id="mce-responses" class="clear">
                                <div class="message error" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>
                            
                            <div style="position: absolute; left: -5000px;">
                                <input type="text" name="b_e831b1eb7261dc122d524daa7_180288ad75" tabindex="-1" value="">
                            </div>
                            
                        </form>
                        
                        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                        <!--End mc_embed_signup-->
                
                    </aside>
                        
                    </div>
                
                    <!-- C.1.3. END -->
                
			</header>
        
            <!-- C.1. END ----------------------------------------------------------------------------------------- -->
