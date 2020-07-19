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
