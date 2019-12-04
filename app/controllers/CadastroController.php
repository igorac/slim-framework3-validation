<?php

namespace App\controllers;

use App\src\Validate;

class CadastroController extends Controller 
{
    public function create()
    {
        $this->view('/cadastro', [
            'title' => 'Cadastro'
        ]);
    }

    public function store()
    {
        $validate = new Validate;

        $data = $validate->validate([
            'name' => 'required:max@5',
            'email' => 'required:email:unique@user:max@30',
            'phone' => 'required:phone'
        ]);

        if ($validate->hasErrors()) {
            return back();
        }

        dd($data);
    }
    
}
