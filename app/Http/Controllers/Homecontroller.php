<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Homecontroller extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function tambah()
    {
        return view('input');
    }
    public function simpan (Request $request)
    {
        $nama =$request->input('nama');
        $kategori =$request->input('kategori');
        $harga =$request->input('harga');
        $ket =$request->input('ket');

        return view('result', [
            'nama' => $nama,
            'kategori' => $kategori,
            'harga' => $harga,
            'keterangan' => $ket,
        ]);
    }
    public function view_makanan()
    {
        $makanans = Makanan::all();
        return view('makanan', [
            'foods' => $makanans,
        ]);
    }

    public function test_eloquent()
    {
        $makanan = Makanan::all();
         dd($makanans);
        
        //  //Insert data
        // Makanan::create{[
        //     'kode_makanan' => 'm001',
        //     'nama' => 'ai',
        //     'kategori' => 'y',
        //     'harga' => '1',
        //     'ket' => 'tersedia',
        // ]};

        //Hapus data
        Makanan::find('m001')->delete();

        //update data

        $makanan = Makanan::find('m001');
        $makanan ->nama = 'ndog';
        $makanan ->kategori = 'snack';
        $makanan ->harga = 5000;
        $makanan ->ket = 'tersedia';
        $makanan ->save();




    }
}

