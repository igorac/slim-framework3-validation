<?php

/**
 * Functions Custons Twig
 */

use App\src\Flash;

$message = new \Twig\TwigFunction('message', function($index){
    echo Flash::get($index);
});



// Responsável por retornar as functions
return [ 
  $message
];