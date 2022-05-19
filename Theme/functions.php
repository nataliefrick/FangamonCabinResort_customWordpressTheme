<?php

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

// footer logo
// function your_theme_customizer_setting($wp_customize) {
//     // add a setting
//     $wp_customize->add_setting('footer-logo');
//     // Add a control to upload the footer logo
//     $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer-logo', array(
//         'label' => 'Upload Footer Logo',
//         'section' => 'title_line1_tagline', //this is the section where the custom-logo from WordPress is
//         'settings' => 'footer-logo',
//         'priority' => 8 // show it just below the custom-logo
//     )));
// }
// add_action('customize_register', 'your_theme_customizer_setting');



// var_dump(get_theme_mods());



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
add_image_size('blog', 950, 400, array('center', 'center'));
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
add_action('widgets_init', 'column_1_init');
add_action('widgets_init', 'column_2_init');
add_action('widgets_init', 'column_3_init');

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
function column_1_init() {
    register_sidebar(array(
        'name'          => 'column_1',
        'id'            => 'column_1',
        'before_sidebar' => '<div id="company-info">',
        'after_sidebar'  => '</div>'

    ));
}

function column_2_init() {
    register_sidebar(array(
        'name'          => 'column_2',
        'id'            => 'column_2',
        'before_sidebar'=> '<div>',
        'after_sidebar' => '</div>',
        'before_title'  => '<h3 class="green">',
        'after_title'   => '</h3>'
    ));
}

function column_3_init() {
    register_sidebar(array(
        'name'          => 'column_3',
        'id'            => 'column_3',
        'before_title'  => '<h3 class="green">',
        'after_title'   => '</h3>'
    ));
}

 /*-------------------------- Custom Widgets --------------------------*/

// gallery widget: altered actual gallery widget wordpress file.

// Company Info Widget
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


// Register and load the widgets
function wpb_load_widget() {
    register_widget( 'card_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );








