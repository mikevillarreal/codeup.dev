<?php
define('DB_HOST', '127.0.0.1');
define('DB_NAME','parks_db');
define('DB_USER','park_user');
define('DB_PASS','password'); 

require_once ('db_connect.php');
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$dbc->exec('DROP TABLE IF EXISTS national_parks');

$query = 'CREATE TABLE national_parks (
        id INT UNSIGNED NOT NULL AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL,
        description TEXT,
        location VARCHAR(100) NOT NULL,
        date_established TEXT,
        area_in_acres TEXT,
        PRIMARY KEY (id)
    )';
// Run query, if there are errors they will be thrown as PDOExceptions
$dbc->exec($query);