<?php

/**
 * Template name: Contact Us
 */

?>


<!-- /*
* Template Name: Append
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<?php get_header(  ); ?>

    <div class="section-grey bg-light">
      <div class="container bg-white p-5">

        <div class="block">
          <div class="row justify-content-center">


            <div class="col-md-12 col-lg-12 pb-4" data-aos="fade-up" data-aos-delay="200">


              <div class="row">
                <?php
                $boxes_info = get_post_meta( get_the_ID(),'_append_boxes_info_class', true); 
                if(is_array($boxes_info)){
                  foreach($boxes_info as $box_info){
                    $contact_icon = $box_info['_append_info_icon_class'];
                    $contact_text = $box_info['_append_info_text_class'];
                    ?>
                    <div class="col-lg-4">
                      <div  class="service-2 no-shadow link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                        <div class="service-icon color-1 mb-4">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="<?php echo esc_attr( $contact_icon ); ?>" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                          </svg>
                        </div> <!-- /.icon -->
                        <div class="service-contents">
                          <p><?php echo esc_html( $contact_text ); ?></p>
                        </div> <!-- /.service-contents-->
                      </div> <!-- /.service -->
                    </div>
                    <?php
                  }
                }
                ?>
                
              </div>

              <?php 
              $contact = get_post_meta( get_the_ID(  ), '_append_contact_form', true );
              echo do_shortcode( $contact );
              ?>

            </div>





          </div>

        </div>

      </div>


    </div>

    <div class="site-section">
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
        
    
    <div class="site-section overlay site-cover-2" style="background-image: url('<?php echo APPEND_ASSETS_URL; ?>images/img_v_3-min.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto text-center">
            <h2 class="text-white mb-4"><?php echo esc_html__('Get this template for free! :)','append'); ?></h2>
            <p class="mb-0"><a href="https://untree.co/" rel="noopener" class="btn btn-primary"><?php echo esc_html__('Get it for free!','append'); ?></a></p>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>