@extends('layouts.main')

@section('container')
<div class="container">

    <div class="container text-center mt-5 mb-5">

        <h3>{{ $lyric['artist'] }} - {{ $lyric['songTitle'] }}</h3>
        <br>
        <pre>{{ $lyric['songLyrics'] }}</pre>
    
    </div>

</div>


@endsection