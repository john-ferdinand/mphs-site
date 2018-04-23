<?php
/**
 * Created by PhpStorm.
 * User: Jordan
 * Date: 4/22/2018
 * Time: 4:15 PM
 */

$host = "localhost";
$db = "mphs_site";
$user = "root";
$pass = "";
$charset = "utf8";

$dsn = "mysql:host=$host; dbname=$db; charset=$charset";

$opt = [
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES => false,
];

$pdo = new \PDO($dsn,$user,$pass,$opt);

