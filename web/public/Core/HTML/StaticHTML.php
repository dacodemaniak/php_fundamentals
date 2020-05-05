<?php
class StaticHTML {
    /**
     * Collection des feuilles de styles à intégrer
     * @var array
     */
    private static $cssFiles = [];
    
    public static function addCssFile(string $fileName) {
        // Recalcule le nom et le chemin complet du fichier CSS
        $fullFileName = "Assets/Css/" . $fileName . ".css";
        
        if (file_exists(__DIR__ . "/../../" . $fullFileName)) { // Vérifier l'existence "réelle" du fichier CSS
            if (!in_array($fullFileName, self::$cssFiles)) { // Vérifier que le CSS n'est pas déjà ajouté
               self::$cssFiles[] = $fullFileName;
            }
        }
    }
    
    private static function endHTML(): string {
        return "</body></html>";
    }
    
    private static function startHTML(string $title): string {
        $html = "<!doctype html>
            <html>
                <head>
                    <meta charset=\"utf-8\">
                    <title>" . $title . "</title>
                    <!-- Insérer les styles Bootstrap //-->
                    <link 
                        href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
                        integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\"
                        rel=\"stylesheet\"
                        crossorigin=\"anonymous\"
                    >";
        
        // Ajouter éventuellement les autres feuilles de style
        if ( count(self::$cssFiles) > 0 ) {
            // Okay... On peut ajouter les autres feuilles
            foreach (self::$cssFiles as $cssFile) {
                $html .= "<link href=\"./" . $cssFile . "\" rel=\"stylesheet\">";
            }
        }
        
        $html .= "</head>
                <body>";
        
        return $html;
    }
    
    public static function display(string $title, string $htmlContent) {
        header("Content-Type: text/html", false, 200);
        
        echo self::startHTML($title) .
                "<div class=\"container-fluid\">" .
                $htmlContent .
                "</div>" .
                self::endHTML();
    }
}