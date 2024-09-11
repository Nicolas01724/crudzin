<?php
declare(strict_types=1);
require_once "./src/config.php";


Router::add("/", "home");
Router::add("/login", "login");