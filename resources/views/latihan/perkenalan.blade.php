@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row-justify-content-center">
        <div class="col md-5 mt-5 mb-5">
            <div class="card mt-5">
                <div class="card-header">
                    Perkenalan
                </div>
                <div class="card-body">
                    <p>Nama : {{$data['Nama']}}</p>
                    <p>Agama : {{$data['Agama']}}</p>
                    <p>Alamat : {{$data['Alamat']}}</p>
                    <p>Jk : {{$data['Jk']}}</p>
                    <p>Hobi</p>
                    <ol>
                        @foreach($data['Hobi'] as $item)
                        <li>{{$item}}</li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection