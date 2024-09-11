<?php
declare(strict_types=1);

require_once "database/Connection.php";
require_once "Router.php";


$host = "localhost";
$user = "root";
$password = "root";
$dbname = "user_management";

define("ROOT_PATH", realpath($_SERVER["DOCUMENT_ROOT"]));