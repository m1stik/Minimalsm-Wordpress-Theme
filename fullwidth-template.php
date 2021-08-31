<?php
/*
Template Name: Full width
*/
?>

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
                        <div class="row">
                            <div class="col-12 text-left">
                                <h1><?php the_title(); ?></h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 feautured-img">
                                <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail();
                                }
                                ?>
                            </div>
                        </div>
                        <hr>
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
            else:
            ?>
            <p><?php esc_html_e("There is no posts yet", 'minimalsm') ?></p>
            <?php endif; ?>

        </div>
    </section>
<?php get_footer(); ?>