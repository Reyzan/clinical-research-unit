<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of teams.
     */
    public function index()
    {
        return view('frontend.teams.index');
    }

    /**
     * Display the specified team.
     */
    public function show(string $slug)
    {
        return view('frontend.teams.show', compact('slug'));
    }
}
