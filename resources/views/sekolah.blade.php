@php
    $sekolah = \App\Models\Sekolah::where('id', '!=',5)->orderBy('id','desc')->get();
@endphp

@foreach($sekolah as $data1)
    <h1>Nama : {{$data1->nama}} </h1>
    <h1>Alamat : {{$data1->alamat}} </h1>
    <h1>Email : {{$data1->email}} </h1>
    <h1>Telepon : {{$data1->tlp}} </h1>
    <h1>Status : {{$data1->status}} </h1>
    <br>
@endforeach