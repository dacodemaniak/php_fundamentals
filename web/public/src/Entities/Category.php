<?php
namespace Adrar\Entities;

class Category
{
    /**
     * ID de la catégorie
     * @var int $id
     */
    private $id;
    
    /**
     * Nom de la catégorie
     * @var string $name
     */
    private $name;

    public function __construct()
    {}

    public function __destruct()
    {}
    
    /**
     * Définit ou retourne la valeur de l'attribut "id" de l'objet
     * @param optional int $id
     * @return number|\Adrar\Entities\Category
     */
    public function id(int $id = null) {
        if ($id === null) {
            return $this->id;
        }
        
        $this->id = $id;
        
        return $this;
    }
    
    /**
     * Définit ou retourne la valeur de l'attribut "id" de l'objet
     * @param optional string $name
     * @return string|\Adrar\Entities\Category
     */
    public function name(string $name = null) {
        if ($name === null) {
            return $this->name;
        }
        
        $this->name = $name;
        
        return $this;
    }
    
    public function __toString(): string {
        return "[" . $this->id . "] " . $this->name;
    }
    
}

