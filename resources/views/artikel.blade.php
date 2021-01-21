@extends("layout")
@section("title","Artikelübersicht")

@section("content")
        <div class="container">
        <h1>Artikel</h1>
        <table border="1">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Artikelname</td>
                    <td>Preis</td>
                    <td>Hersteller</td>
                    <td>Beschreibung</td>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $artikel)
            <tr>
                <td>{{$artikel->id}}</td>
                <td>{{$artikel->artikelname}}</td>
                <td>{{$artikel->preis}}</td>
                <td>{{$artikel->hersteller}}</td>
                <td>{{$artikel->beschreibung}}</td>
                <td><a href="bearbeiten/{{$artikel->id}}" style="text-decoration:none;background-color:black;color:white;">Bearbeiten</a></td>
                <td><a href="delete/{{$artikel->id}}" style="text-decoration:none;background-color:#ff0000;color:white;">Löschen</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>

@endsection
