{{-- <h1>Judul Film :{{$film->judul}} </h1>
<p>Deskripsi Film :{{$film->deskripsi}} </p> --}}

{{-- Start One To One --}}
{{-- <span>
    Detail Film
    <h4>Kode Film : {{$film->DetailFilm->code_film}} </h4> 
    <h4>Url IMDB : <a href="{{$film->DetailFilm->url_imdb}}" target="_blank">
        Klik disini</a> </h4> 
</span> --}}
{{-- End One To One --}}

{{-- Start One To Many --}}
{{-- @foreach ($film->MediaFilm as $item)
    <p>Media Title : {{$item->title}}</p> --}}
    {{-- <p>Url Media : <a href="{{$item->urlMedia}}">Klik Disini</a></p> --}}
    {{-- @if($item->tipeMedia)
        Url Media : <a href="{{$item->urlMedia}}">Klik Disini</a>
    @else
        <img src="{{$item->urlMedia}}" alt="" height="200px">
    @endif
    <hr>
@endforeach --}}
{{-- End One To Many --}}


@extends('layout.layout')
@section('content')

<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">{{$film->judul}}</h1>
            <p class="lead text-muted">{{$film->deskripsi}}</p>
            <p>
                <a href="{{$film->DetailFilm->url_imdb}}" class="btn btn-primary my-2">Lihat Halaman IMDB</a>
                <a href="{{ url('/film')}}" class="btn btn-secondary my-2">Kembali Ke Home</a>
            </p>
        </div>
    </div>
</section>

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($film->MediaFilm as $item)
            <div class="col">
                <div class="card shadow-sm">
                    @if ($item->tipeMedia)
                    <iframe width="360" height="200" src="{{$item->urlMedia}}"></iframe>
                    @else
                    <img src="{{ $item->urlMedia }}" alt="" height="200">
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection