<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Usuarios extends Controller
{
	public function index()
	{
               
		$model = new \App\Models\UsuariosModel();

        $data = [
            'results' => $model->orderBy('id','desc')->paginate(15),
            'pager' => $model->pager,
        ];
       
        return view('usuarios', $data);
    }
}

