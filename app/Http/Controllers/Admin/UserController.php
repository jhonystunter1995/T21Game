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
    public function getUsers($status){
        if($status == 'all'):
            $users = User::orderBy('id', 'Desc')->paginate(30);
        else:
            $users = User::where('status', $status)->orderBy('id', 'Desc')->paginate(30);
        endif;        
        $data = ['users' => $users];
        return view('admin.users.home', $data);
    }

    public function getUserEdit($id){
        $users = User::findOrFail($id);
        $data = ['users' => $users];
        return view('admin.users.uedit', $data);
    }
}
