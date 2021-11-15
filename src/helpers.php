<?php

if (!function_exists('view')) {

    function view($pathString, array $params = array()) {

        ob_start( );
        extract($params);

        $themePath = get_stylesheet_directory();
        $viewsPath = DIRECTORY_SEPARATOR . "src";

        $subPath = "";

        $parts = explode('.', $pathString);

        foreach ($parts as $path) {
            $subPath .= DIRECTORY_SEPARATOR . "{$path}";
        }

        $filePath = $themePath . $viewsPath . $subPath . ".php";

        include($filePath);

        return ob_get_clean( );
    }
}
