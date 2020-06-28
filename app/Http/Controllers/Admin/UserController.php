<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    //Controla la vista entre usuario y admin
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');
    }

    // LOGICA DE BASE DE DATOS
    public function getUsers(){
        $users = User::orderBy('id', 'Desc')->get();
        $data = ['users' => $users];
        return view('admin.users.home', $data);
    }

    public function getUserEdit($id){
        $users = User::findOrFail($id);
        $data = ['users' => $users];
        return view('admin.users.uedit', $data);
    }
}
