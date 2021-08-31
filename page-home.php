<?php get_header(); ?>
    <section>
        <div class="container">

            <?php
                if(have_posts()):
                    while(have_posts()): the_post();
            ?>

            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12">
                    <article class="post">
                        <div class="row content">
                            <div class="col-md-12">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        <?php
            endwhile;
            endif;
        ?>
        </div>
    </section>
<?php get_footer(); ?>