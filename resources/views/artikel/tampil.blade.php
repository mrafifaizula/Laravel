<style>

</style>
@extends('layout.layout')
@section('content')
@php
$artikel = \App\Models\Artikel::all();
@endphp
<div class="album bg-light">
    <div class="container">
        <center class=" mt-5 mb-5">
            <h1><b>Artikel</b></h1>
        </center>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 justify-content-center">
            @foreach ($artikel as $item)
            <div class="col">
                <div class="card shadow-sm">
                    <img height="200" width="350" src="{{ $item->foto }}" class="card-img-top" alt="...">

                    <div class="card-body">
                        <p class="card-text">{{ $item->judul }}.</p>
                        <p>Penulis : {{ $item->penulis }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{ url('artikel/'. $item->id) }}"
                                    class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection