<?php

namespace KBNT\TimberFunctionsAndFilters;

if (defined('WP_DEBUG') && WP_DEBUG && function_exists('add_filter')) {
    add_filter('timber/loader/twig', function($dump) {
        echo "<pre>";
        \var_dump($dump);
        echo "</pre>";
    });
}
