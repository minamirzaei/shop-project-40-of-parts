<?php

define("DEBUG", true);
define("PASSWORD_SALT", "xxrtrtrytyyxxxewsddxxxwssdrd");

session_start();
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/functions.php';

spl_autoload_register(function($cn) {
    $filename = __DIR__ . "/$cn.class.php";
    if (file_exists($filename)) {
        require $filename;
    }
});

$loader = new Twig_Loader_Filesystem(__DIR__ . '/../templates');

$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__ . '/../cache/compilation_cache',
    'debug' => DEBUG
        ));
if (DEBUG) {
    $twig->addExtension(new Twig_Extension_Debug());
}
$twig->addGlobal("path", "/mina.mirzaei.final.shop_project");
$twig->addGlobal("messages", getFlashMessages());
