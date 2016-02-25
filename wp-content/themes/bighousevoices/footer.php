            <!-- C.3. SITE FOOTER --------------------------------------------------------------------------------- -->

			<footer class="footend">
				
                <div class="grid">

                    <!-- C.3.1. SITE LOGO -->

                    <div class="grid__footer">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/logo-white.svg" alt="Matt Silver-Vallance" />
                    </div> 

                    <!-- C.3.1. END -->

                    <!-- C.3.2. COPYRIGHT NOTICE -->

                    <div class="grid__footer">

                        <h6>Copyright &copy; Matt Silver-Vallance 2015</h6>
                        <p>Website built &amp; designed by <a href="http://crio.co.za" target="_blank">Crio Digital</a></p>

                    </div>

                    <!-- C.3.2. END -->

                    <!-- C.3.3. NAVIGATION -->

                    <div class="grid__footer last">

                        <!-- C.3.3.1. Social Navigation -->
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

                        <!-- C.3.3.1. Secondary Navigation -->
                        <nav class="nav-secondary">

                            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => '', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>

                        </nav>

                    </div>

                    <!-- C.3.3. END -->

                </div>
                    
			</footer>
        
            <!-- C.3. END ----------------------------------------------------------------------------------------- -->
        
            <!-- C.4. MOBILE MENU --------------------------------------------------------------------------------- -->
        
            <div class="mobile-navigation hidden" id="burger-menu">
                
                <div class="mobile-navigation__content">

                        <!-- C.3.3.1. Secondary Navigation -->
                        <nav class="nav-mobile">

                            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => '' ) ); ?>

                        </nav>
                    
                        <!-- C.3.3.1. Social Navigation -->
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
                    
                </div>
        
            </div>
        
            <!-- C.4. END ----------------------------------------------------------------------------------------- -->

        </div>

		<!-- C. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <?php wp_footer() ?>
        <!-- D. JAVASCRIPT ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

	        <!-- D.1. GOOGLE ANALYTICS [UNIVERSAL] -->
	        <script>
	          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	        
	          ga('create', 'UA-XXXXX-X', 'domain.com');
	          ga('send', 'pageview');
	        
	        </script>

        <!-- D. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    </body>
</html>
