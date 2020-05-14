<?php
/**
 * @name UserController
 * @author Adrar - May 2020
 * @version 1.0.0
 * @namespace Adrar\Controllers\User;
 *  Defines route handlers for User management
 */
namespace Adrar\Controllers\User;

class UserController {
    /**
     * @Route("get", "/user/login", "user_login")
     */
    public function login() {
        $template = __DIR__ . "/Views/login.view.php";
        include($template);
    }
    
    public function logout() {
        $template = __DIR__ . "/Views/logout.view.php";
        include($template);
    }
    
    public function register() {
        $template = __DIR__ . "/Views/register.view.php";
        include($template);
    }
}

