<?php
/**
 * Created by PhpStorm.
 * User: Duchy
 * Date: 24. 4. 2015
 * Time: 13:20
 */

get_header();

?>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();

        ?>
        <article class="post">
        <article class="head"><?php the_title(); ?></article>
        <article class="info"><?php echo "Napsal: ";
            the_author();
            echo ", v: ";
            the_time('G:i, F j Y'); ?></article>
        <article class="text"><?php the_content(); ?></article>
        </article><?php
    }
} else {
    echo "";
}
?>

<?php

get_footer();
?>


