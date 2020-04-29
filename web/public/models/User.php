<?php

class User {
    public $id;
    public $lastname;
    public $firstname;
    public $email;
    public $password;
    public $username;
    
    public function lastnameToUpper(): string {
        return strtoupper($this->lastname);
    }
    
    public function getLastName(): string {
        return strtoupper($this->lastname);
    }
    
    public function getName(): string {
        return $this->firstname . " " . $this->lastname;
    }
}
