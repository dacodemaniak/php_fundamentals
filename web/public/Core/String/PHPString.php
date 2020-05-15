<?php
class PHPString {
    /**
     * Source string to process
     * @var string
     */
    protected $string = "";
    
    public function __construct(string $string) {
        $this->string = $string;
    }
}

