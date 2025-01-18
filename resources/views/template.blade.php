<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titre')</title>
    {{--=================Bootstrap=======================--}}
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
    {{--=================Fontawesome=======================--}}
<link href="{{url('fontawesome/css/fontawesome.css')}}" rel="stylesheet">
<link href="{{url('fontawesome/css/brands.css')}}" rel="stylesheet">
<link href="{{url('fontawesome/css/solid.css')}}" rel="stylesheet">
    
</head>
<body>
    @include('components.nav')
<div class="container">
    @yield('content')
</div>
@include('components.footer')










    
{{--=================Fin du contenu de la page=======================--}}
{{--=================jQuery + Bootstrap js=======================--}}
<script src="{{url('js/jquery-3.7.1.min.js')}}"></script>
<script src="{{url('js/bootstrap.bundle.js')}}"></script>
</body>
</html>