@extends('layout.layout')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{session('success')}}
            </div>
            @endif
            <div class="card-header">Data genre
                <a href="{{route('genre.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
            </div>
            <div class="card-boby">
                <div class="table-responsive">
                    <table class="table" id="datatable">
                        <thead>
                            <th>No</th>
                            <th>Nama genre</th>
                            <th>Aksi</th>
                        </thead>
                        @php $no = 1; @endphp
                        <tbody>
                            @foreach ($genre as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->nama_genre}}</td>
                                <td>
                                    <form action="{{route('genre.destroy', $item->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{route('genre.edit', $item->id)}}" class="btn btn-sm btn-success">Edit
                                        </a>
                                        <a href="{{route('genre.show', $item->id)}}" class="btn btn-sm btn-warning">Show
                                        </a>
                                        <button class="btn btn-sm btn-danger" type="submit"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection