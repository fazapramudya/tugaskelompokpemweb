<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
        public function index2(){
        return view('dashboard');
    }
        public function authenticate(Request $request){
            $credentials = $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);
                return redirect('/dashboard');
            
        }
}
