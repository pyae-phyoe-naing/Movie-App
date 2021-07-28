<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieAndSerieController extends Controller
{
    public function index(){
        return view('backend.movie-serie.index');
    }
    public function create(){
        return view('backend.movie-serie.create');
    }
}
