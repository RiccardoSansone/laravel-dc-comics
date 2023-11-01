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
    
    <h1 class="mb-5 text-bg-primary">LA TUA LISTA DI FUMETTI</h1>
    <div class="container d-flex">
        <div class="row row-cols-md-3">
            @foreach ($comics as $comic)
            <div class="col-md-3">
                <div class="card card_sass">
                    <img width="80" src="{{$comic->thumb}}" alt="" class="card-img-top">
                    <h3>{{$comic->title}}</h3>
                    <p>{{$comic->description}}</p>
                    <small>{{$comic->series}}</small>
                    <small>{{$comic->sale_date}}</small>
                    <small>{{$comic->type}}</small>
                    {{-- <small>{{$comic->artists}}</small>
                    <small>{{$comic->writers}}</small> --}}
                </div>
            </div>
            @endforeach
        </div>
    </div>

</body>

</html>