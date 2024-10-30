<?php
   /*
   Plugin Name: BIGVU Embed
   Plugin URI: http://bigvu.tv/
   Description: Makes it easy to embed your BIGVU videos into WordPress.
   Version: 0.0.1
   Author: BIGVU
   Author URI: https://bigvu.tv/
   License: MIT
   */

  wp_oembed_add_provider(
    'https://desk.bigvu.tv/embed/*',
    'https://desk.bigvu.tv/oembed'
  );

?>
