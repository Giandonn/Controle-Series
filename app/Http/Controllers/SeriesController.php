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

        $html = '<ul>';

        foreach ($series as $s) {
            $html .= "<li>$s</li>";
        }

        $html .= "</ul>";

        return $html;
    }
}
