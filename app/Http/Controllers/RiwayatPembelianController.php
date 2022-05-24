<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
class RiwayatPembelianController extends Controller
{
    //
        public function index4(){
        return view('riwayatpembelian');
    }
        public function store(Request $request){
         $validatedData = request()->all();
         $res = barang::create([
             "nama_barang" => $validatedData["nama_barang"],
             "jumlah_barang" => $validatedData["jumlah_barang"],
         ]);
         return redirect('/riwayatpembelian');
        
    }
}
