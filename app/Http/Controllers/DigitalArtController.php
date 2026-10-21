<?php

namespace App\Http\Controllers;

use App\Models\DigitalArt;

class DigitalArtController extends Controller
{
    public function index()
    {
        $arts = DigitalArt::paginate(4);

        return view('digital-art.index', compact('arts'));
    }

    public function show($id)
    {
        $art = DigitalArt::findOrFail($id);

        return view('digital-art.show', compact('art'));
    }
}