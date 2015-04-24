<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<?php
/**
 * Created by PhpStorm.
 * User: Duchy
 * Date: 24. 4. 2015
 * Time: 13:20
 */

get_header();

if (have_posts()) {
    the_post();

    the_title();
    the_content();
} else {
    echo "";
}

get_footer();
?>


