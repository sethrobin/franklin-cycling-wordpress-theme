<?php
/**
 * Theme setup for Franklin Cycling.
 */

if (! defined('ABSPATH')) {
    exit;
}

function franklin_cycling_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);

    register_nav_menus([
        'primary' => __('Primary Menu', 'franklin-cycling'),
        'footer'  => __('Footer Menu', 'franklin-cycling'),
    ]);
}
add_action('after_setup_theme', 'franklin_cycling_setup');

function franklin_cycling_assets(): void
{
    wp_enqueue_style(
        'franklin-cycling-fonts',
        'https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;600;700;800;900&family=Barlow:wght@300;400;500;600&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'franklin-cycling-style',
        get_stylesheet_uri(),
        ['franklin-cycling-fonts'],
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'franklin_cycling_assets');

/**
 * Fallback navigation for one-page links.
 */
function franklin_cycling_nav_fallback(): void
{
    echo '<ul class="nav-links">';
    echo '<li><a href="#about">About</a></li>';
    echo '<li><a href="#programs">Programs</a></li>';
    echo '<li><a href="#events">Events</a></li>';
    echo '<li><a href="#new-rider">New Riders</a></li>';
    echo '<li><a href="#volunteer">Volunteer</a></li>';
    echo '<li><a href="#join" class="nav-cta">Join the Team</a></li>';
    echo '</ul>';
}
