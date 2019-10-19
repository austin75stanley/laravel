<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <title>{{ config ('APP.NAME','LSAPP') }}</title>
        <link href="{{ url('bootstrap/bootstrap.min.css') }}" rel='stylesheet' type='text/css'>
        
        <link href="{{ url('css/app.css') }}" rel='stylesheet' type='text/css'>
       
    </head>
    <body>
    <div class='container'>
      @yield('content')
      </div>
      <script src="{{ url('bootstrap/bootstrap.bundle.js') }}"></script>
    </body>
</html>
