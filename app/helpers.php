<?php

function setActive($routeName)
{
    return request()->routeIs($routeName) ? 'active' : '';
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

    function cleanSpecialCharacters($string){
        $string = htmlentities($string);
        $string = preg_replace('/\&(.)[^;]*;/', '\\1', $string);
        return $string;
       }
}
