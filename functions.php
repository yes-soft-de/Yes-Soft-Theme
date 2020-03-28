<?php

// Include NavWalker Class For Bootstrap Navigation Menu
require_once get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
// Admin Custom Function
require get_template_directory() . '/inc/functions-admin.php';
// Include Our Function admin file
require get_template_directory() . '/inc/custom-user-fields.php';
// Enqueue All Necessary Styles And Scripts
require get_template_directory() . '/inc/enqueue.php';
// Theme Support Functions
require get_template_directory() . '/inc/theme-support.php';
