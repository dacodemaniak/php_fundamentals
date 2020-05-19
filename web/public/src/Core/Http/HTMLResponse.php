<?php
namespace Adrar\Core\Http;

use Adrar\Core\TemplateEngine\TemplateEngine;

class HTMLResponse {
    private $template;
    private $datas;
    
    /**
     * TemplateEngine to use to render pages
     * @var TemplateEngine
     */
    private $templateEngine;
    
    /**
     * Template to finally send to navigator
     * @var \Smarty_Internal_Template
     */
    private $processedTemplate;
    
    public function __construct(string $template, array $datas = []) {
        $this->template = $template;
        $this->datas = $datas;
        
        $this->templateEngine = new TemplateEngine();
        
        $this->_process();
    }
    
    public function render() {
        header("Content-Type: text/html"); // En-tête HTTP 
        echo "Display template " . $this->template;
        $this->processedTemplate->display();
    }
    
    private function _process() {
        $this->processedTemplate = $this->templateEngine->createTemplate($this->template, $this->datas);
    }
}

