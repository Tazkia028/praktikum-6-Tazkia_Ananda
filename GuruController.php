<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index($nama){
        return $nama;
    }

    public function formulir(){
        return view('formulir'); 
    }

    public function formulir_proses(Request $request){
        $nama= $request->input('nama');
        $alamat= $request->input('alamat');

        return $nama . $alamat; 
    }
}
?>