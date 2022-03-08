<?php 

namespace Controllers;

use MVC\Router;

class indexController{

  public static function index(Router $router){

    $router->render('index');

  }

  public static function aboutUs(Router $router){

    $router->render('about-us');

  }

}

?>