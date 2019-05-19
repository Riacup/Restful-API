<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Buku;
use Illuminate\Suppport\Facades\DB;

class BukuController extends Controller
{
    //index menampilkan semua
    public function index(){
        return Buku::all();
    }

    //index (menyimpan data)
    public function create(request $request){
        $buku = new Buku;
        $buku->judul =  $request->judul;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->save();

        return "Data Berhasil Masuk";
    }

    //index (update semua)
    public function update(request $request, $id){
        $judul = $request->judul;
        $penulis = $request->penulis;
        $penerbit = $request->penerbit;
        $tahun_terbit = $request->tahun_terbit;

        $Buku = Buku::find($id);
        $Buku->judul = $judul;
        $Buku->penulis = $penulis;
        $Buku->penerbit = $penerbit;
        $Buku->tahun_terbit = $tahun_terbit;
        $Buku->save();

        return "Data berhasil di Update";
    }

    //delete
    public function delete($id){
        $Buku = Buku::find($id);
        $Buku->delete();

        return "Data berhasil di Hapus";
    }

}
