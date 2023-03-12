<?php

/**
 * Template name: About Us 
 */

?>

<!-- /*
* Template Name: Append
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<?php get_header(); ?>
<?php 
    while(have_posts(  )) {
        the_post();
    }
    ?>
    <div class="site-section about-section ">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-4">
            <h2 class="section-title mb-4"><?php echo esc_html__('A small river named Duden', 'append'); ?></h2>
            <p><?php echo esc_html__('A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.','append') ?></p>
            <p class="mt-4"><a href="#" class="btn btn-primary btn-md"><?php echo esc_html( 'Book now','append' ); ?></a></p>
          </div>
          <div class="col-lg-7 pl-lg-5 position-relative ">

          <?php 
            global $wp_query;
            $args = array(
                'posts_per_page' => 3,
                'post_type' => 'about',
                'post_status' => 'publish',
            );

            $wp_query = new WP_Query($args);
            $posts = $wp_query->posts;
            wp_reset_query(  );
            ?>

            <div class="section-stack">
              <div class="image-stack">
                <div class="image-stack__item image-stack__item--top">
                    <?php
                   if ( isset( $posts[0] ) ){
                    
                    $img_url = get_the_post_thumbnail_url( $posts[0] );
                    
                    ?>
                    <img src="<?php echo esc_url($img_url); ?>" alt="">
                    <?php
                   }
                   ?>
                  
                </div>
                <div class="image-stack__item image-stack__item--bottom">
                    <?php
                    if ( isset( $posts[1] ) ){
                        $img_url = get_the_post_thumbnail_url( $posts[1] );
                        ?>
                        <img src="<?php echo esc_url($img_url); ?>" alt="">
                        <?php
                    }
                    ?>
                  
                </div>
              </div>
            </div>  

          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h4 class="font-weight-bold"><?php echo esc_html('Our Clients','append') ?></h4>
          </div>
        </div>

        <div class="owl-logos owl-carousel">
          <?php 
            $attachments = new Attachments( 'client_attachment' );
            while( $attachments->get() ) {
            $imgurl2 = $attachments->url();
            ?>
            <div class="item">
                <img src="<?php echo esc_url( $imgurl2 ); ?>" alt="Image" class="img-fluid">
            </div>
            <?php
              }
            ?>
        </div>
        
            
      </div>
      
    </div>
        

    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
              <?php
              if ( isset( $posts[2] ) ){
                $img_url = get_the_post_thumbnail_url( $posts[2] );
                ?>
                 <img src="<?php echo esc_url($img_url); ?>" alt="image" class="img-fluid rounded">
                <?php
              }
              ?>
           
          </div>
          <div class="col-lg-6 pl-lg-5">
            <h3 class="mb-4 font-weight-bold">Who We Are</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. </p>
            <ul class="list-check list-unstyled primary">
              <li>Far far away, behind the word mountains</li>
              <li>Vokalia and Consonantia there</li>
              <li>Separated they live</li>
              <li>Semantics a large language ocean</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section slider-team-wrap bg-light">
      <div class="container">

        <div class="row mb-5 align-items-center">
          <div class="col-md-6">
            <h2 class="font-weight-bold">Our Awesome Team</h2>
          </div>
          <div class="col-md-6 text-left text-md-right">
            <div class="slider-nav">
              <a href="#" class="js-prev js-custom-prev-v2"><span class="icon-arrow_back"></span></a>
              <a href="#" class="js-next js-custom-next-v2"><span class="icon-arrow_forward"></span></a>

            </div> <!-- /.slider-nav -->
          </div>
        </div>

        <div class="slider-team owl-carousel no-nav owl-3-slider">
            <?php
            $attachments = new Attachments( 'append_attachment' );
            while( $attachments->get() ) {
                $name = $attachments->field( 'reviewer_name' );
                $profession = $attachments->field( 'reviewer_profession' );
                $content = $attachments->field( 'review_content' );
                $imgurl = $attachments->url();
                ?>
                 <div class="team">
                    <div class="pic">
                    <img src="<?php echo esc_html($imgurl); ?>" alt="Image" class="img-fluid">
                    </div>
                    <h3 clas><a href="#"><span class=""><?php echo esc_html($name); ?></span></a></h3>
                    <span class="d-block position"><?php echo esc_html($profession); ?></span>
                    <p><?php echo esc_html($content); ?></p>
                    <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
                </div>
                <?php
                }
                ?>
            
        
         
          

        </div>
      </div> <!-- /.container -->
    </div> <!-- /.untree_co-section -->
        
    
    <div class="site-section overlay site-cover-2" style="background-image: url('<?php echo APPEND_ASSETS_URL;  ?>images/img_v_3-min.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto text-center">
            <h2 class="text-white mb-4">Get this template for free! :)</h2>
            <p class="mb-0"><a href="https://untree.co/" rel="noopener" class="btn btn-primary">Get it for free!</a></p>
          </div>
        </div>
      </div>
    </div>


    <?php get_footer(  ); ?>