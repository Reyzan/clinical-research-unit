<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;

class TeamController extends Controller
{
    /**
     * Display a listing of teams.
     */
    public function index()
    {
        $teamMembers = TeamMember::orderBy('sort_order')->get();

        return view('frontend.teams.index', compact('teamMembers'));
    }

    /**
     * Display the specified team.
     */
    public function show(string $slug)
    {
        $member = TeamMember::where('slug', $slug)->firstOrFail();

        return view('frontend.teams.show', compact('member', 'slug'));
    }
}
