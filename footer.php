<footer>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col text-center"><p><?php echo esc_html(get_theme_mod('set_copyright')); ?> . MINIMALSM</p></div>
            </div>
            <div class="row">
                <div class="col text-center wp-feautured">
                    <a href="<?php
                        
                        echo esc_url( __( 'https://wordpress.org/', 'minimalsm' ) );
                    ?>" class="imprint">
                        <?php
                            /* translators: %s: copyright string */
                            printf( esc_html__( 'Proudly powered by %s', 'minimalsm' ), 'WordPress' );

                        ?>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>