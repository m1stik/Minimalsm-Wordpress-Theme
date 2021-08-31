<article <?php post_class(); ?>>
    <div class="row justify-content-center no-gutters">
        <div class="col-md-8 col-sm-12 article">
            <div class="row justify-content-center no-gutters">
                <div class="col-md-8 col-sm-12 text-center">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col thumbnail">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                </div>
            </div>
            <div class="row article-meta no-gutters">
                <div class="col text-center"><p><?php echo get_the_date(); ?></p></div>
                <div class="col article-meta-link text-center"><a href="<?php the_permalink(); ?>"><?php esc_html_e('OPEN ARTICLE', 'minimalsm') ?></a></div>
                <div class="col text-center"><p><?php $categories = get_the_category(); echo esc_html($categories[0]->cat_name); ?></p></div>
            </div>
        </div>
    </div>
</article>