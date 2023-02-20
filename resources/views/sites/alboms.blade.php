@extends('layout.site', ['title' => 'Альбомы исполнителей'])

@section('content')
    <div>
        <h2>Альбомы исполнителей</h2>
    </div>
    <hr>
    <div class="row pb-4">
        <table style="width:100%;">
            <tr>
                <th colspan="2">Альбом</th>
                <th>Исполнитель</th>
                <th>Треки</th>
                <th>Год</th>
            </tr>
            @foreach($alboms as $albom)
            <tr style="border:2px solid">
                <td><img style="width: 100px" src="{{ asset('images/disk.jpg') }}"></td>
                <td>{{ $albom->albom_name }}</td>
                <td>{{$albom->artists->artist_name}}
                </td>

                <td><? $i = 1;
                    foreach($albom->songs as $song) {
                        echo $i.". ".$song->song_name."<br>";
                        $i++;
                     } ?>
                </td>
                <td>{{$albom->albom_year}}</td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
