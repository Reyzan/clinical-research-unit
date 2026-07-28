<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Researcher;
use App\Models\ResearchGroup;
use App\Models\TeamMember;

class TeamController extends Controller
{
    /**
     * Display the public Teams page (Leadership + Research Groups + Researchers).
     */
    public function index()
    {
        $head = TeamMember::where('role', 'head_of_cru')
            ->orderBy('sort_order')
            ->first();

        $subHeads = TeamMember::where('role', 'sub_head')
            ->orderBy('sort_order')
            ->get();

        $researchGroups = ResearchGroup::orderBy('sort_order')->get();

        $researchers = Researcher::with('researchGroup')
            ->orderBy('sort_order')
            ->get();

        return view('frontend.teams.index', compact(
            'head',
            'subHeads',
            'researchGroups',
            'researchers',
        ));
    }

    /**
     * Display the specified team member (leadership profile).
     */
    public function show(string $slug)
    {
        $member = TeamMember::where('slug', $slug)->firstOrFail();

        return view('frontend.teams.show', compact('member', 'slug'));
    }
}
