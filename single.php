<?php
/**
 * Single post template.
 *
 * @package KhaterBoothTheme
 */

get_header();
?>

<main id="site-content" class="s-content s-single">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
                <div class="column lg-10 lg-offset-1">
                    <header class="entry-header">
                        <p class="entry-meta">
                            <time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>">
                                <?php echo esc_html(get_the_date()); ?>
                            </time>
                            <span class="entry-author">
                                <?php esc_html_e('by', 'khater-booth-theme'); ?>
                                <?php the_author_posts_link(); ?>
                            </span>
                            <?php if (has_category()) : ?>
                                <span class="entry-categories"><?php the_category(', '); ?></span>
                            <?php endif; ?>
                        </p>
                        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                    </header>

                    <?php if (has_post_thumbnail()) : ?>
                        <figure class="post-thumbnail">
                            <?php the_post_thumbnail('large', ['class' => 'u-fullwidth']); ?>
                        </figure>
                    <?php endif; ?>

                    <div class="entry-content">
                        <?php
                        the_content();

                        wp_link_pages([
                            'before' => '<nav class="page-links" aria-label="' . esc_attr__('Page', 'khater-booth-theme') . '">',
                            'after'  => '</nav>',
                        ]);
                        ?>
                    </div>

                    <footer class="entry-footer">
                        <?php the_tags('<p class="entry-tags">' . esc_html__('Tags: ', 'khater-booth-theme'), ', ', '</p>'); ?>
                    </footer>

                    <?php
                    the_post_navigation([
                        'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'khater-booth-theme') . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'khater-booth-theme') . '</span> <span class="nav-title">%title</span>',
                    ]);

                    if (comments_open() || get_comments_number()) {
                        comments_template();
                    }
                    ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <div class="row">
            <div class="column lg-10 lg-offset-1">
                <h1><?php esc_html_e('Nothing found', 'khater-booth-theme'); ?></h1>
                <p><?php esc_html_e('The requested post could not be found.', 'khater-booth-theme'); ?></p>
            </div>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
