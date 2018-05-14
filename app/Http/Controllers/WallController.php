<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WallController extends Controller
{
    public function show($search = false)
    {
        return view('show', ['search' => $search]);
    }
}
