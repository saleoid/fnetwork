<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
      <div class="container mx-auto" id="app">
        <stats :teams="{{ json_encode($teams) }}" :matches="{{ json_encode($matches) }}"></stats>
      </div>
      <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
