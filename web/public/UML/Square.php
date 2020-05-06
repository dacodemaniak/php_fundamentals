<?php
class Square extends \Shape {
    
    /**
     * @Override
     * {@inheritDoc}
     * @see Shape::setHeight()
     */
    public function setHeight(float $height) {
        $this->width = $height;
        $this->height = $height;
    }
    
    /**
     * @Override
     * {@inheritDoc}
     * @see Shape::setWidth()
     */
    public function setWidth(float $width) {
        $this->width = $width;
        $this->height = $width;
    }
    
    public function details(): string {
        return "Mon carré a un côté de : " . $this->width;
    }
}

