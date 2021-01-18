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

        if($artikel->artikelname == null||$artikel->preis == null){
            return redirect('hinzufügen')->with("alert","Sie müssen alle Felder ausfüllen!");
        }else{
            $artikel->save();

            return redirect('artikel');
        }
    }

    public function edit($id)
    {

       $data= Artikel::find($id);
       return view('bearbeiten',['data'=>$data]);
    }

    public function update(Request $request)
    {
        $data=Artikel::find($request->id);
        $data->artikelname=$request->artikelname;
        $data->preis=$request->preis;
        
        if($data->artikelname == null||$data->preis == null){
            return redirect("bearbeiten/{$data->id}")->with("alert","Sie müssen alle Felder ausfüllen!");
        }else{
            $data->save();

            return redirect('artikel');
        }

    }

    function delete($id) {
        $artikel = Artikel::find($id);
        $artikel->delete();

        return redirect('artikel');
    }
}
