<?php 

include_once get_template_directory() . '/lib/tgm.php';
include_once get_template_directory() . '/lib/broadcrumb.php';

function append_scripts(){
    define('APPEND_ASSETS_URL', get_template_directory_uri(  ) . '/assets/');
    define('APPEND_ASSETS_VERSION', time());

   // css load
    wp_enqueue_style( 'fonts-google','//fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap', array(), APPEND_ASSETS_VERSION );
    wp_enqueue_style( 'bootstrap', APPEND_ASSETS_URL . 'css/bootstrap.min.css', array(), APPEND_ASSETS_VERSION );
    wp_enqueue_style( 'owl-carosel', APPEND_ASSETS_URL . 'css/owl.carousel.min.css', array(), APPEND_ASSETS_VERSION );
    wp_enqueue_style( 'owl-theme-default', APPEND_ASSETS_URL . 'css/owl.theme.default.min.css', array(), APPEND_ASSETS_VERSION );
    wp_enqueue_style( 'icomoon', APPEND_ASSETS_URL . 'fonts/icomoon/style.css', array(), APPEND_ASSETS_VERSION );
    wp_enqueue_style( 'feather', APPEND_ASSETS_URL . 'fonts/feather/style.css', array(), APPEND_ASSETS_VERSION );
    wp_enqueue_style( 'flaticon', APPEND_ASSETS_URL . 'fonts/flaticon/font/flaticon.css', array(), APPEND_ASSETS_VERSION );
    wp_enqueue_style( 'jquery', APPEND_ASSETS_URL . 'css/jquery.fancybox.min.css', array(), APPEND_ASSETS_VERSION );
    wp_enqueue_style( 'aos', APPEND_ASSETS_URL . 'css/aos.css', array(), APPEND_ASSETS_VERSION );
    wp_enqueue_style( 'mixins', APPEND_ASSETS_URL . 'css/aos.css', array(), APPEND_ASSETS_VERSION );
    wp_enqueue_style( 'append-main', get_stylesheet_uri(), array('bootstrap'), APPEND_ASSETS_VERSION );

    // js load
    wp_enqueue_script( 'juery', APPEND_ASSETS_URL . 'js/jquery-migrate-3.0.0.min.js', array('jquery'), APPEND_ASSETS_VERSION, true );
    wp_enqueue_script( 'popper', APPEND_ASSETS_URL . 'js/popper.min.js',array('jquery'), APPEND_ASSETS_VERSION, true );
    wp_enqueue_script( 'bootstrap', APPEND_ASSETS_URL . 'js/bootstrap.min.js',array('jquery'), APPEND_ASSETS_VERSION, true );
    wp_enqueue_script( 'owl-carosel', APPEND_ASSETS_URL . 'js/owl.carousel.min.js', array('jquery'), APPEND_ASSETS_VERSION, true );
    wp_enqueue_script( 'aos', APPEND_ASSETS_URL . 'js/aos.js', array('jquery'), APPEND_ASSETS_VERSION, true );
    wp_enqueue_script( 'images', APPEND_ASSETS_URL . 'js/imagesloaded.pkgd.js', array('jquery'), APPEND_ASSETS_VERSION, true );
    wp_enqueue_script( 'isotope', APPEND_ASSETS_URL . 'js/isotope.pkgd.min.js', array('jquery'), APPEND_ASSETS_VERSION, true );
    wp_enqueue_script( 'jquery-animated', APPEND_ASSETS_URL . 'js/jquery.animateNumber.min.js', array('jquery'), APPEND_ASSETS_VERSION, true );
    wp_enqueue_script( 'steller', APPEND_ASSETS_URL . 'js/jquery.stellar.min.js', array('jquery'), APPEND_ASSETS_VERSION, true );
    wp_enqueue_script( 'jquery-waypoint', APPEND_ASSETS_URL . 'js/jquery.waypoints.min.js', array('jquery'), APPEND_ASSETS_VERSION, true );
    wp_enqueue_script( 'fancybox', APPEND_ASSETS_URL . 'js/jquery.fancybox.min.js', array('jquery'), APPEND_ASSETS_VERSION, true );
    wp_enqueue_script( 'custom', APPEND_ASSETS_URL . 'js/custom.js', array('jquery'), APPEND_ASSETS_VERSION, true );



    

}

add_action( 'wp_enqueue_scripts', 'append_scripts' );


function append_setup() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
        'primary-menu' => __('Primary Main menu', 'append')
    ) );


    
}
add_action('after_setup_theme', 'append_setup');

//Excerpt Size

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


function append_widgets_areas(){
    register_sidebar( array(
        'name'     => __('Header Index Sidebar', 'append'),
        'id'       => 'header_index_sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
    ) );
    register_sidebar( array(
        'name'     => __('Footer Left', 'append'),
        'id'       => 'footer_left',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
    ) );
    register_sidebar( array(
        'name'     => __('Header Index Sidebar', 'append'),
        'id'       => 'footer_right',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
    ) );
    register_sidebar( array(
      'name'     => __('Single page Sidebar', 'append'),
      'id'       => 'single-page-right',
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
  ) );
}

add_action( 'widgets_init', 'append_widgets_areas' );





//Comment Area

function append_single_comment_form_field($fields){
    
    
    $comment_field_html = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field_html;

    unset($fields['cookies']);
    //Field names
      
    //Name
    
    $fields['author']  = '<div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Leave a comment</h3>
                            <form action="#" class="">
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" id="name" name="author">
                        </div>';
    $fields['email']   = '<div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>';
    $fields['url']      = '<div class="form-group">
                            <label for="website">Website</label>
                            <input type="url" class="form-control" id="website" name="url">
                        </div>';
    $fields['comment']  = '<div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="comment" id="message"  class="form-control"></textarea>
                        </div>
                        

                        </form>
                        </div>';
   return $fields;
}

add_filter('comment_form_fields', 'append_single_comment_form_field');



function proshoot_single_comment_markup( $comment, $args, $depth ) {
	if ( 'div' === $args[ 'style' ] ) {
		$tag		 = 'div';
		$add_below	 = 'comment';
	} else {
		$tag		 = 'li ';
		$add_below	 = 'div-comment';
	}
	?>  
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                  <?php
                    if ( $args[ 'avatar_size' ] != 0 ) {
                        echo get_avatar( $comment, $args[ 'avatar_size' ], '', '', array( 'class' => 'comment-avatar pull-left' ) );
                    }
                    ?>
                  </div>
                  <div class="comment-body">
                    <h3><?php echo get_comment_author_link(); ?></h3>
                    <div class="meta"><?php echo esc_html( get_comment_date() ) . ' ' . esc_html__( 'at', 'append' ) . ' ' . esc_html( get_comment_time() ); ?> </div>
                    <p><?php comment_text(); ?></p>
                    <p><a href="#" class="reply">
                      <?php
                        comment_reply_link(
                        array_merge(
                        $args, array(
                          'add_below'	 => $add_below,
                          'depth'		 => $depth,
                          'max_depth'	 => $args[ 'max_depth' ]
                        ) ) );
                      ?>
                      </a>
                    </p>
                  </div>
                </li>
              </ul>
              <!-- END comment-list -->
              
              
            </div>
        <?php
	
}

//Testimonial About page

// Attachments
define( 'ATTACHMENTS_SETTINGS_SCREEN', false );
add_filter( 'attachments_default_instance', '__return_false' );




// Attachment for about us reviewrs
function append_attachments( $attachments ) {
    $fields         = array(
        array(
            'name'      => 'reviewer_name',                             // unique field name
            'type'      => 'text',                              // registered field type
            'label'     => __( 'Reviewer Name', 'attachments' ),        // label to display
        ),
        array(
            'name'      => 'reviewer_profession',                             // unique field name
            'type'      => 'text',                              // registered field type
            'label'     => __( 'Reviewer Profession', 'attachments' ),        // label to display
        ),
        array(
            'name'      => 'review_content',                           // unique field name
            'type'      => 'textarea',                          // registered field type
            'label'     => __( 'Review Content', 'attachments' ),      // label to display
        ),
    );

    $args = array(

        // title of the meta box (string)
        'label'         => 'About',

        // all post types to utilize (string|array)
        'post_type'     => array( 'page' ),

        // meta box position (string) (normal, side or advanced)
        'position'      => 'normal',

        // meta box priority (string) (high, default, low, core)
        'priority'      => 'high',

        // allowed file type(s) (array) (image|video|text|audio|application)
        'filetype'      => null,  // no filetype limit

        // include a note within the meta box (string)
        'note'          => 'Add about here!',

        // by default new Attachments will be appended to the list
        // but you can have then prepend if you set this to false
        'append'        => true,

        // text for 'Attach' button in meta box (string)
        'button_text'   => __( 'Add about', 'attachments' ),

        // text for modal 'Attach' button (string)
        'modal_text'    => __( 'Add about', 'attachments' ),

        // which tab should be the default in the modal (string) (browse|upload)
        'router'        => 'browse',

        // whether Attachments should set 'Uploaded to' (if not already set)
        'post_parent'   => false,

        // fields array
        'fields'        => $fields,

    );

    $attachments->register( 'append_attachment', $args ); // unique instance name


    
}

add_action( 'attachments_register', 'append_attachments' );

function append_about_location() {
  global $post;
  
  $selected_template = get_page_template_slug($post);
  if ( $selected_template == 'page-templates/about-us-template.php' ) {
      return true;
  }
  else {
      return false;
  }
}
add_filter('attachments_location_append_attachment', 'append_about_location');















// Attachment for our clients

function appent_client_page( $attachments )
{
  $fields         = array(
    array(
        'name'      => 'company_name',                             // unique field name
        'type'      => 'text',                              // registered field type
        'label'     => __( 'Company Name', 'attachments' ),        // label to display
    ),
  );

  $args = array(

    // title of the meta box (string)
    'label'         => 'Client Attachments',

    // all post types to utilize (string|array)
    'post_type'     => array(  'page' ),

    // meta box position (string) (normal, side or advanced)
    'position'      => 'normal',

    // meta box priority (string) (high, default, low, core)
    'priority'      => 'high',

    // allowed file type(s) (array) (image|video|text|audio|application)
    'filetype'      => null,  // no filetype limit

    // include a note within the meta box (string)
    'note'          => 'Attach client-area here!',

    // by default new Attachments will be appended to the list
    // but you can have then prepend if you set this to false
    'append'        => true,

    // text for 'Attach' button in meta box (string)
    'button_text'   => __( 'Attach ClientArea', 'attachments' ),

    // text for modal 'Attach' button (string)
    'modal_text'    => __( 'Attach', 'attachments' ),

    // which tab should be the default in the modal (string) (browse|upload)
    'router'        => 'browse',

    // whether Attachments should set 'Uploaded to' (if not already set)
	'post_parent'   => false,

    // fields array
    'fields'        => $fields,

  );

  $attachments->register( 'client_attachment', $args ); // unique instance name
}

add_action( 'attachments_register', 'appent_client_page' );

function appent_client_return_page() {
    global $post_team;
    
    $selected_tp = get_page_template_slug($post_team);
    if ( $selected_tp == 'page-templates/team-members.php' ) {
        return true;
    }
    else {
        return false;
    }
}
add_filter('attachments_location_team_attachment', 'append_client_return_page');


  /*End*/

  

  //Header Image

  function append_head(){
  
       global $append_options;
       $header_image = $append_options['header_image']['url'];
       ?>
    <style>
      .overlay-svg {
      background-image: url("<?php echo esc_url( $header_image ); ?>");
      background-position: center center;
      background-repeat: no-repeat;
      position: absolute;
      height: 100vh;
      min-height: 600px;
      width: 100%;
      top: 0;
      background-size: cover; }
    </style>
    <?php
  }
  add_action( 'wp_head', 'append_head' );

?>