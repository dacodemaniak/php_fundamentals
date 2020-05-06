<?php
/**
 * @name User
 * @author Adrar - May 2020
 * @version 1.0.0
 *  User entitie related to "user" table in the database
 */
class User {
    /**
     * 
     * @var int $id
     */
    private $id;
    
    /**
     * 
     * @var string $lastname
     */
    private $lastname;
    
    /**
     * 
     * @var string $firstname
     */
    private $firstname;
    
    /**
     * 
     * @var string $email
     */
    private $email;
    
    /**
     * 
     * @var string $password
     */
    private $password;
    
    /**
     * 
     * @var string $username
     */
    private $username;
    
    /**
     * 
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }
    
    /**
     * 
     * @param int $id
     * @return User
     */
    public function setId(int $id): User {
        $this->id = $id;
        return $this;
    }
    
    /**
     * 
     * @return string
     */
    public function getLastname(): string {
        return $this->lastname;
    }
    
    /**
     * 
     * @param string $lastname
     * @return User
     */
    public function setLastname(string $lastname): User {
        $this->lastname = $lastname;
        return $this;
    }
    
    /**
     * 
     * @return string
     */
    public function getFirstname(): string {
        return $this->firstname;
    }
    
    /**
     * 
     * @param string $firstName
     * @return User
     */
    public function setFirstname(string $firstName): User {
        $this->firstname = $firstname;
        return $this;
    }
    
    /**
     * 
     * @return string
     */
    public function getEmail(): string {
        return $this->email;
    }
    
    /**
     * 
     * @param string $email
     * @return User
     */
    public function setEmail(string $email): User {
        $this->email = $email;
        return $this;
    }
    
    /**
     * 
     * @return string
     */
    public function getUsername(): string {
        return $this->username;
    }
    
    /**
     * 
     * @param string $username
     * @return User
     */
    public function setUsername(string $username): User {
        $this->username = $username;
        return $this;
    }
    
    /**
     * 
     * @return string
     */
    public function getPassword(): string {
        return $this->password;
    }
    
    /**
     * 
     * @param string $password
     * @return User
     */
    public function setPassword(string $password): User {
        $this->password = $password;
        return $this;
    }
    
    /**
     * 
     * @return array
     */
    public function getScheme(): array {
        $scheme = [];
        foreach ($this as $property => $value) {
            $scheme[$property] = $value;
        }
        return $scheme;
    }

}

