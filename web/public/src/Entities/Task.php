<?php
/**
* @name Task
* @author Adrar - May 2020
* @version 1.0.0
* @namespace Adrar/Entities
*   Classe de représentation des tâches à manipuler dans l'application
*/
namespace Adrar\Entities;

class Task { // Début du corps de la classe
    
    /**
     * 
     * @var int $id
     */
    private $id; // Définition d'un attribut (ou propriété) de classe
    
    /**
     * 
     * @var \DateTime $beginDate
     */
    private $beginDate;
    
    /**
     * 
     * @var \DateTime $endDate
     */
    private $endDate;
    
    public function __construct() { // Appelé automatiquement lors d'un new Task()
    }
    
    public function __destruct() { // Appelé automatiquement lors de la destruction d'un objet
        echo "Je suis " . $this->id . " et je meurs !<br>"; 
    }
    
    public function __get(string $attributeName) {
        if (!property_exists($this, $attributeName)) {
            if ($attributeName == "dates") {
                return "Du " . $this->beginDate() . " au " . $this->endDate();
            }
        } else {
            return $this->{$attributeName};
        }
    }
    
    public function setId(int $theId) { // int => Type Hinting
        $this->id = $theId; // Range dans l'attribut "id" de CET objet, la valeur passée en paramètre dans "theId"
    }
    
    public function getId(): int { // :int indique que la méthode doit retourner une valeur de type "int"
        return $this->id; // Retourne la valeur de l'attribut "id" de CET objet
    }
    
    /**
     * Polymorphisme à la sauce PHP (à la fois un getter et un setter)
     * @param optional int $id default null
     * @return int
     *  ->id() => getter
     *  ->id(100) => setter
     */
    public function id(int $id = null) { // int $id = null => le paramètre $id peut être ou on passé lors de l'appel
        if ($id == null) { // Est-ce-que la valeur du paramètre $id est null ?
            return $this->id; // Return => sort de la méthode
        }
        
        $this->id = $id;
    }
    
    /**
     * Définit ou retourne la valeur de l'attribut beginDate de l'objet
     * @param optional \DateTime $date
     * @return \DateTime
     */
    public function beginDate(\DateTime $date = null) {
        if ($date === null) {
            return $this->beginDate->format("d-m-Y");
        }
        
        $this->beginDate = $date;
    }
    
    /**
     * Définit ou retourne la valeur de l'attribut endDate de l'objet
     * @param optional \DateTime $date
     * @return \DateTime
     */
    public function endDate(\DateTime $date = null) {
        if ($date === null) {
            return $this->endDate->format("d-m-Y");
        }
        
        $this->endDate = $date;
    }
    
} // Fin du corps de la classe