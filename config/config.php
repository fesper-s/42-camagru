<?php
define('DB_HOST', 'db');
define('DB_NAME', 'camagru');
define('DB_USER', getenv('MYSQL_USER') ?: 'root');
define('DB_PASS', getenv('MYSQL_PASSWORD') ?: 'root');

define('BASE_URL', 'http://localhost:8080');
define('APP_NAME', 'Camagru');
