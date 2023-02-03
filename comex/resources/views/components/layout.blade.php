<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{$title}}</title>
        @vite(['resources/js/app.js'])
    </head>
    <body>
        <div class="container-fluid">
        {{$slot}}
        </div>
    </body>
</html>