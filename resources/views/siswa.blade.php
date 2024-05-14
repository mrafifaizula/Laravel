@php
    // ->where('id', '2')
    // ->where('nama', 'V')
    // ->groupBy('id')
    
    $siswa = \App\Models\Siswa::all();
    $siswa2 = \App\Models\Siswa::orderBy('id','desc')->get();
    $siswa3 = \App\Models\Siswa::where('nama','Fadil')->orderBy('id','asc')->first();
    $siswa4 = \App\Models\Siswa::where('kelas','XI RPL 2')->orderBy('id','desc')->firstOrFail();


@endphp
{{-- 
    <h1>First</h1>
    <h1>ID : {{$siswa3->id ?? 'Null'}} </h1>
    <h1>Nama : {{$siswa3->nama ?? 'Null'}} </h1>
    <h1>Kelas : {{$siswa3->kelas ?? 'Null'}} </h1>
    <h1>Jenis Kelamin : {{$siswa3->jenis_kelamin ?? 'Null'}} </h1>
    <hr> --}}

    {{-- <h1>Tanpa Foreach</h1>
    <h1>ID : {{$siswa2->id ?? 'Null'}} </h1>
    <h1>Nama : {{$siswa2->nama ?? 'Null'}} </h1>
    <h1>Kelas : {{$siswa2->kelas ?? 'Null'}} </h1>
    <h1>Jenis Kelamin : {{$siswa2->jenis_kelamin ?? 'Null'}} </h1>
    <hr> --}}

    
    @foreach($siswa as $data)
        <h1>Foreach(pengulangan)</h1>
        <h1>ID : {{$data->id}} </h1>
        <h1>Nama : {{$data->nama}} </h1>
        <h1>Kelas : {{$data->kelas}} </h1>
        <h1>Jenis Kelamin : {{$data->jenis_kelamin}} </h1>
        <hr>
    @endforeach
   
