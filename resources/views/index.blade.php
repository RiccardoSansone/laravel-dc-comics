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
    <div class="bg-primary text-white d-flex justify-content-center w-100">
        <h1>BENVENUTO! SCEGLI QUELLO CHE DESIDERI FARE</h1>
    </div>

    <div class="container d-flex justify-content-center gap-5 mt-3">
        <a class="text-decoration-none" href="/create">Inserisci un nuovo fumetto</a><br>
        <a class="text-decoration-none" href="/show">Visualizza la lista dei fumetti</a>
    </div>

    <div class="mt-5 d-flex justify-content-center w-100">
        <img width="1300" height="700" src="https://www.geekjournal.it/wp-content/uploads/gatti-wars.jpg" alt="">
    </div>

</body>

</html>