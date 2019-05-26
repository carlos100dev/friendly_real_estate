<?php

$root = (isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
$base_dir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
define('__BASE_DIR__', $base_dir);
define ('__ROOT__', $root.$base_dir);
define ('__SITE_NAME__', 'Friendly Real Estate');
define ('__ROOT_PATH__', realpath($_SERVER['DOCUMENT_ROOT'].'/'.$base_dir));
define ('__HOSTNAME__', 'localhost');
define ('__USERNAME__', 'test_user');
define ('__PASSWORD__', 'password');
define ('__DATABASE__', 'real_estate_website');
