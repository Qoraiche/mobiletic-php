<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __invoke()
    {
        // services
        return view('projects');
    }
}
