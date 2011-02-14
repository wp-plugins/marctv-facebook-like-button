<?php

/*
  Plugin Name: MarcTV jQuery Facebook Like Button
  Plugin URI: http://www.marctv.de/blog/2010/08/25/marctv-wordpress-plugins/
  Description: Appends the Facebook "Like-Button" to every .single .post dom element.
  Version: 1.0
  Author: Marc Tönsing
  Author URI: http://www.marctv.de
  License: GPL2
 */

if (!is_admin()) {
  wp_enqueue_script(
          "jquery.onefblikev", WP_PLUGIN_URL . "/marctv-facebook-like-button/marctv-fb-like.js",
          array("jquery"), "1.0", 0);

  wp_enqueue_script(
          "marctv.marctv-fb-like", WP_PLUGIN_URL . "/marctv-facebook-like-button/marctv-fb-like_init.js",
          array("jquery","jquery.onefblikev"), "1.0", 0);
}
?>
