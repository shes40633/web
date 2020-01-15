<?php

namespace App\Http\Controllers;

use App\job;
use App\movie;
use App\coming;
use Illuminate\Http\Request;

class frontcontroller extends Controller
{
    public function index(){
        $movies = movie::orderBy('sort', 'desc')->get();
        $comings = coming::orderBy('sort', 'desc')->get();
        $jobs = job::orderBy('sort', 'desc')->get();
        return view('layouts.front',compact('movies','comings','jobs'));
    }

}
