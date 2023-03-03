<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function eduGames()
    {
        return 'https://www.educastudio.com/category/marbel-edu-games ';
    }

    public function kidsGames()
    {
        return ('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    }

    public function storyBooks()
    {
        return ('https://www.educastudio.com/category/riri-story-books');
    }

    public function kidsSongs()
    {
        return ('https://www.educastudio.com/category/kolak-kids-songs');
    }
}
