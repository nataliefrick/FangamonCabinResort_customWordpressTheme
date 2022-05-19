<footer>
        <!-- Menu again -->
        <section id="menu-again">
            <hr>
            <h3>Select one of the following to read more</h3>
            <nav id="nav-footer">
  
        <ul id="nav-desktop-footer">
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
        </ul>
    </div>
</nav>
        </section>
    <section id="footer">
        <?php if(is_active_sidebar('footer_column_1_init')) : ?>
            <?php dynamic_sidebar('footer_column_1_init'); ?>
        <?php endif ?>
        <?php if(is_active_sidebar('footer_column_2_init')) : ?>
            <?php dynamic_sidebar('footer_column_2_init'); ?>
        <?php endif ?>
        <?php if(is_active_sidebar('footer_column_3_init')) : ?>
            <?php dynamic_sidebar('footer_column_3_init'); ?>
        <?php endif ?>
        
    </section>
    <section id="copyright">
        <p>&copy; <?php bloginfo('name'); ?> <?php echo get_the_date( 'Y' ); ?></p>
    </section>
</footer>
    
    <!-- Hamburger Menu & Picture Gallery -->
    <script src="<?= get_template_directory_uri();?>/js/main.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f9711d7422.js" crossorigin="anonymous"></script>
    
</body>
</html>