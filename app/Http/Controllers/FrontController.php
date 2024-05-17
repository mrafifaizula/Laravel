<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Penulis;
use App\Models\Genre;

class FrontController extends Controller
{
    public function buku()
    {
        $buku = Buku::latest()->get();
        $genre = Genre::all();
        $penulis = Penulis::all();
        return view('welcome', compact('buku', 'penulis', 'genre'));
    }
    public function detailBuku($id)
    {
        $buku = Buku::findOrFail($id);
        return view('detail_buku', compact('buku'));
    }
}
