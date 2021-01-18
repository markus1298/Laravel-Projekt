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
        $artikel->hersteller = request('hersteller');
        $artikel->beschreibung = request('beschreibung');

        if($artikel->artikelname == null||$artikel->preis == null||$artikel->hersteller == null||$artikel->beschreibung == null){
            
            return redirect('hinzufügen')->with("alert","Sie müssen alle Felder ausfüllen!");

        }elseif($artikel->preis>999999.99){
            
            return redirect('hinzufügen')->with("alert","Der Preis darf nicht größer als 999999.99€ sein!");

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
        $artikel=Artikel::find($request->id);
        $artikel->artikelname=$request->artikelname;
        $artikel->preis=$request->preis;
        $artikel->hersteller = $request->hersteller;
        $artikel->beschreibung = $request->beschreibung;
        
        if($artikel->artikelname == null||$artikel->preis == null||$artikel->hersteller == null||$artikel->beschreibung == null){
            
            return redirect("bearbeiten/{$artikel->id}")->with("alert","Sie müssen alle Felder ausfüllen!");

        }elseif($artikel->preis>999999.99){

            return redirect("bearbeiten/{$artikel->id}")->with("alert","Der Preis darf nicht größer als 999999.99€ sein!");

        }else{
            $artikel->save();
            return redirect('artikel');
        }

    }

    function delete($id) {
        $artikel = Artikel::find($id);
        $artikel->delete();

        return redirect('artikel');
    }
}
