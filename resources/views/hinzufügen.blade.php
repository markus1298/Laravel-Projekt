@extends("layout")
@section("title","Hinzufügen")
@section("content")
    <div class="container">
        <form action="artikel" method="post">
                @csrf
                <label for="artikelname">Artikelname</label>
                <input type="text" id="artikelname" name="artikelname"/>
                <label for="preis">Preis</label>
                <input type="number" step="0.01" id="preis" name="preis"/>
                <label for="hersteller">Hersteller</label>
                <input type="text" id="hersteller" name="hersteller"/>
                <label for="beschreibung">Beschreibung</label>
                <input type="textarea" id="beschreibung" name="beschreibung"/>
                <button type="submit">Artikel hinzufügen</button>
        </form>
    </div>
    @if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
    @endif
@endsection