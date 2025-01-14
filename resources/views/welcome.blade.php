<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Laravel & Vue.js</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div id="app"></div>
    @vite('resources/js/app.js',)
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

</body>
</html>
