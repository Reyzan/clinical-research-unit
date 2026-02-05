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
        // Example team member data - replace with database query when ready
        $teamMembers = [
            'dicky-tahapary' => [
                'name' => 'dr. Dicky L. Tahapary SpPD-KEMD, PhD',
                'title' => 'Kepala Instalasi Clinical Research Unit',
                'bio' => 'Leading CRU RSCM\'s precision medicine initiatives with focus on metabolic disease research and genomic studies. Over 15 years of experience in endocrinology and metabolic disorders.',
                'image' => asset('frontend/images/team/dr-dicky.png'),
            ],
            // Add other team members here
        ];

        $member = $teamMembers[$slug] ?? null;

        if (!$member) {
            abort(404);
        }

        return view('frontend.teams.show', [
            'slug' => $slug,
            'member' => (object) $member
        ]);
    }
}
