<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    //Controla la vista entre usuario y admin
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('user.status');
        $this->middleware('isadmin');
    }

    // LOGICA DE BASE DE DATOS
    public function getUsers($status)
    {
        if($status == 'all'):
            $users = User::orderBy('id', 'Desc')->paginate(30);
        else:
            $users = User::where('status', $status)->orderBy('id', 'Desc')->paginate(30);
        endif;        
        $data = ['users' => $users];
        return view('admin.users.home', $data);
    }

    public function getUserEdit($id)
    {
        $users = User::findOrFail($id);
        $data = ['users' => $users];
        return view('admin.users.uedit', $data);
    }

    // public function getUserBanned($id)
    // {
    //     $users = User::findOrFail($id);
    //     if($users->status == "100"):
    //         $users->status = '1';
    //         $msg = "Usuario Habilitado";
    //     else:
    //         $users->status = "100";
    //         $msg = "Usuario Inhabilitado";
    //     endif;         

    //     if($users->save()):
    //         return back()->with('message', $msg)->with('typealert', 'success');
    //     endif;    

    // }

    public function postUserUpdate(Request $request, User $user)
    {
        $user->update($request->all());
            return redirect("/admin/user/$user->id/edit")->with('update', 'usuario actualizado.')->with('typealert', 'success');
    }
}
