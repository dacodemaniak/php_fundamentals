<?php

class Rectangle extends \Shape
{

    public function decoupe(): string
    {
        return null;
    }
    
    public function dessinerCestGagne(): string {
        return "Dessine une longueur de " . $this->height . " et largeur : " . $this->width;
    }
}

