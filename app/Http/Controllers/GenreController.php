<?php

namespace App\Http\Controllers;

use App\Models\Genre;
// use App\Http\Requests\StoreGenreRequest;
// use App\Http\Requests\UpdateGenreRequest;
use Illuminate\Http\Request;


class GenreController extends Controller
{
   public function index()
    {
        $genre = Genre::orderBy('id', 'desc')->get();
        return view('genre.index', compact('genre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('genre.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_genre' => 'required|max:235',
        ]);

        $genre = new Genre();
        $genre->nama_genre = $request->nama_genre;
        $genre->save();

        return redirect()->route('genre.index')->with('success', 'data berhasil ditambahkan');
    }

    public function show($id)
    {
        $genre = Genre::findOrFail($id);
        return view('genre.show', compact('genre'));
    }

    public function edit($id)
    {
        $genre = Genre::findOrFail($id);
        return view('genre.edit', compact('genre'));
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_genre' => 'required|max:235',
        ]);

        $genre = Genre::findOrFail($id);
        $genre->nama_genre = $request->nama_genre;
        $genre->save();

        return redirect()->route('genre.index')->with('success', 'data berhasil diubah');

    }


    public function destroy($id)
    {
        $genre = Genre::findOrFail($id);
        $genre->delete();

        return redirect()->route('genre.index')->with('success', 'data berhasil dihapus!');
    }
}