<?php get_header(); ?>
    <section>
        <div class="container">

        <?php
            while(have_posts()): the_post();
        ?>
            <div class="row justify-content-center">
                <div class="col-md-8 col-sm-12">
                    <article class="full-post">
                        <div class="row">
                            <div class="col-12 text-left">
                                <h1><?php the_title(); ?></h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 post-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </div>
                        <div class="row post-meta">
                            <div class="col-4 text-left">
                                <p><?php echo get_the_date(); ?></p>
                            </div>
                            <div class="col-8 text-right">
                                <p><?php the_category(', '); ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row content">
                            <div class="col-md-12">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <hr>
                        <?php if(has_tag()): ?>
                        <div class="row post-tags">
                            <div class="col-md-12">
                                <p><?php the_tags("<span>" . __('Tags: ', 'minimalsm') . "</span>", '<span>, </span>'); ?></p>
                            </div>
                        </div>
                        <?php endif;?>

                        <div class="row post-comments">
                            <div class="col-md-12">
                            <?php
                                if (comments_open() || get_comments_number()) :
                                    comments_template();
                                endif;
                                endwhile;
                            ?>
                            </div>
                        </div>
                    </article>
                </div>
                <?php
                    if (!empty(get_theme_mod('set_postsidebar'))) {
                        echo "<div class='col-md-4 col-sm-12 sidebar'>";
                        get_sidebar();
                        echo "</div>";
                    }
                ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>