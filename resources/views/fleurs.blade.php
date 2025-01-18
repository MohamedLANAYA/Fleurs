@extends('template')
@section('titre','fleurs')
@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1 style="color: #34495e">Fleurs</h1>
        </div>
    </div>
    <div class="row">
        {{--================= Affichage des images avec leurs descriptions dans les cards Bootstrap =======================--}}
        @foreach ($fleursdata as $f)
            <div class="col-lg-3 col-md-6 mb-4 d-flex align-items-stretch" style="">
                <div class="card">
                    <img src="{{ asset('images/'.$f['url']) }}" class="card-img-top" alt="Image de {{ $f['nom'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $f['nom'] }}</h5>
                        <p class="card-text">{{ $f['description'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
