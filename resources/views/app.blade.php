<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div id="app">
    <div class="container mx-auto px-2">
        <header class="py-6">
            <h1 class="text-3xl">CalmDog</h1>
        </header>

        <main>
            <router-view></router-view>
        </main>
    </div>
</div>

<script src="/js/app.js"></script>
</body>
</html>
