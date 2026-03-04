<?php
require 'phpdotenv/src/Loader/Loader.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
?>
