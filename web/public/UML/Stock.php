<?php
class Stock {
    /**
     * 
     * @var array $stock
     */
    private $stock;
    
    private $stockMaxi;
    
    private $stockMini;
    
    private $stockSeuil;
    
    /**
     *  Ventilation des stocks par type de produit
     * @var array $stocks
     */
    private $stocks;
    
    public function __construct() {
        $this->stock = [];
        
        $this->stocks =[];
        
        $this->stockMaxi = 100;
        $this->stockMini = 10;
        $this->stockSeuil = 15;
    }
    
    public function size(): int {
        return count($this->stock);
    }
    
    public function add(Shape $element) {
        $this->stock[] = $element; // array_push()
        
        // Récupérer l'instance de... $element et ajouter ça dans un compteur...
        // Euh... comment je fais pour savoir de quelle instance est $element ?
        $typeOf = get_class($element);
        
        // Mission one complete
        // Next level : Comment je peux maintenir "n" compteurs différents ?
        if (array_key_exists($typeOf, $this->stocks)) {
            $this->stocks[$typeOf]++;
        } else {
            $this->stocks[$typeOf] = 1;
        }
        
    }
    
    public function howManyOf(string $of = "Rectangle"): int {
        $count = 0;
        foreach ($this->stock as $shape) {
            if ($shape instanceof $of) {
                $count++;
            }
        }
        return $count;
    }
    
    public function getStockVentilation(): string {
        $output = "<ul>";
        foreach ($this->stocks as $type => $stock) {
            $output .= "<li>" . $type . " : " . $stock . "</li>";
        }
        $output .= "</ul>";
        
        return $output;
    }
}

