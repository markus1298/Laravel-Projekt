<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class ArtikelController extends Controller
{
    function getList() {
        $data = Artikel::all();

        return view('artikel', compact('data'));
    }

    function store() {
        $artikel = new Artikel();

        $artikel->artikelname = request('artikelname');
        $artikel->preis = request('preis');
        $artikel->verfügbar = 1;

        $artikel->save();

        return redirect('artikel');
    }

    function delete($id) {
        $artikel = Artikel::find($id);
        $artikel->delete();

        return redirect('artikel');
    }
}
