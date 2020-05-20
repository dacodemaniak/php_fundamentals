<?php
namespace tests\Controllers\User;

use PHPUnit\Framework\TestCase;
use Adrar\Controllers\User\UserController;

class UserControllerTests extends TestCase {
    /**
     * Instance of UserController
     * @var UserController
     */
    private $controller;
    
    protected function setUp() {
        $this->controller = new UserController();
    }
}

