<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ConnectController extends Controller
{
    public function getLogout(){
        $status = Auth::user()->status;
        Auth::logout();
        if($status == "100"):
            return redirect('/banner');
        else:    
            return redirect('/');
        endif;    
    }

    public function getBanner(){
        return view('banner');
    }
}
