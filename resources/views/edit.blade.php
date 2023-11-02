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

        <form class="form-control" action="{{ route('comic.update', ['id' => $comics->id])}}" method="POST">
            @csrf
            @method('PUT')

            
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" value="{{$comics->title}}">
    
            <label for="description">Descrizione</label>
            <input type="text" name="description" id="description" value="{{$comics->description}}>
    
            <label for="thumb">Copertina</label>
            <input type="text" name="thumb" id="thumb"value="{{$comics->thumb}}>
    
            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price" value="{{$comics->price}}>
    
            <label for="series">Serie</label>
            <input type="text" name="series" id="series" value="{{$comics->series}}>
    
            <label for="sale_date">Data d'uscita</label>
            <input type="date" name="sale_date" id="sale_date" value="{{$comics->sale_date}}>
    
            <label for="type">Tipologia</label>
            <input type="text" name="type" id="type" value="{{$comics->type}}>

            <label for="artists">Artisti</label>
            <input type="text" name="artists[]" id="artists" cols="30" rows="10" value="{{$comics->artists}}></input>

            <label for="writers">Autori</label>
            <input type="text" name="writers[]" id="writers" cols="30" rows="10" value="{{$comics->writers}}></input>
    
            <input class="btn btn-primary rounded-pill mt-3" type="submit" value="invia">

        </form>

    </div>


</body>

</html>