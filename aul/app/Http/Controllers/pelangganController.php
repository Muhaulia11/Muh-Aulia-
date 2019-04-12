<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pelangganController extends Controller
{
    public function index()
    {
        $produk = ['Meja','Kursi','Buku','Lampu'];
        return view('produk.index',compact('produk'));
    }

    public function dataPelanggan()
    {
        $pelanggan = ['Ina','Ani','Ita','Indra'];
        return $pelanggan;
    }
}
