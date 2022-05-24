<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;

class barangController extends Controller
{
    public function index(){
        $data = barang::all();
        // dd($data);
        return view('barang', ['data' => $data]);
    }

    public function destroy($id)
    {
        barang::destroy($id);
        return redirect('/barang');
    }
    public function edit($id){
        $barang= barang::findorfail($id);
        return view('updatebarang',compact('barang'));
    }
    public function update(Request $request, $id){
        $barang= barang::findorfail($id);
        $barang->update($request->all());
        return redirect('barang');
    }
    

}
