<?php

namespace Controllers;

use MVC\Router;

class LoginController 
{
    public static function login(Router $router) {
        
        $router->render('auth/login');

    }
    
    public static function logout() {
        echo "Desde Logout";
    }

    public static function olvide() {
        echo "olvide password";
    }

    public static function recovery() {
        echo "Recuperando password";
    }

    public static function crear() {
        echo "crear cuenta";
    }
}