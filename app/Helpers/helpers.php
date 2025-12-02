<?php

use Illuminate\Support\Facades\File;

if (! function_exists('navData')) {
    /**
     * Retourne le contenu du fichier navData.php
     *
     * @return array
     */
    function navData(): array
    {
        $path = resource_path('data/navData.php');

        if (File::exists($path)) {
            return include $path;
        }

        return [];
    }
}
