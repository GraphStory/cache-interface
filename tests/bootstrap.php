<?php

error_reporting(-1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
date_default_timezone_set('UTC');
define('APPLICATION_PATH', realpath(__DIR__ . '/..'));

require_once APPLICATION_PATH . '/vendor/autoload.php';
