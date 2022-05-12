<?php

namespace Controllers;

class LoginController 
{
    public static function login() {
        echo "Desde Login";
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