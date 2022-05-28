<?php
// Activate toolbar
// show_admin_bar($show);
// show_admin_bar(get_theme_mod('show_admin_bar'));
// apply_filters( 'show_admin_bar', $show_admin_bar )

// activate page template option
add_theme_support( 'block-templates' );

// register menu

function register_my_menus() {
    register_nav_menus(
      array(
        // adds a menu location element
        'header-menu-left' => __('Header Menu-left'),
        'header-menu-right' => __('Header Menu-right'),
        'mobile' => __('Mobile'),
        'footer-menu' => __('Footer Menu')
        )
    );
  }
  add_action( 'init', 'register_my_menus' );


  // dynamic logo
add_theme_support( 'custom-logo' );

function header_custom_logo_setup() {
    $defaults = array(
        'height'               => 500,
        'width'                => 500,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title_line1', 'site-description' )
    );

    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'header_custom_logo_setup' );

// dynamic herobilder (1920x646)
$args = array(
    'width' => 1840,
    'height' => 900,
    'header-text' => true,
    'default-image' => get_template_directory_uri() . '/img/hero.jpg',
    'uploads' => true
);

add_theme_support('custom-header', $args);

// get and display alt text
function alt_text_display() {
    $header_id = get_header_image(get_the_ID());
    $alt = get_post_meta($header_id, '_wp_attachment_image_alt', true);
    // echo $alt ;
}

add_action( 'wp_enqueue_scripts', 'alt_text_display' );

// featured images in posts
add_theme_support( 'post-thumbnails' );

// UPDATE
// If you wish to add the alt attribute directly to get_post_thumbnail(), you can pass it as an array to the function:
// the_post_thumbnail( 'thumbnail', [ 'alt' => esc_html ( get_the_title() ) ] ); 



// custom picture sizes
add_image_size('small-size', 280, 170, array('center', 'center'));
add_image_size('medium-size', 380, 250, array('center', 'center'));
add_image_size('regular-size', 350, 225, array('center', 'center'));
add_image_size('pic_gallery', 480, 320, array('center', 'center'));
add_image_size('square', 300, 300, array('bottom', 'center'));
add_image_size('hero', 1840, 900, array('center', 'center'));
add_image_size('blog', 0, 1000, false);


// Adding custom JS
function ti_custom_javascript() {
    ?>
        <script>
            /* Hamburger Menu */
            /* Open when someone clicks on the span element */
            function openNav() {
                document.getElementById("myNav").style.width = "60%";
            }

            /* Close when someone clicks on the "x" symbol inside the overlay */
            function closeNav() {
                document.getElementById("myNav").style.width = "0%";
            }
 
        </script>
    <?php
}
add_action('wp_head', 'ti_custom_javascript');

// Pagination---------------------------------------------





// WIDGETS-------------------------------------------------
// activate Widgits area

// Frontpage widgets
// add_action('widgets_init', 'title');
    add_action('widgets_init', 'banner_area');
    add_action('widgets_init', 'front_pg_column1');
    add_action('widgets_init', 'front_pg_column2');
    add_action('widgets_init', 'front_pg_column3');
    add_action('widgets_init', 'front_pg_gallery');
    add_action('widgets_init', 'map_section');
    add_action('widgets_init', 'host_section');
    add_action('widgets_init', 'restaurant_widget_breakfast1_section');
    add_action('widgets_init', 'restaurant_widget_breakfast2_section');
    add_action('widgets_init', 'restaurant_widget_breakfast3_section');
    add_action('widgets_init', 'restaurant_widget_lunch1_section');
    add_action('widgets_init', 'restaurant_widget_lunch2_section');
    add_action('widgets_init', 'restaurant_widget_lunch3_section');
    add_action('widgets_init', 'restaurant_widget_dinner1_section');
    add_action('widgets_init', 'restaurant_widget_dinner2_section');
    add_action('widgets_init', 'restaurant_widget_dinner3_section');
    add_action('widgets_init', 'restaurant_widget_mobilegallery_section');
    add_action('widgets_init', 'cabin_widget_row1col1_section');
    add_action('widgets_init', 'cabin_widget_row1col2_section');
    add_action('widgets_init', 'cabin_widget_row1col3_section');
    add_action('widgets_init', 'cabin_widget_row2col1_section');
    add_action('widgets_init', 'cabin_widget_row2col2_section');
    add_action('widgets_init', 'cabin_widget_row2col3_section');
    add_action('widgets_init', 'cabin_widget_mobilegallery_section');
    add_action('widgets_init', 'booking_form_widget_section');
    add_action('widgets_init', 'footer_column_1_init');
    add_action('widgets_init', 'footer_column_2_init');
    add_action('widgets_init', 'footer_column_3_init');

// add_action('widgets_init', 'hosts');

// Fontpage widget areas ----------------------------------------------------
    function banner_area() {
        register_sidebar(array(
            'name'          => 'Front page: Banner',
            'id'            => 'banner_area',
            'before_sidebar' => '<section id="banner"><h2 class="dont-show">Currently at the resort</h2>',
            'after_sidebar'  => '</section>'
        ));
    }

    function front_pg_column1() {
        register_sidebar(array(
            'name'          => 'Front page: Cottages Widget',
            'id'            => 'front_pg_column1',
            'before_sidebar' => '<div class="card">',
            'after_sidebar'  => '</div>'
        ));
    }

    function front_pg_column2() {
        register_sidebar(array(
            'name'          => 'Front page: Restaurant Widget',
            'id'            => 'front_pg_column2',
            'before_sidebar' => '<div class="card">',
            'after_sidebar'  => '</div>'
        ));
    }

    function front_pg_column3() {
        register_sidebar(array(
            'name'          => 'Front page: Activities Widget',
            'id'            => 'front_pg_column3',
            'before_sidebar' => '<div class="card">',
            'after_sidebar'  => '</div>'
        ));
    }

    function front_pg_gallery() {
        register_sidebar(array(
            'name'          => 'Front page: Picture Gallery',
            'id'            => 'front_pg_gallery',
            'before_sidebar' => '<section id="picture-gallery"><h2 class="dont-show">Picture Gallery</h2>',
            'after_sidebar'  => '</section>'

        ));
    }

    function map_section() {
        register_sidebar(array(
            'name'          => 'Front page: Map Section',
            'id'            => 'map_section',
            'before_title'  => '<h2>',
            'after_title'  => '</h2>',
            'before_sidebar' => '<section id="map"><div class="content">',
            'after_sidebar'  => '</div></section>'
        ));
    }

    function host_section() {
        register_sidebar(array(
            'name'          => 'Front page: Host Section',
            'id'            => 'host_section',
            'before_sidebar' => '<section id="your-hosts">',
            'after_sidebar'  => '</section>'
        ));
    }

// Restaurant Page Widgets areas---------------------------------------------
    function restaurant_widget_breakfast1_section() {
        register_sidebar(array(
            'name'          => 'Restaurant Page: breakfast col-1',
            'id'            => 'restaurant_widget_breakfast1_section',
            'before_sidebar' => '<div class="card card-pic">',
            'after_sidebar'  => '</div>'
        ));
    }

    function restaurant_widget_breakfast2_section() {
        register_sidebar(array(
            'name'          => 'Restaurant Page: breakfast col-2',
            'id'            => 'restaurant_widget_breakfast2_section',
            'before_sidebar' => '<div class="card card-desc">',
            'after_sidebar'  => '</div>'
        ));
    }

    function restaurant_widget_breakfast3_section() {
        register_sidebar(array(
            'name'          => 'Restaurant Page: breakfast col-3',
            'id'            => 'restaurant_widget_breakfast3_section',
            'before_sidebar' => '<div class="card card-pic">',
            'after_sidebar'  => '</div>'
        ));
    }

    function restaurant_widget_lunch1_section() {
        register_sidebar(array(
            'name'          => 'Restaurant Page: Lunch col-1',
            'id'            => 'restaurant_widget_lunch1_section',
            'before_sidebar' => '<div class="card card-pic">',
            'after_sidebar'  => '</div>'
        ));
    }

    function restaurant_widget_lunch2_section() {
        register_sidebar(array(
            'name'          => 'Restaurant Page: lunch col-2',
            'id'            => 'restaurant_widget_lunch2_section',
            'before_sidebar' => '<div class="card card-pic">',
            'after_sidebar'  => '</div>'
        ));
    }

    function restaurant_widget_lunch3_section() {
        register_sidebar(array(
            'name'          => 'Restaurant Page: lunch col-3',
            'id'            => 'restaurant_widget_lunch3_section',
            'before_sidebar' => '<div class="card card-desc">',
            'after_sidebar'  => '</div>'
        ));
    }

    function restaurant_widget_dinner1_section() {
        register_sidebar(array(
            'name'          => 'Restaurant Page: dinner col-1',
            'id'            => 'restaurant_widget_dinner1_section',
            'before_sidebar' => '<div class="card card-desc">',
            'after_sidebar'  => '</div>'
        ));
    }

    function restaurant_widget_dinner2_section() {
        register_sidebar(array(
            'name'          => 'Restaurant Page: dinner col-2',
            'id'            => 'restaurant_widget_dinner2_section',
            'before_sidebar' => '<div class="card card-pic">',
            'after_sidebar'  => '</div>'
        ));
    }

    function restaurant_widget_dinner3_section() {
        register_sidebar(array(
            'name'          => 'Restaurant Page: dinner col-3',
            'id'            => 'restaurant_widget_dinner3_section',
            'before_sidebar' => '<div class="card card-pic">',
            'after_sidebar'  => '</div>'
        ));
    }

    function restaurant_widget_mobilegallery_section() {
        register_sidebar(array(
            'name'          => 'Restaurant Page: mobile gallery',
            'id'            => 'restaurant_widget_mobilegallery_section',
            'before_sidebar' => '<section id="mobile-picture-gallery">
        <h2 class="dont-show">Picture Gallery</h2>',
            'after_sidebar'  => '</section>'
        ));
    }


// CABIN widgets areas ------------------------------------------------------


    function cabin_widget_row1col1_section() {
        register_sidebar(array(
            'name'          => 'Cabin Page: row-1 col-1',
            'id'            => 'cabin_widget_row1col1_section',
            'before_sidebar' => '<div class="card card-desc">',
            'after_sidebar'  => '</div>'
        ));
    }

    function cabin_widget_row1col2_section() {
        register_sidebar(array(
            'name'          => 'Cabin Page: row-1 col-2',
            'id'            => 'cabin_widget_row1col2_section',
            'before_sidebar' => '<div class="card card-pic">',
            'after_sidebar'  => '</div>'
        ));
    }

    function cabin_widget_row1col3_section() {
        register_sidebar(array(
            'name'          => 'Cabin Page: row-1 col-3',
            'id'            => 'cabin_widget_row1col3_section',
            'before_sidebar' => '<div class="card card-pic">',
            'after_sidebar'  => '</div>'
        ));
    }

    function cabin_widget_row2col1_section() {
        register_sidebar(array(
            'name'          => 'Cabin Page: row-2 col-1',
            'id'            => 'cabin_widget_row2col1_section',
            'before_sidebar' => '<div class="card card-pic">',
            'after_sidebar'  => '</div>'
        ));
    }

    function cabin_widget_row2col2_section() {
        register_sidebar(array(
            'name'          => 'Cabin Page: row-2 col-2',
            'id'            => 'cabin_widget_row2col2_section',
            'before_sidebar' => '<div class="card card-pic">',
            'after_sidebar'  => '</div>'
        ));
    }

    function cabin_widget_row2col3_section() {
        register_sidebar(array(
            'name'          => 'Cabin Page: row-2 col-3',
            'id'            => 'cabin_widget_row2col3_section',
            'before_sidebar' => '<div class="card card-desc">',
            'after_sidebar'  => '</div>'
        ));
    }


    function cabin_widget_mobilegallery_section() {
        register_sidebar(array(
            'name'          => 'Cabin Page: mobile gallery',
            'id'            => 'cabin_widget_mobilegallery_section',
            'before_sidebar' => '<section id="mobile-picture-gallery">
            <h2 class="dont-show">Picture Gallery</h2>',
            'after_sidebar'  => '</section>'
        ));
    }



// Booking and Availability widget-------------------------------------------
    function booking_form_widget_section() {
        register_sidebar(array(
            'name'          => 'Booking Page: form',
            'id'            => 'booking_form_widget_section',
            'before_sidebar' => '<section id="booking">',
            'after_sidebar'  => '</section>'
        ));
    }


// footer widgets areas--------------------------------------------------------
    function footer_column_1_init() {
        register_sidebar(array(
            'name'          => 'Footer: column_1',
            'id'            => 'footer_column_1_init',
            'before_sidebar'=> '<div id="col-1">',
            'after_sidebar' => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'

        ));
    }

    function footer_column_2_init() {
        register_sidebar(array(
            'name'          => 'Footer: column_2',
            'id'            => 'footer_column_2_init',
            'before_sidebar'=> '<div id="col-2">',
            'after_sidebar' => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ));
    }

    function footer_column_3_init() {
        register_sidebar(array(
            'name'          => 'Footer: column_3',
            'id'            => 'footer_column_3_init',
            'before_sidebar'=> '<div id="col-3"><div id="company-info">',
            'after_sidebar' => '</div></div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ));
    }



 /*-------------------------- Custom Widgets --------------------------*/

    // gallery widget: altered actual gallery widget wordpress file.

// Banner Widget
class banner_widget extends WP_Widget {

        function __construct() {
            parent::__construct(

            // Base ID of your widget
            'banner_widget',

            // Widget name will appear in UI
            __('Banner', 'banner_widget_domain'),

            // Widget description
            array( 'description' => __( 'creates a banner with info', 'banner_widget_domain' ), )
            );
        }

        // Creating widget front-end
        public function widget( $args, $instance ) {
            //var_dump( $instance);
            $title =  ! empty( $instance['title'] ) ?  $instance['title'] : '';
            $content = ! empty( $instance['content'] ) ?  $instance['content'] : '';
            $deets = ! empty( $instance['deets'] ) ?  $instance['deets'] : '';
            $price = ! empty( $instance['price'] ) ?  $instance['price'] : '';
            $readmorelink = ! empty( $instance['readmorelink'] ) ?  $instance['readmorelink'] : '';
            $readmoretext = ! empty( $instance['readmoretext'] ) ?  $instance['readmoretext'] : '';
            $image = ! empty( $instance['image'] ) ? $instance['image'] : '';
            // title picture content deets price readmorelink rmtext
            // echo $args['before_sidebar'];
            

            if($image): ?>
                <picture><img src="<?php echo esc_url($image); ?>" alt="banner image"></div></picture>
            <?php endif;
            echo '<div class="content">';
            echo '<h3>' . $title . '</h3>';
            echo '<p>' . $content . '</p>';
            if ( ! empty( $deets ) )
                echo '<p class="content">' . $deets . ' | ' . $price . '</p>';
            echo '<a class="read-more" href="' . $readmorelink . '">' . $readmoretext . '</a>';
            // echo $args['after_sidebar'];
        }

        // Widget Backend
        public function form( $instance ) {
            if ( isset( $instance[ 'title' ] ) ) { $title = $instance[ 'title' ]; }
            else { $title = __( 'Event Title', 'card_widget_domain' ); }
            if ( isset( $instance[ 'content' ] ) ) { $content = $instance[ 'content' ]; }
            if ( isset( $instance[ 'deets' ] ) ) { $sleeps = $instance[ 'deets' ]; }
            if ( isset( $instance[ 'price' ] ) ) { $price = $instance[ 'price' ]; }
            if ( isset( $instance[ 'readmorelink' ] ) ) { $readmorelink = $instance[ 'readmorelink' ]; }
            if ( isset( $instance[ 'readmoretext' ] ) ) { $readmoretext = $instance[ 'readmoretext' ]; }
            if ( isset( $instance[ 'image' ] ) ) { $image = $instance[ 'image' ]; }

        // Widget admin form
            ?>
            <p>
                <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'content' ); ?>"><?php _e( 'Content:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'content' ); ?>" name="<?php echo $this->get_field_name( 'content' ); ?>" type="text" value="<?php echo esc_attr( $content ); ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'deets' ); ?>"><?php _e( 'Details:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'deets' ); ?>" name="<?php echo $this->get_field_name( 'deets' ); ?>" type="text" value="<?php echo esc_attr( $sleeps ); ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'price' ); ?>"><?php _e( 'Price:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'price' ); ?>" name="<?php echo $this->get_field_name( 'price' ); ?>" type="text" value="<?php echo esc_attr( $price ); ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'readmoretext' ); ?>"><?php _e( 'Read More text:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'readmoretext' ); ?>" name="<?php echo $this->get_field_name( 'readmoretext' ); ?>" type="text" value="<?php echo esc_attr( $readmoretext ); ?>" />
            </p>
            
            <p>
                <label for="<?php echo $this->get_field_id( 'readmorelink' ); ?>"><?php _e( 'Link:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'readmorelink' ); ?>" name="<?php echo $this->get_field_name( 'readmorelink' ); ?>" type="text" value="<?php echo esc_attr( $readmorelink ); ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'image' ); ?>"><?php _e( 'Image: ' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'image' ); ?>" name="<?php echo $this->get_field_name( 'image' ); ?>" type="text" value="<?php echo esc_url( $image ); ?>" />
                <button class="upload_image_button button button-primary">Upload Image</button>
            </p>

            <?php
        }

        // Updating widget replacing old instances with new
            public function update( $new_instance, $old_instance ) {
                $instance = array();
                $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
                $instance['content'] = ( ! empty( $new_instance['content'] ) ) ? strip_tags( $new_instance['content'] ) : '';
                $instance['deets'] = ( ! empty( $new_instance['deets'] ) ) ? strip_tags( $new_instance['deets'] ) : '';
                $instance['price'] = ( ! empty( $new_instance['price'] ) ) ? strip_tags( $new_instance['price'] ) : '';
                $instance['readmoretext'] = ( ! empty( $new_instance['readmoretext'] ) ) ? strip_tags( $new_instance['readmoretext'] ) : '';
                $instance['readmorelink'] = ( ! empty( $new_instance['readmorelink'] ) ) ? strip_tags( $new_instance['readmorelink'] ) : '';
                $instance['image'] = ( ! empty( $new_instance['image'] ) ) ? strip_tags( $new_instance['image'] ) : '';

                return $instance;
            }

        // Calling scripts to upload media
            public function scripts()
            {
                wp_enqueue_script( 'media-upload' );
                wp_enqueue_media();
                wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
            }

            
// Class banner_widget ends here
}

// Card Widget
class card_widget extends WP_Widget {

        function __construct() {
            parent::__construct(

            // Base ID of your widget
            'card_widget',

            // Widget name will appear in UI
            __('Card', 'card_widget_domain'),

            // Widget description
            array( 'description' => __( 'creates a card with info', 'card_widget_domain' ), )
            );
        }

        // Creating widget front-end
        public function widget( $args, $instance ) {
            // var_dump( $instance);
            $title = $instance['title'];
            $content = $instance['content'];
            $sleeps = $instance['sleeps'];
            $price = $instance['price'];

            // echo $args['before_sidebar'];
            if ( ! empty( $title ) )
                echo '<h3>' . $title . '</h3>';
                echo '<p class="content">' . $content . '</p>';
                if ( ! empty( $sleeps ) )
                    echo '<p class="content">' . $sleeps . '<br>' . $price . '</p>';
            // echo $args['after_sidebar'];
        }

        // Widget Backend
        public function form( $instance ) {
            if ( isset( $instance[ 'title' ] ) ) {
                $title = $instance[ 'title' ];
                }
            else {
                $title = __( 'Title of New card', 'card_widget_domain' );
            }
            if ( isset( $instance[ 'content' ] ) ) {
                $content = $instance[ 'content' ];
                }
            if ( isset( $instance[ 'sleeps' ] ) ) {
                $sleeps = $instance[ 'sleeps' ];
                }
            if ( isset( $instance[ 'price' ] ) ) {
                $price = $instance[ 'price' ];
                }

        // Widget admin form
            ?>
            <p>
                <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'content' ); ?>"><?php _e( 'Content:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'content' ); ?>" name="<?php echo $this->get_field_name( 'content' ); ?>" type="text" value="<?php echo esc_attr( $content ); ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'sleeps' ); ?>"><?php _e( 'Sleeps:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'sleeps' ); ?>" name="<?php echo $this->get_field_name( 'sleeps' ); ?>" type="text" value="<?php echo esc_attr( $sleeps ); ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'price' ); ?>"><?php _e( 'Price:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'price' ); ?>" name="<?php echo $this->get_field_name( 'price' ); ?>" type="text" value="<?php echo esc_attr( $price ); ?>" />
            </p>

            <?php
        }

        // Updating widget replacing old instances with new
        public function update( $new_instance, $old_instance ) {
            $instance = array();
            $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
            $instance['content'] = ( ! empty( $new_instance['content'] ) ) ? strip_tags( $new_instance['content'] ) : '';
            $instance['sleeps'] = ( ! empty( $new_instance['sleeps'] ) ) ? strip_tags( $new_instance['sleeps'] ) : '';
            $instance['price'] = ( ! empty( $new_instance['price'] ) ) ? strip_tags( $new_instance['price'] ) : '';

            return $instance;
        }


// Class card_widget ends here
}

// Map Widget
class map_section_widget extends WP_Widget {

        function __construct() {
            parent::__construct(

            // Base ID of your widget
            'map_secion_widget',

            // Widget name will appear in UI
            __('Map', 'map_section_widget_domain'),

            // Widget description
            array( 'description' => __( 'creates a formatted title for widget area', 'map_secion_widget_domain' ), )
            );
        }

        // Creating widget front-end
        public function widget( $args, $instance ) {
            // var_dump( $args);
            $or = '';
            $gps_coord_LL = '';
            // $gps_coord_d = '';

            // if( ! empty($instance['gps_coord_LL']) )
            //     $gps_coord_LL = $instance['gps_coord_LL'];
            
            $gps_coord_LL = ! empty( $instance['gps_coord_LL'] ) ? $instance['gps_coord_LL'] : '';

            if( ! empty($instance['gps_coord_d']) )
                $gps_coord_d = $instance['gps_coord_d'];

            if( ! empty($gps_coord_LL) ) 
                if( ! empty($gps_coord_d) )
                    $or = ' or ';
                
            $title = $instance['title'];
            $text = $instance['content'];
            $map = $instance['map'];

            $gps = '<span class="gps"> GPS: ' . $gps_coord_LL . $or .  $gps_coord_d . ' </span></p>';
            $content = '<p class="two-columns">' . $text . '<br>' . $gps;
            $map_link = '<div class="mapouter"><div class="gmap_canvas"><iframe title="' . $title . '" id="gmap_canvas" src="' . $map . '"></iframe></div></div>';

            // echo $args['before_sidebar'];
            if ( ! empty( $title ) )
                echo $args['before_title'];
                echo $title;
                echo $args['after_title'];
            echo $content;
            echo $map_link;
            // echo $args['after_sidebar'];
        }

        // Widget Backend
        public function form( $instance ) {
            if ( isset( $instance[ 'title' ] ) ) {
                $title = $instance[ 'title' ];
                }
            else {
                $title = __( 'New title', 'wpb_widget_domain' );
            }
            // Widget admin form
            ?>
            <p>
                <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'content' ); ?>"><?php _e( 'Content:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'content' ); ?>" name="<?php echo $this->get_field_name( 'content' ); ?>" type="text" value="<?php echo esc_attr( $content ); ?>" />
            </p>
            <p> 
                <label for="<?php echo $this->get_field_id( 'gps_coord_LL' ); ?>"><?php _e( 'GPS coord. Long&Lat:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'gps_coord_LL' ); ?>" name="<?php echo $this->get_field_name( 'gps_coord_LL' ); ?>" type="text" value="<?php echo esc_attr( $gps_coord_LL ); ?>" />
            </p>
            <p> 
                <label for="<?php echo $this->get_field_id( 'gps_coord_d' ); ?>"><?php _e( 'GPS coord. decimal:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'gps_coord_d' ); ?>" name="<?php echo $this->get_field_name( 'gps_coord_d' ); ?>" type="text" value="<?php echo esc_attr( $gps_coord_d ); ?>" />
            </p>
            <p> 
                <label for="<?php echo $this->get_field_id( 'map' ); ?>"><?php _e( 'Map Embed Link (get from <a href="https://google-map-generator.com/" target="_blank">https://google-map-generator.com/</a>:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'map' ); ?>" name="<?php echo $this->get_field_name( 'map' ); ?>" type="text" value="<?php echo esc_attr( $map ); ?>" />
            </p>

            <?php
        }

        // Updating widget replacing old instances with new
        public function update( $new_instance, $old_instance ) {
            $instance = array();
            $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
            $instance['content'] = ( ! empty( $new_instance['content'] ) ) ? strip_tags( $new_instance['content'] ) : '';
            $instance['gps_coord_LL'] = ( ! empty( $new_instance['gps_coord_LL'] ) ) ? strip_tags( $new_instance['gps_coord_LL'] ) : '';
            $instance['gps_coord_d'] = ( ! empty( $new_instance['gps_coord_d'] ) ) ? strip_tags( $new_instance['gps_coord_d'] ) : '';
            $map = $instance['map'] = ( ! empty( $new_instance['map'] ) ) ? strip_tags( $new_instance['map'] ) : '';

            return $instance;
        }

// Class map_section_widget ends here
}

// Company Info Widget
class companyInfo_widget extends WP_Widget {

        function __construct() {
            parent::__construct(

            // Base ID of your widget
            'companyInfo_widget',

            // Widget name will appear in UI
            __('Company Info', 'companyInfo_widget_domain'),

            // Widget description
            array( 'description' => __( 'creates footer area with contact info', 'companyInfo_widget_domain' ), )
            );
        }

        // Creating widget front-end
        public function widget( $args, $instance ) {
            // var_dump( $instance);
            $company_name = $instance['company_name'];
            $content = '<li>' . $instance['owners'] . '</li><li>' . $instance['address1'] . '</li><li>' . $instance['address2'] . '</li><li>' . $instance['telephone'] . '</li><li>' . $instance['email'] . '</li>';
            // echo $args['before_sidebar'];
            if ( ! empty( $company_name ) )
                echo '<p><span class="big">' . $company_name . '</span></p>';
                echo '<hr>';
                echo '<ul>' . $content . '</ul>';
                // echo $args['after_sidebar'];
        }

        // Widget Backend
        public function form( $instance ) {
            if ( isset( $instance[ 'company_name' ] ) ) {
                $company_name = $instance[ 'company_name' ];
                }
            else {
                $company_name = __( 'Company Name', 'companyInfo_widget_domain' );
            }
            if ( isset( $instance[ 'owners' ] ) ) {
                $owners = $instance[ 'owners' ];
                }
            if ( isset( $instance[ 'address1' ] ) ) {
                $address1 = $instance[ 'address1' ];
                }
            if ( isset( $instance[ 'address2' ] ) ) {
                $address2 = $instance[ 'address2' ];
                }
            if ( isset( $instance[ 'telephone' ] ) ) {
                $telephone = $instance[ 'telephone' ];
                }
            if ( isset( $instance[ 'email' ] ) ) {
                $email = $instance[ 'email' ];
                }




            // Widget admin form
            ?>
            <p>
                <label for="<?php echo $this->get_field_id( 'company_name' ); ?>"><?php _e( 'Company Name:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'company_name' ); ?>" name="<?php echo $this->get_field_name( 'company_name' ); ?>" type="text" value="<?php echo esc_attr( $company_name ); ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'owners' ); ?>"><?php _e( 'Owners:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'owners' ); ?>" name="<?php echo $this->get_field_name( 'owners' ); ?>" type="text" value="<?php echo esc_attr( $owners ); ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'address1' ); ?>"><?php _e( 'Address Line 1:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'address1' ); ?>" name="<?php echo $this->get_field_name( 'address1' ); ?>" type="text" value="<?php echo esc_attr( $address1 ); ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'address2' ); ?>"><?php _e( 'Address Line 2 (Postal Code & City):' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'address2' ); ?>" name="<?php echo $this->get_field_name( 'address2' ); ?>" type="text" value="<?php echo esc_attr( $address2 ); ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'telephone' ); ?>"><?php _e( 'Telephone:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'telephone' ); ?>" name="<?php echo $this->get_field_name( 'telephone' ); ?>" type="text" value="<?php echo esc_attr( $telephone); ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'email' ); ?>"><?php _e( 'Email:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" type="text" value="<?php echo esc_attr( $email); ?>" />
            </p>
            <?php
        }

        // Updating widget replacing old instances with new
        public function update( $new_instance, $old_instance ) {
            $instance = array();
            $instance['company_name'] = ( ! empty( $new_instance['company_name'] ) ) ? strip_tags( $new_instance['company_name'] ) : '';
            $instance['owners'] = ( ! empty( $new_instance['owners'] ) ) ? strip_tags( $new_instance['owners'] ) : '';
            $instance['address1'] = ( ! empty( $new_instance['address1'] ) ) ? strip_tags( $new_instance['address1'] ) : '';
            $instance['address2'] = ( ! empty( $new_instance['address2'] ) ) ? strip_tags( $new_instance['address2'] ) : '';
            $instance['telephone'] = ( ! empty( $new_instance['telephone'] ) ) ? strip_tags( $new_instance['telephone'] ) : '';
            $instance['email'] = ( ! empty( $new_instance['email'] ) ) ? strip_tags( $new_instance['email'] ) : '';
            return $instance;
        }

// Class companyInfo_widget ends here
}

// Host Widget
class host_section_widget extends WP_Widget {

        function __construct() {
            // Add Widget scripts
            add_action('admin_enqueue_scripts', array($this, 'scripts'));

            parent::__construct(
                // Base ID of your widget
                'host_secion_widget',

                // Widget name will appear in UI
                __('Host Section', 'host_section_widget_domain'),

                // Widget description
                array( 'description' => __( 'creates a formatted host for widget area', 'host_secion_widget_domain' ), )
                );
        }

        // Creating widget front-end
        public function widget( $args, $instance ) {
            // var_dump( $args);
                        
            $title = ! empty( $instance['title'] ) ?  $instance['title'] : '';
            $big = ! empty( $instance['big'] ) ?  $instance['big'] : '';
            $script = ! empty( $instance['script'] ) ?  $instance['script'] : '';
            $content = ! empty( $instance['content'] ) ?  $instance['content'] : '';
            $hosts = ! empty( $instance['hosts'] ) ?  $instance['hosts'] : '';
            $image1 = ! empty( $instance['image1'] ) ? $instance['image1'] : '';
            $image2 = ! empty( $instance['image2'] ) ? $instance['image2'] : '';

            $p = '<div><p><span class="big">' . $big . '</span>' . $content . '<br><br><span class="script">' . $script . '</span><br>We are your hosts, ' . $hosts . '.</p>';


            // echo $args['before_sidebar'];
            if ( ! empty( $title ) )
                echo '<h2 class="full-width">' . $title . '</h2>';
            echo '<div class="flex">' .$p;
            if($image1): ?>
                <img id="image_upload_preview" class="pic2" src="<?php echo esc_url($image1); ?>" alt="">
            <?php endif;
            echo '</div>';
            if($image2): ?>
                <img class="pic1" src="<?php echo esc_url($image2); ?>" alt="a photo of the hosts"></div>
            <?php endif;
                // echo $args['after_sidebar'];
        }
        

        // Widget Backend
        public function form( $instance ) {
            if ( isset( $instance[ 'title' ] ) ) {
                $title = $instance[ 'title' ];
                }
            else {
                $title = __( 'New title', 'wpb_widget_domain' );
            }
        
            // Widget admin form
            ?>
            <p>
                <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'big' ); ?>"><?php _e( 'Bold Text:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'big' ); ?>" name="<?php echo $this->get_field_name( 'big' ); ?>" type="text" value="<?php echo esc_attr( $big ); ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'script' ); ?>"><?php _e( 'Script Text:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'script' ); ?>" name="<?php echo $this->get_field_name( 'script' ); ?>" type="text" value="<?php echo esc_attr( $script ); ?>" />
            </p>
            <p> 
                <label for="<?php echo $this->get_field_id( 'content' ); ?>"><?php _e( 'Content:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'content' ); ?>" name="<?php echo $this->get_field_name( 'content' ); ?>" type="text" value="<?php echo esc_attr( $content ); ?>" />
            </p>
            <p> 
                <label for="<?php echo $this->get_field_id( 'hosts' ); ?>"><?php _e( 'Hosts:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'hosts' ); ?>" name="<?php echo $this->get_field_name( 'hosts' ); ?>" type="text" value="<?php echo esc_attr( $hosts ); ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'image1' ); ?>"><?php _e( 'Image 1:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'image1' ); ?>" name="<?php echo $this->get_field_name( 'image1' ); ?>" type="text" value="<?php echo esc_url( $image1 ); ?>" />
                <button class="upload_image_button button button-primary">Upload Image</button>
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'image2' ); ?>"><?php _e( 'Image 2 (small square):' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'image2' ); ?>" name="<?php echo $this->get_field_name( 'image2' ); ?>" type="text" value="<?php echo esc_url( $image2 ); ?>" />
                <button class="upload_image_button button button-primary">Upload Image</button>
            </p>
            

            <?php
        }

        // Updating widget replacing old instances with new
        // public function update( $new_instance, $old_instance ) {
        //     $instance = array();
        //     $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        //     $instance['content'] = ( ! empty( $new_instance['content'] ) ) ? strip_tags( $new_instance['content'] ) : '';
        //     $instance['big'] = ( ! empty( $new_instance['big'] ) ) ? strip_tags( $new_instance['big'] ) : '';
        //     $instance['script'] = ( ! empty( $new_instance['script'] ) ) ? strip_tags( $new_instance['script'] ) : '';
        //     $instance['hosts'] = ( ! empty( $new_instance['hosts'] ) ) ? strip_tags( $new_instance['hosts'] ) : '';
        //     $instance['image1'] = ( ! empty( $new_instance['image1'] ) ) ? $new_instance['image1'] : '';
        //     $instance['image2'] = ( ! empty( $new_instance['image2'] ) ) ? $new_instance['image2'] : '';
    
        //     return $instance;
        // }

        // Calling scripts to upload media
        public function scripts()
            {
            wp_enqueue_script( 'media-upload' );
            wp_enqueue_media();
            wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
        }
        
// Class title_widget ends here
}

// Register and load the widgets
function wpb_load_widget() {
    register_widget( 'card_widget' );
    register_widget( 'map_section_widget' );
    register_widget( 'companyInfo_widget' );
    register_widget( 'host_section_widget' );
    register_widget( 'banner_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );








