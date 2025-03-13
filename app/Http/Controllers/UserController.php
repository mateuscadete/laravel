<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // Recuperar os registros do banco de dados
        $users = User::orderByDesc('id')->get();

        // Carregar a view
        return view('users.index', ['users' => $users]);
    }
}
