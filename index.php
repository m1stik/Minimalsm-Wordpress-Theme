<?php get_header(); ?>
    <section>
        <div class="container">
        <?php
            if(have_posts()):
                while(have_posts()): the_post();
                    get_template_part('template-parts/content', get_post_format());
                endwhile;
        ?>
            <div class="row">
                <div class="col-md-6 col-sm-6 pagi justify-content-right text-center">
                    <?php previous_posts_link(__("< BACK", 'minimalsm')) ?>
                </div>
                <div class="col-md-6 col-sm-6 pagi justify-content-center text-center">
                <?php next_posts_link(__("NEXT >", 'minimalsm')) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <?php
                    $defaults = array(
                        'before'           => '<p>' . __( 'Pages:', 'minimalsm' ),
                        'after'            => '</p>',
                        'link_before'      => '',
                        'link_after'       => '',
                        'next_or_number'   => 'number',
                        'separator'        => ' ',
                        'nextpagelink'     => __( 'Next page', 'minimalsm'),
                        'previouspagelink' => __( 'Previous page', 'minimalsm' ),
                        'pagelink'         => '%',
                        'echo'             => 1
                    );
                
                        wp_link_pages( $defaults );

                ?>
                </div>
            </div>
        <?php else:
        ?>
            <p><?php esc_html_e("There is no posts yet", 'minimalsm') ?></p>
            <?php endif; ?>

        </div>
    </section>
<?php get_footer(); ?>