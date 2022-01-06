@extends('layouts.main')

@section('container')
<div class="container">

    <div class="container text-center mt-5 mb-5">
        <h1>Find Lyrics Here!</h1>
    
    </div>
    
    <div class="containter">
        <h3>Hot Song Lyrics</h3>

        @foreach($lyrics as $lyric)
        <a href="/lyric/{{ $lyric['songId'] }}">{{ $lyric['songTitle'] }}</a>
        <br>
        @endforeach
    </div>


</div>


@endsection