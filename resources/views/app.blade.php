<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KalmKanine | Calm Your Dog</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    @laravelPWA

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-61441996-8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-61441996-8');
    </script>


</head>
<body class="bg-gray-200 h-full">
<div id="app" class="h-full flex flex-col">

    <header class="py-4 bg-teal-400 font-display">
        <div class="container mx-auto text-center">
            <h1 class="text-2xl text-white">
                <router-link to="/">KalmKanine</router-link>
            </h1>
        </div>
    </header>

    <main class="container mx-auto p-4 flex-grow font-body">
        <transition name="fade" mode="out-in">
            <router-view></router-view>
        </transition>
    </main>
    <div class="container mx-auto text-center text-xs text-gray-500 pb-2">
        <div>
            <router-link to="/how-it-works">About</router-link>
        </div>
        <div>
            <a href="https://www.felixauer.com">Felix Auer</a>, 2020
        </div>

    </div>
</div>

<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
