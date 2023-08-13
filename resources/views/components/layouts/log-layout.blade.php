<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Page Title' }}</title>

        {{-- INCLUDES --}}
        <link rel="stylesheet" href="{{ asset('/includes/bulma/bulma.css')}}">
        {{-- <link rel="stylesheet" href="{{ asset('/includes/SweetAlert/sweetalert2_min.css') }}">
        <script src="{{ asset('/includes/SweetAlert/sweetalert2.min.js') }}"></script> --}}
    </head>
    <body>

        {{-- Log Layout --}}
        {{-- @include('includes.navbar') --}}

        {{-- {{ $slot }} --}}
    
        {{-- @include('includes.footer') --}}

        {{-- {{$slot}} --}}


        @livewire('log-component')
















    </body>
</html>

