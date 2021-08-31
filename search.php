<?php get_header(); ?>
    <section>
        <div class="container">
        <?php
            if(have_posts()):
                while(have_posts()): the_post();
                    get_template_part('template-parts/content', 'search');
                endwhile;
            the_posts_pagination(
                array(
                    'prev_text' => __("< BACK", 'minimalsm'),
                    'next_text' => __("NEXT >", 'minimalsm')
                )
            );
            endif;
        ?>
        </div>
    </section>
<?php get_footer(); ?>