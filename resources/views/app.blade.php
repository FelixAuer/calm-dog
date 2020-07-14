<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CalmDog | Calm Your Dog</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body class="bg-gray-200 h-full">
<div id="app"  class="h-full flex flex-col">

    <header class="py-4 bg-teal-400 font-display">
        <div class="container mx-auto text-center">
            <h1 class="text-2xl text-white"><a href="/">CalmDog</a></h1>
        </div>
    </header>

    <main class="container mx-auto p-4 flex-grow font-body">
        <router-view></router-view>
    </main>
</div>

<script src="{{ mix('/js/app.js') }}"></script></body>
</html>
