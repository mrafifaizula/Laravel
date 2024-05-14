@php
    $album1 = App\Models\AlbumMusik::all();
    $album2 = \App\Models\AlbumMusik::where('Cover_album','Apapun Dilibas')->orderBy('id', 'desc')->get();
    $album3 = \App\Models\AlbumMusik::where('Cover_album','Apapun Dilibas')->orderBy('id','asc')->first();
    $album4 = \App\Models\AlbumMusik::where('cover_album','Apapun Dilibas')->orderBy('id','asc')->find(1);
@endphp


{{-- Pakai Foreach --}}

    <h1 style="color:rgb(255, 0, 0)">Menampilkan Semua Data</h1>
@foreach($album1 as $data)
    <h1>ID : {{$data->id}} </h1>
    <h1>Judul : {{$data->judul}} </h1>
    <h1>Tahun : {{$data->tahun}} </h1>
    <h1>Cover Album : {{$data->cover_album}} </h1>
    <hr>
@endforeach


    <h1 style="color:rgb(17, 0, 255)">Menampilkan Semua Yang Di Filter Data</h1>
@foreach($album2 as $data)
    <h1>ID : {{$data->id}} </h1>
    <h1>Judul : {{$data->judul}} </h1>
    <h1>Tahun : {{$data->tahun}} </h1>
    <h1>Cover Album : {{$data->cover_album}} </h1>
    <hr>
@endforeach


{{-- Tanpa Foreach (First) --}}

    <h1 style="color:rgb(0, 255, 140)">Menampilkan Satu Data</h1>
    <h1>Tanpa Foreach</h1>
    <h1>ID : {{$album3->id ?? 'Null'}} </h1>
    <h1>Judul : {{$album3->judul ?? 'Null'}} </h1>
    <h1>Tahun : {{$album3->tahun ?? 'Null'}} </h1>
    <h1>Cover Album : {{$album3->cover_album ?? 'Null'}} </h1>
    <hr>
    



{{-- Tanpa Foreach (Find) --}}
    <h1 style="color:aqua">Menampilkan Data Yang Dipilih</h1>
    <h1>Tanpa Foreach</h1>
    <h1>ID : {{$album4->id ?? 'Null'}} </h1>
    <h1>Judul : {{$album4->judul ?? 'Null'}} </h1>
    <h1>Tahun : {{$album4->tahun ?? 'Null'}} </h1>
    <h1>Cover Album : {{$album4->cover_album ?? 'Null'}} </h1>
    <hr>
    

