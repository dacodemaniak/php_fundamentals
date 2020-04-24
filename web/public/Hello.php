<?php

/** 
 * @author jlaubert
 * 
 */
final class Hello
{
    private $greetings;
    
    /**
     */
    public function __construct()
    {}
    
    public function setGreetings(string $greeting) {
        $this->greetings = $greetings;
    }
    
    public function getGreetings(): string {
        return $this->greetings;
    }
    
}

