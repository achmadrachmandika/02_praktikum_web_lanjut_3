<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show($slug = '')
    {
        return "Halaman News $slug";
    }
}
