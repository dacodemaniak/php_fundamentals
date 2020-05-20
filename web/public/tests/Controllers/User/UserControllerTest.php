<?php
namespace tests\Controllers\User;

use PHPUnit\Framework\TestCase;
use Adrar\Controllers\User\UserController;

use Adrar\Repositories\UserRepository;

class UserControllerTest extends TestCase {
    /**
     * Instance of UserController
     * @var UserController
     */
    private $controller;
    
    protected function setUp(): void {
        $this->controller = new UserController();
    }
    
    public function testIfRepositoryIsAnInstanceOfUserRepository() {
        $this->assertInstanceOf(UserRepository::class, $this->controller->getTestOnly("repository"));
    }
}

