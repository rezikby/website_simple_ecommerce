<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
class ProdukController extends Controller
{
    public function index()
    {
   
        $produk = DB::table('handmades')->get();
        return view('home', compact('produk'));
    }
}
