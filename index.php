<?php

use App\Controllers\Errors\E404;
use App\Controllers\Errors\EDb;
use App\Errors\Exception404;
use App\Errors\ExceptionDb;
use App\Router;

require __DIR__ . '/config/lib.php';
require __DIR__ . '/App/autoload.php';


$news = \App\Models\Article::findN(5);

$loader = new \Twig\Loader\FilesystemLoader(TEMPLATES);
$twig = new \Twig\Environment($loader, ['debug' => true]);
$twig->addExtension(new \Twig\Extension\DebugExtension());
$template = $twig->load('test.php.twig');
$template->display(['news' => $news]);

//$controllerName = Router::processRoute(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
//
//try{
//    if (class_exists($controllerName, true)) {
//        $controller = new $controllerName;
//        $controller();
//    } else {
//        throw new Exception404('Не существует контроллера, соответствующего запросу');
//    };
//} catch(ExceptionDb $e) {
//    \App\Logger::logError($e);
//    $erController = new EDb();
//    $erController();
//} catch(Exception404 $e) {
//    \App\Logger::logError($e);
//    $erController = new E404();
//    $erController();
//}
