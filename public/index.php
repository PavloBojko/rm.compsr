<?php
require './../vendor/autoload.php';
use League\Plates\Engine;

$templates = new Engine('../app/views');

// echo $templates->render('profile', ['name' => 'Jonathan']);
// echo $templates->render('contact', ['tel' => 'TEL:06645678']);
echo $templates->render('about', ['title' => 'My Company']);



// $rout = [
//     '/' => 'homePageControler.php',
//     '/update' => 'updateController.php'
// ];

// foreach ($rout as $key => $value) {

//     if ($_SERVER['REDIRECT_URL'] == $key) {
//         require "./../controllers/{$value}";
//         exit;
//     }
// }
// require "./../controllers/404.php";
// exit;
