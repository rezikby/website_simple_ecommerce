<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function home()
    {
        $produk = DB::table('handmades')->get();
        return view('home', compact('produk'));
    }

    public function about()
    {
        return view('about');
    }

    public function detail($id)
    {
        $produk = DB::table('handmades')->where('id', $id)->first();

        if (!$produk) {
            abort(404, 'Produk tidak ditemukan');
        }

        return view('detail-produk', compact('produk'));
    }

        public function contact()
    {
        return view('contact');
    }

}
