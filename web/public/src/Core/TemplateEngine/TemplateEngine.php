<?php
namespace Adrar\Core\TemplateEngine;

final class TemplateEngine extends \Smarty {
    public function __construct() {
        parent::__construct();
        
        // Specific configuration
        $this
            ->setTemplateDir(__DIR__ . "/../../../app/templates")
            ->setCompileDir(__DIR__ . "/../../../var/templates_c")
            ->setCacheDir(__DIR__ . "/../../../var/cache")
            ->setConfigDir(__DIR__ . "/../../../var/configs");
    }
}

