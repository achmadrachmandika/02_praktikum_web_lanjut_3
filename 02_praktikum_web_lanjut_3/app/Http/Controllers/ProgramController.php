<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir()
    {
        return ('https://www.educastudio.com/program/karir');
    }

    public function magang()
    {
        return ('https://www.educastudio.com/program/magang');
    }

    public function kunjungan()
    {
        return ('https://www.educastudio.com/program/kunjungan-industri');
    }
}
