{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body
    style="background: linear-gradient(45deg, #ff0000, #00ff00, #0000ff); text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5)">

</body>

</html>

@php
$film = \App\Models\Film::all();
$orangTua = \App\Models\Film::find(1);
$anak = \App\Models\DetailFilm::find(1);
$mediaFilm = \App\Models\MediaFilm::all();
@endphp

{{-- <h1>Daftar Film</h1>
@foreach ($film as $item)
<h2>Film Ke : {{$item->id}}</h2>
<ul>
    <li>Judul Film : {{ $item->judul }}</li>
    <li>Deskripsi Film : {{ $item->deskripsi }}</li>
    <a href="{{url('film/' .$item->id)}}">Detail Film</a>
</ul> --}}
{{-- <h3>Detail Film</h3>
<ul>
    <li>Code Film : {{$item->DetailFilm->code_film}}</li>
    <li>Code Film : {{$item->DetailFilm->url_imdb}}</li>
</ul> --}}

{{-- @endforeach

<br>

<h1 style="color: red">Single Film</h1>
<h2>Film Ke : {{$orangTua->id}}</h2>
<ul>
    <li>Judul Film : {{ $orangTua->judul }}</li>
    <li>Deskripsi Film : {{ $orangTua->deskripsi }}</li>
</ul>
<h3>Detail Film</h3>
<ul>
    <li>Code Film : {{$orangTua->DetailFilm->code_film}}</li>
    <li>Code Film : {{$orangTua->DetailFilm->url_cdbm}}</li>
</ul>

<br>

<h1 style="color: blue">Single Film (ForeignKey)</h1>
<h2>Film Ke : {{$anak->Film->id}}</h2>
<ul>
    <li>Judul Film : {{ $anak->Film->judul }}</li>
    <li>Deskripsi Film : {{ $anak->film->deskripsi }}</li>
</ul>
<h3>Detail Film</h3>
<ul>
    <li>Code Film : {{$anak->code_film}}</li>
    <li>Code Film : {{$anak->url_imdb}}</li>
</ul>

<br>


<h1 style="color: blueviolet">Media Film</h1>
@foreach ($mediaFilm as $item)
<h2>Id Film : {{$item->id}}</h2>
<ul>
    <li>Id Film : {{$item->Film->id}}</li>
    <li>Jenis Media : {{$item->tipeMedia}}</li>
    <li>Judul : {{$item->title}}</li>
    <li>Url Media : {{$item->urlMedia}}</li>
</ul>

@endforeach --}}

{{-- <h1 style="color: blueviolet">Media Film</h1> --}}
{{-- <h2>Id Media : {{$mediaFilm->id}}</h2>
<ul>
    <li>Id Film : {{$mediaFilm->Film->id}}</li>
    <li>Judul : {{$mediaFilm->title}}</li>
    <li>Jenis Media : {{$mediaFilm->tipeMedia}}</li>
    <li>Url Media : {{$mediaFilm->urlMedia}}</li>
</ul> --}}


@extends('layout.layout')
@section('content')
@php
$film = \App\Models\Film::all();
@endphp

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($film as $item)
            <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                            dy=".3em">{{$item->judul}}</text>
                    </svg>

                    <div class="card-body">
                        <p class="card-text">{{$item->deskripsi}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{ url('film/' .$item->id)}}" type="button" class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection 
