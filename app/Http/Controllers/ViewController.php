<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use illuminate\Database\MySqlConnection;


class ViewController extends Controller
{
    public function main (Request $request){
        $barang = DB::table('products')->get();
        if($request->has('search')){
            $barang = DB::table('products')->where('nama_produk','LIKE','%' .$request->search.'%')->get();
            return view('welcome')->with('barang',$barang);
        }
        return view('welcome')->with('barang',$barang);

    }
    public function login (){

        return view('login');
    }
    public function register (){
        return view('register');
    }
}
