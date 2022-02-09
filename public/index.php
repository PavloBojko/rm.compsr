<?php
require './../vendor/autoload.php';

$rout = [
    '/' => 'homePageControler.php',
    '/update' => 'updateController.php'
];

foreach ($rout as $key => $value) {

    if ($_SERVER['REDIRECT_URL'] == $key) {
        require "./../controllers/{$value}";
        exit;
    }
}
require "./../controllers/404.php";
exit;
