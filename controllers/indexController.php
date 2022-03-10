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

  public static function contact(Router $router){

    $router->render('contact');

  }

  public static function proyects(Router $router){

    $router->render('proyects');

  }

}

?>