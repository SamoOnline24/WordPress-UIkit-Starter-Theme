<?php
/**
 * The template for displaying content in a panel for post-format image
 *
 * @author nstaeger
 */

global $theme;
$image = $theme->helpers->getTileBackground(get_the_ID());

$icon = '';
switch (get_post_format()) {
    case 'image':
        $icon = 'image';
        break;
    case 'video':
        $icon = 'play';
        break;
    case 'link':
        $icon = 'link';
        break;
}
?>

<div class="nst-post-grid-tile nst-post-format-<?= get_post_format(); ?> uk-vertical-align uk-cover-background" style="background-image: url('<?= $image; ?>');">
    <div class="nst-overlay"></div>
    <div class="uk-panel uk-panel-box uk-vertical-align-middle uk-text-center uk-width-1-1">
        <article id="post-<?php the_ID(); ?>" <?php post_class(array('uk-article')); ?>>

            <a href="' . esc_url(get_permalink()) . '" class="uk-link-reset"><i class="uk-icon-<?= $icon; ?> uk-icon-large"></i></a>

            <?php the_title('<h1 class="uk-article-title"><a href="' . esc_url(get_permalink()) . '" class="uk-link-reset">', '</a></h1>'); ?>

            <p class="uk-article-meta">
                <?php printf(
                    '<span class="nst-author uk-link-reset"><a href="%1$s" rel="author"><i class="uk-icon-user"></i> %2$s</a></span>',
                    esc_url(get_author_posts_url(get_the_author_meta('ID'))),
                    get_the_author()
                ); ?>
                <?php printf(
                    '<span class="nst-entry-time uk-margin-small-left"><i class="uk-icon-clock-o"></i> <time datetime="%1$s">%2$s</time></span>',
                    esc_attr(get_the_date('c')),
                    esc_html(get_the_date())
                ); ?>
                <?php if (!post_password_required() && (comments_open() || get_comments_number())) : ?>
                    <span class="nst-comments uk-margin-small-left uk-link-reset">
                        <?php comments_popup_link('<i class="uk-icon-comment"></i> Leave a comment', '<i class="uk-icon-comment"></i> 1', '<i class="uk-icon-comment"></i> %'); ?>
                    </span>
                <?php endif; ?>
            </p>
        </article>
    </div>
</div>