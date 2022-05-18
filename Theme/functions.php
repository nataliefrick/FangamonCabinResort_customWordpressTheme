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
        'footer-menu' => __('Footer Menu')
        )
    );
  }
  add_action( 'init', 'register_my_menus' );

// dynamic logo
add_theme_support( 'custom-logo' );

function header_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 100,
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
add_theme_support('custom-header');

function hero_custom_header_setup() {
    $args = array(
        'width' => 1400,
        'height' => 720,
        'header-text' => true,
        'default-image' => get_template_directory_uri() . '/img/hero.jpg',
        'uploads' => true
    );
}
add_action ( 'after_setup_theme', 'hero_custom_header_setup' );

// featured images in posts
add_theme_support( 'post-thumbnails' );

// custom picture sizes
add_image_size('about', 380, 250, array('center', 'center'));
add_image_size('regular', 350, 225, array('center', 'center'));
add_image_size('blog', 950, 400, array('center', 'center'));

// activate Widgits area
add_action('widgets_init', 'column_1_init');
add_action('widgets_init', 'column_2_init');
add_action('widgets_init', 'column_3_init');

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


 // Title Widget
class wpb_widget extends WP_Widget {

    function __construct() {
        parent::__construct(

        // Base ID of your widget
        'wpb_widget',

        // Widget name will appear in UI
        __('Skogs Widget Title', 'wpb_widget_domain'),

        // Widget description
        array( 'description' => __( 'creates a formatted title for widget area', 'wpb_widget_domain' ), )
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

    // Class wpb_widget ends here
}

// Company Info Widget
class companyInfo_widget extends WP_Widget {

    function __construct() {
        parent::__construct(

        // Base ID of your widget
        'companyInfo_widget',

        // Widget name will appear in UI
        __('Skogs Company Info', 'companyInfo_widget_domain'),

        // Widget description
        array( 'description' => __( 'creates footer area with contact info', 'companyInfo_widget_domain' ), )
        );
    }

    // Creating widget front-end
    public function widget( $args, $instance ) {
        // var_dump( $instance);
        $title1 = $instance['header_line1'];
        $title2 = $instance['header_line2'];
        $content = $instance['comp_name'] . '<br>' . $instance['address1'] . '<br>' . $instance['address2'] . '<br> Telefon: ' . $instance['telephone'];
        echo $args['before_sidebar'];
        if ( ! empty( $title1 ) )
            echo '<h2>' . $title1 . '</h2>';
            echo '<h2 class="push-left">' . $title2 . '</h2>';
            echo '<p class="push-left">' . $content . '</p>';
            echo $args['after_sidebar'];
    }

    // Widget Backend
    public function form( $instance ) {
        if ( isset( $instance[ 'header_line1' ] ) ) {
            $title1 = $instance[ 'header_line1' ];
            }
        else {
            $title1 = __( 'New title', 'companyInfo_widget_domain' );
        }
        if ( isset( $instance[ 'header_line2' ] ) ) {
            $title2 = $instance[ 'header_line2' ];
            }
        if ( isset( $instance[ 'comp_name' ] ) ) {
            $comp_name = $instance[ 'comp_name' ];
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




        // Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'header_line1' ); ?>"><?php _e( 'Title 1:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'header_line1' ); ?>" name="<?php echo $this->get_field_name( 'header_line1' ); ?>" type="text" value="<?php echo esc_attr( $title1 ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'header_line2' ); ?>"><?php _e( 'Title 2:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'header_line2' ); ?>" name="<?php echo $this->get_field_name( 'header_line2' ); ?>" type="text" value="<?php echo esc_attr( $title2 ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'comp_name' ); ?>"><?php _e( 'Full Company Name:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'comp_name' ); ?>" name="<?php echo $this->get_field_name( 'comp_name' ); ?>" type="text" value="<?php echo esc_attr( $comp_name ); ?>" />
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
        <?php
    }

    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['header_line1'] = ( ! empty( $new_instance['header_line1'] ) ) ? strip_tags( $new_instance['header_line1'] ) : '';
        $instance['header_line2'] = ( ! empty( $new_instance['header_line2'] ) ) ? strip_tags( $new_instance['header_line2'] ) : '';
        $instance['comp_name'] = ( ! empty( $new_instance['comp_name'] ) ) ? strip_tags( $new_instance['comp_name'] ) : '';
        $instance['address1'] = ( ! empty( $new_instance['address1'] ) ) ? strip_tags( $new_instance['address1'] ) : '';
        $instance['address2'] = ( ! empty( $new_instance['address2'] ) ) ? strip_tags( $new_instance['address2'] ) : '';
        $instance['telephone'] = ( ! empty( $new_instance['telephone'] ) ) ? strip_tags( $new_instance['telephone'] ) : '';
        return $instance;
    }

    // Class companyInfo_widget ends here
}


// Register and load the widgets
function wpb_load_widget() {
    register_widget( 'wpb_widget' );
    register_widget( 'companyInfo_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );


// Adding custom JS
function ti_custom_javascript() {
    ?>
        <script>
            /* Hamburger Menu */
            /* Open when someone clicks on the span element */
            function openNav() {
                document.getElementById("myNav").style.width = "40%";
            }
            
            /* Close when someone clicks on the "x" symbol inside the overlay */
            function closeNav() {
                document.getElementById("myNav").style.width = "0%";
            }

        </script>
    <?php
}
add_action('wp_head', 'ti_custom_javascript');


