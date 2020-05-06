<?php
abstract class Shape {
    /**
     * 
     * @var float $width
     */
    protected $width;
    
    /**
     * 
     * @var float $height
     */
    protected $height;
    
    /**
     * @return number
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @return number
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @param number $width
     */
    public function setWidth(float $width): Shape
    {
        $this->width = $width;
        
        return $this;
    }

    /**
     * @param number $height
     */
    public function setHeight(float $height): Shape
    {
        $this->height = $height;
        return $this;
    }

    abstract public function decoupe(): string;
    
}

