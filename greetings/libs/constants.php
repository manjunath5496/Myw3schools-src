<?php
/*
 * @author Shahrukh Khan
 * @website http://www.thesoftwareguy.in
 * @facebook https://www.facebook.com/Thesoftwareguy7
 * @twitter https://twitter.com/thesoftwareguy7
 * @googleplus https://plus.google.com/+thesoftwareguyIn
 */

// add slash / at the end
define('SITE_URL', 'http://localhost/greeting-cards-php-mysql/');

// database prefix if you use
define('DB_PREFIX', 'tbl_');
define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_USER', 'mywschoo_user');
define('DB_PASSWORD', 'maczen5496');
define('DB_DATABASE', 'mywschoo_db');

// define database tables
define('TABLE_CARDS', DB_PREFIX.'cards');
define('TABLE_SUBSCRIBERS', DB_PREFIX.'subscribers');
?>