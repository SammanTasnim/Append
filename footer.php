<div class="site-footer">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4">
            <?php
            dynamic_sidebar( 'footer_left' ); 
            
            ?>
            <div class="widget">
              <h3><?php echo esc_html('Connect with us', 'append'); ?></h3>
              
              <?php
              global $append_options;
              $footer_facebook = $append_options['icon_class'];
              $footer_twitter = $append_options['icon_class2'];
              $footer_instagram = $append_options['icon_class3'];
              $header_linkedin = $append_options['icon_class4'];
              ?>
              <ul class="social list-unstyled">
                <li><a href="#"><span class="<?php echo esc_attr( $footer_facebook ); ?>"></span></a></li>
                <li><a href="#"><span class="<?php echo esc_attr( $footer_twitter ); ?>"></span></a></li>
                <li><a href="#"><span class="<?php echo esc_attr( $footer_instagram ); ?>"></span></a></li>
                <li><a href="#"><span class="<?php echo esc_attr( $footer_linkedin ); ?>"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-12">
                <div class="widget">
                  <h3>Navigations</h3>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-md-4">
                <div class="widget">
                  <ul class="links list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Work</a></li>
                    <li><a href="#">Process</a></li>
                    <li><a href="#">About Us</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-md-4">
                <div class="widget">
                  <ul class="links list-unstyled">
                    <li><a href="#">Press</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Privacy</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-md-4">
                <div class="widget">
                  <ul class="links list-unstyled">
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Process</a></li>
                    <li><a href="#">About Us</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center text-center copyright">
          <div class="col-md-8">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co" target="_blank" rel="nofollow noopener">Untree.co</a> &bullet; <a href="https://untree.co/license" target="_blank" rel="nofollow noopener">License</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    

    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    

    <?php wp_footer(  ); ?>
  </body>
  </html>