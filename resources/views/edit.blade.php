<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container mt-5">

        <form class="form-control" action="{{ route('comic.update', ['id' => $comic->id])}}" method="POST">
            @csrf
            @method('PUT')

            
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" value="{{$comic->title}}">
    
            <label for="description">Descrizione</label>
            <input type="text" name="description" id="description" value="{{$comic->description}}>
    
            <label for="thumb">Copertina</label>
            <input type="text" name="thumb" id="thumb"value="{{$comic->thumb}}>
    
            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price" value="{{$comic->price}}>
    
            <label for="series">Serie</label>
            <input type="text" name="series" id="series" value="{{$comic->series}}>
    
            <label for="sale_date">Data d'uscita</label>
            <input type="date" name="sale_date" id="sale_date" value="{{$comic->sale_date}}>
    
            <label for="type">Tipologia</label>
            <input type="text" name="type" id="type" value="{{$comic->type}}>

            <label for="artists">Artisti</label>
            <input type="text" name="artists[]" id="artists" cols="30" rows="10" value="{{$comic->artists}}></input>

            <label for="writers">Autori</label>
            <input type="text" name="writers[]" id="writers" cols="30" rows="10" value="{{$comic->writers}}></input>
    
            <input class="btn btn-primary rounded-pill mt-3" type="submit" value="invia">

        </form>

    </div>


</body>

</html>