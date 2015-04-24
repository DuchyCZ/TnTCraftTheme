<?php
/**
 * Created by PhpStorm.
 * User: Duchy
 * Date: 24. 4. 2015
 * Time: 16:59
 */

function resources()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'resources');