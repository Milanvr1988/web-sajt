<?php 

session_start();

$config = require "config.php";
// $database = $config['database'];
require "Class/Connection.php";
require "Class/Users.php";
require "Class/Videos.php";

$db = Connection::connect($config['database']);
$query = new User($db);
$contact = new User($db);
$register_user = new User($db);
$login_user = new User($db);
$upload_video = new Video($db);
$video = new Video($db);
$play = new Video($db);
$watch = new Video($db);
$laravel = new video($db);
$laravel_play = new Video($db);
$laravel_watch = new Video($db);



?>

 