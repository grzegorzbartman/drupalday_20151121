<?php
/**
 * @file
 * html.vars.php
 *
 * @see html.tpl.php
 */


/**
 * Implements hook_preprocess_html().
 */
function bootstrap_preprocess_html(&$variables) {
  switch (bootstrap_setting('navbar_position')) {
    case 'fixed-top':
      $variables['attributes']['class'][] = 'navbar-is-fixed-top';
      break;

    case 'fixed-bottom':
      $variables['attributes']['class'][] = 'navbar-is-fixed-bottom';
      break;

    case 'static-top':
      $variables['attributes']['class'][] = 'navbar-is-static-top';
      break;
  }
}