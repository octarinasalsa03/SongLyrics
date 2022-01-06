<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class LyricsController extends Controller
{
    public function index() {

        $lyrics = Http::get("https://api-song-lyrics.herokuapp.com/hot");
        return view('home', [
            'lyrics' => $lyrics['data']
        ]);
    }

    public function getLyricById($id) {
        $lyric = Http::get("https://api-song-lyrics.herokuapp.com/lyrics/".$id);
        return view('lyricsong', [
            'lyric' => $lyric['data']
        ]);

    }
}
