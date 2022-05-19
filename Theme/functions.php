<?php
// Activate toolbar
show_admin_bar($show);

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

// featured images in posts
add_theme_support( 'post-thumbnails' );

// custom picture sizes
add_image_size('small', 280, 170, array('center', 'center'));
add_image_size('medium-size', 380, 250, array('center', 'center'));
add_image_size('regular', 350, 225, array('center', 'center'));
add_image_size('pic_gallery', 480, 320, array('center', 'center'));
add_image_size('blog');
add_image_size('hero', 1840, 900, array('center', 'center'));


// Adding custom JS
function ti_custom_javascript() {
    ?>
        <script>
            /* Hamburger Menu */
            /* Open when someone clicks on the span element */
            function openNav() {
                document.getElementById("myNav").style.width = "50%";
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
add_action('widgets_init', 'front_pg_column1');
add_action('widgets_init', 'front_pg_column2');
add_action('widgets_init', 'front_pg_column3');
add_action('widgets_init', 'front_pg_gallery');
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
add_action('widgets_init', 'footer_column_1_init');
add_action('widgets_init', 'footer_column_2_init');
add_action('widgets_init', 'footer_column_3_init');

// add_action('widgets_init', 'hosts');

function front_pg_column1() {
    register_sidebar(array(
        'name'          => 'Front page: Cottages Widget',
        'id'            => 'front_pg_column1',
        'before_sidebar' => '<article class="card">',
        'after_sidebar'  => '</article>'
    ));
}

function front_pg_column2() {
    register_sidebar(array(
        'name'          => 'Front page: Restaurant Widget',
        'id'            => 'front_pg_column2',
        'before_sidebar' => '<article class="card">',
        'after_sidebar'  => '</article>'
    ));
}

function front_pg_column3() {
    register_sidebar(array(
        'name'          => 'Front page: Activities Widget',
        'id'            => 'front_pg_column3',
        'before_sidebar' => '<article class="card">',
        'after_sidebar'  => '</article>'
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

// Restaurant Page Widgets
function restaurant_widget_breakfast1_section() {
    register_sidebar(array(
        'name'          => 'Restaurant Page: breakfast col-1',
        'id'            => 'restaurant_widget_breakfast1_section',
        'before_sidebar' => '<article class="card card-pic">',
        'after_sidebar'  => '</article>'
    ));
}

function restaurant_widget_breakfast2_section() {
    register_sidebar(array(
        'name'          => 'Restaurant Page: breakfast col-2',
        'id'            => 'restaurant_widget_breakfast2_section',
        'before_sidebar' => '<article class="card card-desc">',
        'after_sidebar'  => '</article>'
    ));
}

function restaurant_widget_breakfast3_section() {
    register_sidebar(array(
        'name'          => 'Restaurant Page: breakfast col-3',
        'id'            => 'restaurant_widget_breakfast3_section',
        'before_sidebar' => '<article class="card card-pic">',
        'after_sidebar'  => '</article>'
    ));
}

function restaurant_widget_lunch1_section() {
    register_sidebar(array(
        'name'          => 'Restaurant Page: Lunch col-1',
        'id'            => 'restaurant_widget_lunch1_section',
        'before_sidebar' => '<article class="card card-pic">',
        'after_sidebar'  => '</article>'
    ));
}

function restaurant_widget_lunch2_section() {
    register_sidebar(array(
        'name'          => 'Restaurant Page: lunch col-2',
        'id'            => 'restaurant_widget_lunch2_section',
        'before_sidebar' => '<article class="card card-pic">',
        'after_sidebar'  => '</article>'
    ));
}

function restaurant_widget_lunch3_section() {
    register_sidebar(array(
        'name'          => 'Restaurant Page: lunch col-3',
        'id'            => 'restaurant_widget_lunch3_section',
        'before_sidebar' => '<article class="card card-desc">',
        'after_sidebar'  => '</article>'
    ));
}

function restaurant_widget_dinner1_section() {
    register_sidebar(array(
        'name'          => 'Restaurant Page: dinner col-1',
        'id'            => 'restaurant_widget_dinner1_section',
        'before_sidebar' => '<article class="card card-desc">',
        'after_sidebar'  => '</article>'
    ));
}

function restaurant_widget_dinner2_section() {
    register_sidebar(array(
        'name'          => 'Restaurant Page: dinner col-2',
        'id'            => 'restaurant_widget_dinner2_section',
        'before_sidebar' => '<article class="card card-pic">',
        'after_sidebar'  => '</article>'
    ));
}

function restaurant_widget_dinner3_section() {
    register_sidebar(array(
        'name'          => 'Restaurant Page: dinner col-3',
        'id'            => 'restaurant_widget_dinner3_section',
        'before_sidebar' => '<article class="card card-pic">',
        'after_sidebar'  => '</article>'
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


// CABIN widgets ------------------------------------------------


function cabin_widget_row1col1_section() {
    register_sidebar(array(
        'name'          => 'Cabin Page: row-1 col-1',
        'id'            => 'cabin_widget_row1col1_section',
        'before_sidebar' => '<article class="card card-desc">',
        'after_sidebar'  => '</article>'
    ));
}

function cabin_widget_row1col2_section() {
    register_sidebar(array(
        'name'          => 'Cabin Page: row-1 col-2',
        'id'            => 'cabin_widget_row1col2_section',
        'before_sidebar' => '<article class="card card-pic">',
        'after_sidebar'  => '</article>'
    ));
}

function cabin_widget_row1col3_section() {
    register_sidebar(array(
        'name'          => 'Cabin Page: row-1 col-3',
        'id'            => 'cabin_widget_row1col3_section',
        'before_sidebar' => '<article class="card card-pic">',
        'after_sidebar'  => '</article>'
    ));
}

function cabin_widget_row2col1_section() {
    register_sidebar(array(
        'name'          => 'Cabin Page: row-2 col-1',
        'id'            => 'cabin_widget_row2col1_section',
        'before_sidebar' => '<article class="card card-pic">',
        'after_sidebar'  => '</article>'
    ));
}

function cabin_widget_row2col2_section() {
    register_sidebar(array(
        'name'          => 'Cabin Page: row-2 col-2',
        'id'            => 'cabin_widget_row2col2_section',
        'before_sidebar' => '<article class="card card-pic">',
        'after_sidebar'  => '</article>'
    ));
}

function cabin_widget_row2col3_section() {
    register_sidebar(array(
        'name'          => 'Cabin Page: row-2 col-3',
        'id'            => 'cabin_widget_row2col3_section',
        'before_sidebar' => '<article class="card card-desc">',
        'after_sidebar'  => '</article>'
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

//footer wigets
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
            <label for="<?php echo $this->get_field_id( 'date' ); ?>"><?php _e( 'Content:' ); ?></label>
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

// Title Widget
class title_widget extends WP_Widget {

    function __construct() {
        parent::__construct(

        // Base ID of your widget
        'title_widget',

        // Widget name will appear in UI
        __('Widget Title', 'title_widget_domain'),

        // Widget description
        array( 'description' => __( 'creates a formatted title for widget area', 'title_widget_domain' ), )
        );
    }

    // Creating widget front-end
    public function widget( $args, $instance ) {
        // var_dump( $args);
        $title = apply_filters( 'widget_title', $instance['title'] );

        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) )
            echo $args['before_title'] . $title . $args['after_title'];

            // This is where you run the code and display the output
            // echo __( 'Hello, World!', 'wpb_widget_domain' );
            echo $args['after_widget'];
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
        <?php
    }

    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }

    // Class title_widget ends here
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


// Register and load the widgets
function wpb_load_widget() {
    register_widget( 'card_widget' );
    register_widget( 'title_widget' );
    register_widget( 'companyInfo_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );








