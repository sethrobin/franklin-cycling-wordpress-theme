<?php
if (! defined('ABSPATH')) {
    exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<nav>
  <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo">
    <div class="logo-mark">FC</div>
    <div class="logo-text">
      Franklin Cycling
      <span>Franklin, TN · Est. 2024</span>
    </div>
  </a>
  <?php
  wp_nav_menu([
      'theme_location' => 'primary',
      'container'      => false,
      'menu_class'     => 'nav-links',
      'fallback_cb'    => 'franklin_cycling_nav_fallback',
  ]);
  ?>
</nav>
