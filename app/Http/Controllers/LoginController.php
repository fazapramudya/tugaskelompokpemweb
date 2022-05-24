<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
class LoginController extends Controller
{
    //
    public function index(){
        return view('register');
    }
    public function store(){
         $validatedData = request()->all();
         Pegawai::create($validatedData);
         return dd('success');
        
    }
}
