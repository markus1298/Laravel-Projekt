<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Artikel</title>
    </head>
    <body>
        @include('nav')
        <h1>Artikel</h1>
        <table border="1">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Artikelname</td>
                    <td>Preis</td>
                </tr>
            </thead>
            <tbody>         
            @foreach($data as $artikel)
            <tr>
                <td>{{$artikel->id}}</td>
                <td>{{$artikel->artikelname}}</td>
                <td>{{$artikel->preis}}</td>
                <td><a href="delete/{{$artikel->id}}" style="text-decoration:none;background-color:#ff0000;color:white;">Löschen</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <br/>    
        <form action="artikel" method="post">
            @csrf
            <label for="artikelname">Artikelname</label>
            <input type="text" id="artikelname" name="artikelname"/>
            <label for="preis">Preis</label>
            <input type="text" id="preis" name="preis"/>
            <button type="submit">Artikel hinzufügen</button>
        </form>    
    </body>
</html>