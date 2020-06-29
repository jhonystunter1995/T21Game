<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Controla la vista entre usuario y admin
    public function __construct(){
            $this->middleware('auth');
            $this->middleware('user.status');
            $this->middleware('isadmin');
    }
    
    //Retornar la vista de admin
    public function getDashboard(){
            return view('admin.dashboard');
    }
}
