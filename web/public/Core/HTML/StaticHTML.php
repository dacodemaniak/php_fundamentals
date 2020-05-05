<?php
class StaticHTML {
    public static function endHTML(): string {
        return "</body></html>";
    }
    
    public static function startHTML(string $title): string {
        return "<!doctype html>
            <html>
                <head>
                    <meta charset=\"utf-8\">
                    <title>" . $title . "</title>
                </head>
                <body>";
    }
}

