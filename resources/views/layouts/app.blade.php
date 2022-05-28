<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Library</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.css') }}">
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.components.css') }}">
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.plugins.min.css') }}">
    </head>
    <body class="hold-transition sidebar-mini">
<div class="wrapper">

@include('layouts.header')

@include('layouts.sidebar')

@yield('content')

@include('layouts.footer')
</div>
</body>
</html>