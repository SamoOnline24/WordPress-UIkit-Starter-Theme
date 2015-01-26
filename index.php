<?php
/**
 * The main template file
 *
 * @author nstaeger
 * @since 2014-08-31
 */

global $theme;

get_header();
get_template_part('elements/base', 'header');
get_template_part('elements/base', 'navigation');
?>

<section id="main" class="uk-margin-large-top">
    <div class="uk-container uk-container-center">
        <section id="content">

<?php
    if (have_posts()) {

        echo '<div class="uk-grid-width-medium-1-3  uk-grid-width-small-1-2" data-uk-grid="{gutter: 20}">';

        while (have_posts()) {
            the_post();

            echo '<div>';
            get_template_part('content-grid', get_post_format());
            echo '</div>';
        }

        echo '</div>';

        // Previous/next page navigation.
        echo $theme->helpers->getPostsPagination();
    }
    else {
        echo '<p>Nothing found here. Sorry!</p>';
    }
?>

        </section>
    </div>
</section>

<?php

get_template_part('elements/base', 'footer');
get_footer();