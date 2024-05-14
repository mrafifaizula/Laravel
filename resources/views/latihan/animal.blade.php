@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col md-10 mt-5">
            <div class="card">
                <div class="card-header">Daftar Hewan</div>
                <div class="card-body">
                    <ol>
                        @foreach($hewan as $item)
                            @if($item == 'Crocodile')
                                <li>{{$item}} - hewan setia</li> 
                            @else
                                <li>{{$item}}</li>   
                            @endif
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection