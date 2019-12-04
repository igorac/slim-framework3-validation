<?php

namespace App\controllers;


class HomeController extends Controller
{

    public function index()
    {
        $this->view('home', [
            'nome' => 'Igor',
            'title' => 'Home'
        ]);
    }

}