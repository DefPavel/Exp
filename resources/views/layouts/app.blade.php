<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>KLNU</title>
        <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    </head>
    <body>
      <div class="wrapper" id="app">
         @include('extends.header')
         @include('extends.logo')
         @include('extends.SideBar')
         <div class="content">
           @yield('сontent')
         </div>
         @include('extends.footer')
      </div>
      <script src="{{asset('js/main.js')}}"></script>
      <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
