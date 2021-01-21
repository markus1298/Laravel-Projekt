@extends("layout")
@section("title","Artikel-Bearbeiten")
@section("content")
    <div class="container">
        <form action="/bearbeiten" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$data['id']}}">
            <label for="artikelname">Artikelname:</label>
            <input type="text" id="artikelname" name="artikelname" value="{{$data['artikelname']}}"/>
            <label for="preis">Preis:</label>
            <input type="number" step="0.01" id="preis" name="preis" value="{{$data['preis']}}"/>
            <label for="hersteller">Hersteller</label>
            <input type="text" id="hersteller" name="hersteller" value="{{$data['hersteller']}}"/>
            <label for="beschreibung">Beschreibung</label>
            <input type="textarea" id="beschreibung" name="beschreibung" value="{{$data['beschreibung']}}"/>
            <button type="submit">Speichern</button>
        </form>
    </div>
    @if (session('alert'))
        <div class="alert alert-success">
            {{ session('alert') }}
        </div>
    @endif
@endsection
