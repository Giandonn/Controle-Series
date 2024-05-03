<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index (Request $request) {
        $series = [
            'anime',
            'peaky blinders',
            'tartarugas ninja'
        ];

        return view('listar-series', [
            'series' => $series
        ]);
    }
}
