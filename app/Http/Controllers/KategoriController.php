<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        return view('kategori', [
            'data' => $kategoris,
        ]);
    }
    public function add()
    {
        return view('form_kategori', );
    }
    public function edit($id)
    {
        $kategoris = Kategori::find($id);
        return view('kategori', [
            'data' => $kategoris,
        ]);
    }
    public function save(Request $req)
    {
        $old_kode = @$req->old_kode;
        if ($old_kode) {
            Kategori::where('kode_kategori', $old_kode)->update([
                'kode_kategori' => $req->kode,
                'nama' => $req->nama,
                'ket' => $req->ket,
            ]);
        }else {
            Kategori::create([
                'kode_kategori' => $req->kode,
                'nama' => $req->nama,
                'ket' => $req->ket,
            ]);
        }
        return redirect('/kategori');
    }
    public function delete($id)
    {
        Kategori::find($id)->delete();
        return redirect('/kategori');
    }

}
