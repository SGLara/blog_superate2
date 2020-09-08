<?php

function setActive($routeName)
{
    return request()->routeIs($routeName) ? 'active' : '';
}

function searchAndActive()
{
    $myRoutes = [
        'nuestra-historia',
        'nuestra-filosofia',
        'efecto-multiplicador',
        'nuestro-equipo'
    ];

    foreach ($myRoutes as $route) {
        if (request()->routeIs($route)) {
            return 'active';
        }
    }
}

if (!function_exists('getShorterString')) {
    function getShorterString($text, $length = null)
    {
        $formatedString = ucwords($text);

        if ($length != null) {
            if (strlen($formatedString) <= $length) {
                return $formatedString;
            } else {
                $y = substr($formatedString, 0, $length) . '...';
                return $y;
            }
        } else {
            return $formatedString;
        }
    }
}
