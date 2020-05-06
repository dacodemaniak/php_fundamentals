<?php
class Shape {
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
    public function setWidth(float $width)
    {
        $this->width = $width;
    }

    /**
     * @param number $height
     */
    public function setHeight(float $height)
    {
        $this->height = $height;
    }

    
    
}

