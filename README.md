# projekt_vt22-nataliefrick-1


                <picture> <?php if ( has_post_thumbnail() ) { 
                    $alt = get_post_meta ( $image_id, '_wp_attachment_image_alt', true );
                    // the_post_thumbnail( 'large' );  
                    echo '<img alt="' . esc_html ( $alt ) . '" src="' .the_post_thumbnail( 'large' );  . '" />';?>
                </picture>