<?php
/**
 * Template name: Portfolio
 */
?>
<!-- /*
* Template Name: Append
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<?php get_header(); ?>

  <div class="site-section" id="portfolio-section">
      <div class="container">
        <?php
         global $wp_query;
         $args = array(
             'post_type' => 'portfolio',
             'post_status' => 'publish',
             'posts_per_page' => 5,
  
             'paged' => get_query_var('paged'),
         );
         $wp_query = new WP_Query($args);

                while ($wp_query->have_posts()) {
                    $wp_query->the_post();
        ?>

        <div class="filters" data-aos="fade-up" data-aos-delay="100">
          <?php
          
          
          $keywords = get_the_term_list( get_the_ID(), 'category' );
          
          ?>
          
            <!-- <?php
            
            // echo get_the_term_list( get_the_ID(  ), 'category', '<li class"active">', ',</li><li>', '</li>' );
            
            // if(is_array($keywords)){
            //   foreach($keywords as $keyword){
            //     $category_name = $keyword->name;
            //     var_dump($category_name);
            //   }
            // }
            ?> -->


          <!-- <ul>
            <li class="active" data-filter="*">All</li>
            <li data-filter=".packaging">Packaging</li>
            <li data-filter=".mockup">Mockup</li>
            <li data-filter=".typography">Typography</li>
            <li data-filter=".photography">Photography</li>
          </ul> -->
        
        </div>

        <div class="filters-content mb-5" data-aos="fade-up" data-aos-delay="200">
            <div class="row grid">
              
              <?php
              $posts = get_the_terms( get_the_ID(  ), 'portfolio' );
              
              if(is_array($posts)){
                foreach($posts as $post){
                  $name = $post->name;
                  $img = get_the_post_thumbnail_url( get_the_ID(), 'portfolio' );
                
                
                  
                  // var_dump($image_url);
                  // $image= $post->
                  ?>
                    <div class="isotope-card col-sm-4 all mockup">
                      <a href="" data-fancybox="gal">
                        <img src="<?php echo $img; ?>" alt="Image" class="img-fluid">
                        <div class="contents">
                          
                          <div class="cat"><?php echo esc_html( $name ); ?></div>
                        </div>
                      </a>
                    </div>
                  <?php
                }
              }
              ?>  
            </div>
          <?php
            }
          ?>
        </div>
    </div>
  </div>
  
    <!-- .untrtee_co-section -->
        

    <div class="testimonial-section bg-light">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-4 mb-5 section-title" data-aos="fade-up" data-aos-delay="0">
            
            <h2 class="mb-4 font-weight-bold heading">Testimonials</h2>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            <p><a href="#" class="btn btn-primary">Product Tour</a></p>
          </div>
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            
            <div class="testimonial--wrap">
              <div class="owl-single owl-carousel no-dots no-nav">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center mb-4">
                    <div class="photo mr-3">
                      <img src="images/person_4-min.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="author">
                      <cite class="d-block mb-0">Kaila Woodland</cite>
                      <span>Owner, Greenland, Inc.</span>
                    </div>
                  </div>
                  <blockquote>
                    <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live.&rdquo;</p>
                  </blockquote>
                </div>  

                <div class="testimonial-item">
                  <div class="d-flex align-items-center mb-4">
                    <div class="photo mr-3">
                      <img src="images/person_1-min.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="author">
                      <cite class="d-block mb-0">Kaila Woodland</cite>
                      <span>Owner, Greenland, Inc.</span>
                    </div>
                  </div>
                  <blockquote>
                    <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live.&rdquo;</p>
                  </blockquote>
                </div>  

                <div class="testimonial-item">
                  <div class="d-flex align-items-center mb-4">
                    <div class="photo mr-3">
                      <img src="images/person_2-min.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="author">
                      <cite class="d-block mb-0">Kaila Woodland</cite>
                      <span>Owner, Greenland, Inc.</span>
                    </div>
                  </div>
                  <blockquote>
                    <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live.&rdquo;</p>
                  </blockquote>
                </div>  
              </div>
              <div class="custom-nav-wrap">
                <a href="#" class="custom-owl-prev"><span class="icon-keyboard_backspace"></span></a>
                <a href="#" class="custom-owl-next"><span class="icon-keyboard_backspace"></span></a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section overlay site-cover-2" style="background-image: url('images/img_v_3-min.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto text-center">
            <h2 class="text-white mb-4">Get this template for free! :)</h2>
            <p class="mb-0"><a href="https://untree.co/" rel="noopener" class="btn btn-primary">Get it for free!</a></p>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>