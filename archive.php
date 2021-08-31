<?php get_header(); ?>
    <section>
        <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-left">
                <?php the_archive_title('<h1>', '</h1>'); ?>
            </div>
        </div>
        <?php
            if(have_posts()):
                while(have_posts()): the_post();
                    get_template_part('template-parts/content', 'archive');
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
        <?php else:
        ?>
            <p><?php esc_html_e("There is no posts yet", 'minimalsm') ?></p>
            <?php endif; ?>

        </div>
    </section>
<?php get_footer(); ?>