@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 md-5">
            <div class="col">
                <div class="card">
                    <img height="300" src="{{ $artikel->foto }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <ul>
                            <p class="card-text"><b>{{ $artikel->judul }}</b></p>
                            <p>Kategori : <a href="{{url('artikel/kategori/'. $artikel->kategori)}}">{{$artikel->kategori}}</a></p>
                            <p>Konten : {{ $artikel->konten }}</p>
                            <p>Penulis : {{ $artikel->penulis }}</p>
                        </ul>
                    </div>
                </div>
                <a href="{{ url('/artikel')}}" class="btn btn-secondary my-2">Kembali Ke Home</a>
            </div>
        </div>
    </div>
</div>
@endsection