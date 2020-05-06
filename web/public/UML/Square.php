<?php
class Square extends \Shape {
    
    /**
     * @Override
     * {@inheritDoc}
     * @see Shape::setHeight()
     */
    public function setHeight(float $height): Shape {
        $this->width = $height;
        $this->height = $height;
        
        return $this;
    }
    
    /**
     * @Override
     * {@inheritDoc}
     * @see Shape::setWidth()
     */
    public function setWidth(float $width): Shape {
        $this->width = $width;
        $this->height = $width;
        
        return $this;
    }
    

    public function decoupe(): string {
        return "Découpage d'un carré de longueur égale : " . $this->width . " / " . $this->height;
    }
    
    public function dessiner(): string {
        return "4 côtés de longueur égale : " . $this->width;
    }

}

