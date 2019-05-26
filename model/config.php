<?php
// database credentials
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'test_user');
define('DB_PASSWORD', 'password');
define('DB_NAME', 'real_estate_website');

// attempt to connect to mysql database
try{
  $pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME,
                                  DB_USERNAME, DB_PASSWORD);
  // set the PDO error mode to Exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
  die('ERROR: Could not connect.'.$e->getMessage());
}
