<?php get_header(  ); ?>
    <div class="site-section">
      <div class="container article">
        <div class="row justify-content-center align-items-stretch">
        <?php  
          while(have_posts(  )){
              the_post(  );
          }
          ?>
        <article class="col-lg-8 order-lg-2 px-lg-5">
          
          

              <h3><?php the_post(  ); ?></h3>
              <p><?php the_content(  ); ?></p>



            <div class="pt-5 categories_tags ">
                <div class="tags-div">
                    <?php
                    $tags = get_the_tags(  );
                    $a = 1;
                    if(is_array($tags)){
                        foreach($tags as $tag){
                            $tag_name = $tag -> name;
                            $tag_position = $tag -> $tags;
                        
                            $tag_link = get_term_link($tag);
                            
                            ?>
                            <p>
                                <?php
                                if (($a==1)){
                                ?>
                                <p>Tags :</p> 
                                <?php
                                    $a=$a+1;
                                ?>
                                <?php
                                }
                                ?>
                                <a href="<?php echo esc_url($tag_link); ?>">&nbsp<?php echo esc_html($tag_name); ?></a>
                            </p>
                            <?php   
                        }
                    }
                    ?>

                </div>
                <div class="cats-div">
                    <?php
                    $cats = get_the_category(  );
                    $b = 1;
                    if(is_array($cats)){
                        
                        foreach($cats as $cat){
                            $cat_name = $cat -> name;
                            $cat_ID = $cat -> cat_ID;
                            $category_link = get_category_link( $cat_ID );
                            ?>
                            <p>
                                <?php
                                    if (($b==1)){
                                    ?>
                                    <p>Categories :</p> 
                                    <?php
                                        $b=$b+1;
                                    ?>
                                    
                                    <?php
                                    }
                                    ?>
                                <a href="<?php echo esc_url( $category_link ); ?>">&nbsp<?php echo esc_html( $cat_name ); ?></a>
                                </p>
                            <?php
                        }
                    }
                    ?>
                </div>     
            </div>

                  <div class="post-single-navigation d-flex align-items-stretch">
                      <?php
                      $prev_post = get_previous_post(  );
                      if(is_object($prev_post)){
                        $title = $prev_post->post_title;
                        $post_url = get_the_permalink( $prev_post->ID );
                            ?>
                                <a href="<?php echo esc_url( $post_url ); ?>" class="mr-auto w-50 pr-4">
                                <span class="d-block"><?php echo esc_html('Previous Post', 'append') ?></span>
                                <?php echo esc_html($title); ?>
                                </a>
                            <?php

                      }
                        ?>
                        <?php 
                        $next_post = get_next_post();
                        if ( is_object($next_post) ) {
                            $title = $next_post->post_title;
                            $post_url = get_the_permalink( $next_post->ID );
                            ?>
                            <a href="<?php echo esc_url($post_url); ?>" class="ml-auto w-50 text-right pl-4">
                            <span class="d-block"><?php echo esc_html('Next Post', 'append') ?></span>
                            <?php echo esc_html($title); ?>
                            </a>
                                <?php
                        }
                        ?> 
                    
                  </div>
                      <?php 
                      if ( !post_password_required() && (comments_open() || get_comments_number()) ) {
                          comments_template();
                      }
                      ?>
        </article>

        <div class="col-md-12 col-lg-1 order-lg-1">
            <div class="share sticky-top">
                <?php 
                $shortcode_title = get_post_meta( get_the_ID(  ), '_append_text', true );             
                ?>
              <h3><?php echo do_shortcode($shortcode_title); ?></h3>
               <ul class="list-unstyled share-article">
                    <?php 
                    $boxes = get_post_meta( get_the_ID(),'_append_boxes_class', true); 
                    if(is_array($boxes)){
                        foreach($boxes as $box){
                        $icon_class = $box['_append_social_icon_class'];
                        ?>
                        <li><a href="#"><span class="<?php echo esc_attr( $icon_class ); ?>"></span></a></li>
                        <?php
                        }
                    } 
                    ?>
                
               </ul>
            </div>
          </div>
         
          <?php get_sidebar(  ); ?>
        
        </div>
        
      </div>
   </div>
        
    
    <div class="site-section overlay site-cover-2" style="background-image: url('<?php echo APPEND_ASSETS_URL;?>images/img_v_3-min.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto text-center">
            <h2 class="text-white mb-4">Get this template for free! :)</h2>
            <p class="mb-0"><a href="https://untree.co/" rel="noopener" class="btn btn-primary">Get it for free!</a></p>
          </div>
        </div>
      </div>
    </div>

<?php get_footer( ); ?>