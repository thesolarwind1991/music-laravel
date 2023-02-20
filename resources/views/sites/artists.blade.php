@extends('layout.site', ['title' => 'Исполнители-артисты'])

@section('content')
    <div>
        <h2>Исполнители-артисты</h2>
    </div>
    <hr>
    <div class="row pb-4">
        <ul>
        @foreach($artists as $art)
            <li><h5>{{$art->artist_name}}</h5></li>
        @endforeach
        </ul>
    </div>
@endsection
