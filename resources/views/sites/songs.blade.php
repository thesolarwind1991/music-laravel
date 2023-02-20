@extends('layout.site', ['title' => 'Песни'])

@section('content')
    <div>
        <h2>Песни</h2>
    </div>
    <hr>
    <div class="row pb-4">
        <ul>
            @foreach($songs as $song)
                <li><h5><img style="width:25px"src="{{asset('images/play.jpg')}}"/>{{$song->artists[0]->artist_name}} - {{$song->song_name}}</h5></li>
            @endforeach
        </ul>
    </div>
@endsection
