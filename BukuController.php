<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function pesan(){
        $makanan = ["Nasi & Ikan Nila Bakar", "Nasi & Ikan Lele Bakar", "Nasi & Ayam Goreng", "Nasi & Bebek Goreng"];
        $minuman = ["es teh", "es jeruk", "jeruk panas", "teh panas"];

        return view('warung-padang',['makan'=>$makanan,'minum'=>$minuman]);
    }
    public function nota(Request $request){
        $makanan = $request->input('makanan');
        $minuman = $request->input('minuman');

        return view('nota',['makanan'=>$makanan,'minuman'=>$minuman]);
    }
}
