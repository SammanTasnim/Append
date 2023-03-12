<?php get_header(); ?>
      <?php echo esc_html('You Have Searched For: ', 'append') . get_search_query(  ); ?>
      <div class="slant" style="background-image: url('assets/images/slant.svg');"></div>
    </div>

     <div class="site-section bg-light" id="blog-section">
      <div class="container">
        <div class="row">
          <?php
          while(have_posts(  )){
            the_post(  )
            ?>
            <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 mt-4">
            <div class="blog_entry">
              <?php
              $img_url = get_the_post_thumbnail_url(  );
              ?>
              <img src ="<?php echo esc_url( $img_url ); ?>" alt="Free Website Template by Free-Template.co" class="img-fluid">
                  <div class="p-4 bg-white">
                    <h3><a href="<?php echo the_permalink(  ); ?>"><?php the_title( ); ?></a></h3>
                    <span class="date"><?php echo get_the_date(  ); ?></span>
                    <p><?php echo the_excerpt(  ); ?></p>
                    <p class="more"><a href="<?php echo the_permalink(  ); ?> ">Continue reading...</a></p>
                  </div> 
            </div>
          </div>
            <?php

          }
          ?>
          
          

          
        </div>
      </div>
    </div>

 <?php get_footer(  ); ?>