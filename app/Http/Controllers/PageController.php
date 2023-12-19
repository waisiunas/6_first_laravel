<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $names = [
            "Saim",
            "Sufi",
            "Ali",
        ];
        return view('home', [
            'names' => $names,
        ]);
    }

    public function about()
    {
        return view('about');
    }
}
