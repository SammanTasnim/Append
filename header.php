
<!doctype html>
<html <?php language_attributes(  ); ?> >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />


  

  <?php wp_head(); ?>
</head>
<body>


    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <div class="container">


      <nav class="site-nav">
        <div class="logo">
          <a href="index.html" class="text-white">
          <?php 
                    if ( has_custom_logo() ) {
                        the_custom_logo();
                    }
                    else {
                        $site_title = get_bloginfo('name');
                        $site_url = get_home_url();
                        ?> 
                        <a href="<?php echo esc_url($site_url); ?>"><?php echo esc_html($site_title); ?></a>
                        <?php
                    }
                    ?>  
          <span class="text-black">.</span></a>
        </div>
        
        <div class="row align-items-center"> 
          <div class="col-12 col-sm-12 col-lg-12 site-navigation text-center">
            <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu">
              <<?php 
                wp_nav_menu( array(
                    'theme_location' => 'primary-menu',
                    //*'walker' => new WP_Bootstrap_Navwalker(),
                    'menu_class' => 'site-menu',
                    ) );
                ?>
            </ul>

            <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right menu-absolute">
                <li class="cta-button"><a href="https://untree.co/" target="_blank">Free Templates</a></li>
            </ul>

            <a href="#" class="burger light ml-auto site-menu-toggle js-menu-toggle d-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                 <span></span>
            </a>

          </div>
        </div>  
        
        
        
      </nav> <!-- END nav -->
      
    </div> <!-- END container -->


    <div class="hero-slant overlay" data-stellar-background-ratio="0.5" style="background-image: url('<?php echo APPEND_ASSETS_URL; ?>images/hero-min.jpg')">
    <img src="images/hero-min.jpg" alt="">

      <div class="container">
        <!--Index php-->
          <?php
          if(is_home(  )){
            ?>
            <div class="row align-items-center justify-content-between">
              <div class="col-lg-7 intro">
                    <h1 class="text-white font-weight-bold mb-4" data-aos="fade-up" data-aos-delay="0">We turn ideas into extraordinary digital products</h1>
                    <p class="text-white mb-4" data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
                    
                      <div class="mc4wp-form-fields-out">
                          <?php
                            dynamic_sidebar( 'header_index_sidebar' );
                        
                          ?>
                  
                      </div>
               </div>
          </div>
          <?php
          }
          ?>
           <?php
          if(is_page_template( 'page-templates/elementor-page.php' )){
            ?>
            <div class="row align-items-center justify-content-between">
              <div class="col-lg-7 intro">
                    <h1 class="text-white font-weight-bold mb-4" data-aos="fade-up" data-aos-delay="0">We turn ideas into extraordinary digital products</h1>
                    <p class="text-white mb-4" data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
                    
                      <div class="mc4wp-form-fields-out">
                          <?php
                            dynamic_sidebar( 'header_index_sidebar' );
                        
                          ?>
                  
                      </div>
               </div>
          </div>
          <?php
          }
          ?>
          <!--Single page-->
        <?php
          if(is_single(  )){
            ?>
              <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 intro text-center">
                  
                    <h1 class="text-white font-weight-bold mb-4" data-aos="fade-up" data-aos-delay="0">
                    <?php
                      wp_title();
                    ?>
                    </h1>
                    <p class="text-white mb-4" data-aos="fade-up" data-aos-delay="100"><?php append_breadcrumb(); ?></p>
                </div>
              </div>
              <?php
              }
            ?>
            <!--Contact US temp-->
            <?php
            if(is_page_template( 'page-templates/contact-us-template.php' )){
              ?>
                    <div class="row align-items-center justify-content-center">
                      <div class="col-lg-7 intro text-center">
                        <h1 class="text-white font-weight-bold mb-4" data-aos="fade-up" data-aos-delay="0"><?php echo esc_html('Get in Touch', 'append'); ?></h1>
                        <p class="text-white mb-4" data-aos="fade-up" data-aos-delay="100"><?php append_breadcrumb(); ?></p>
                      </div> 
                   </div>
              <?php
            }
            ?>
             <!--About temp-->
             <?php
            if(is_page_template( 'page-templates/about-us-template.php' )){
              ?>
                    <div class="row align-items-center justify-content-center">
                      <div class="col-lg-7 intro text-center">
                        <h1 class="text-white font-weight-bold mb-4" data-aos="fade-up" data-aos-delay="0"><?php echo esc_html('About Us', 'append'); ?></h1>
                        <p class="text-white mb-4" data-aos="fade-up" data-aos-delay="100"><?php echo esc_html( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live.','append' ); ?></p>
                      </div> 
                   </div>
              <?php
            }
            ?>
            <!--Portfolio temp-->
            <?php
            if(is_page_template( 'page-templates/portfolio.php' )){
              ?>
              <div class="row align-items-center justify-content-center">
                  <div class="col-lg-7 intro text-center">
                    <h1 class="text-white font-weight-bold mb-4" data-aos="fade-up" data-aos-delay="0"><?php echo esc_html('Append Portfolio', 'append'); ?></h1>
                    <p class="text-white mb-4" data-aos="fade-up" data-aos-delay="100"><?php echo esc_html( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live.', 'append-helper' ); ?></p>
                    <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-primary"><?php echo esc_html( 'Get Started', 'append-helper' ); ?></a></p>
                    
                  
                  </div>
                  
                  
                </div>
              <?php
            }
            ?>

          
       </div>
       <?php
       
       global $append_options;
       $header_image = $append_options['header_image']['url'];
       ?>
       <div class="slant" style="background-image: url('<?php echo APPEND_ASSETS_URL; ?>images/slant-grey.svg');"></div>


        
     </div>
