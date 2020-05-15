<?php
require_once(__DIR__ . "/../PHPString.php");

class CaseConverter extends \PHPString
{

    public function __construct(string $string) {
        parent::__construct($string);
    }
    
    public function toCamelCase(string $separator = "_"): string {
        return str_replace(" ", "", lcfirst(ucwords(str_replace($separator, " ", $this->string))));
    }
}

