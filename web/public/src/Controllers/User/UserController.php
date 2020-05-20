<?php
/**
 * @name UserController
 * @author Adrar - May 2020
 * @version 1.0.0
 * @namespace Adrar\Controllers\User;
 *  Defines route handlers for User management
 */
namespace Adrar\Controllers\User;


use Adrar\Core\Http\HTMLResponse;
use Adrar\Entities\User;
use Adrar\Repositories\UserRepository;

class UserController {

    /**
     * Instance de la classe UserRepository
     * @var UserRepository
     */
    private $repository;
    
    public function __construct() {
        $this->repository = new UserRepository();
    }
    
    public function login() {
        $template = __DIR__ . "/Views/login.tpl";
        
        $response = new HTMLResponse($template, ["title" => "User Login", "error" => false]);
        $response->render();
    }
    
    public function processLogin() {
        $user = new User(); // Crée un objet $user de type Adrar\Entities\User
        
        $user->hydrate();
        
        // Envoyer l'objet User vers UserRepository
        $user = $this->repository->findByUsernameAndPassword($user);
        
        if ($user) {
            // @todo Créer un objet HTMLResponse avec le template "home"
            // @todo Stocker l'utilisateur dans une variable de session
            echo "Full user: <br>" . $user;
        } else {
            // @todo Retourner la page de login si échec, avec un message
            $template = __DIR__ . "/Views/login.tpl";
            
            $response = new HTMLResponse($template, ["title" => "User Login", "error" => "Authentication failed"]);
            $response->render();
        }
    }
    
    public function logout() {
        $template = __DIR__ . "/Views/logout.view.php";
        include($template);
    }
    
    public function register() {
        $template = __DIR__ . "/Views/register.tpl";
        $response = new HTMLResponse($template, ["title" => "Formulaire d'inscription"]);
        $response->render();
    }
    
    public function processRegister() {
        $user = new User(); // Crée un objet $user de type Adrar\Entities\User
        
        $user->hydrate();
        
        $this->repository->persist($user);
        
    }
}

