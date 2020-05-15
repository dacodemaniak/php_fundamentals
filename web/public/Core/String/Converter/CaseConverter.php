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
    
    public function toSnakeCase(): string {
        preg_match_all('!([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $this->string, $matches);
        $snake = $matches[0];
        foreach ($snake as &$match) {
            $match = $match == strtoupper($match) ? strtolower($match) : lcfirst($match);
        }
        return implode('_', $snake);
    }
}

