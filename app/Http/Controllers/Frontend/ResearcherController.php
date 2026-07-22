<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Researcher;

class ResearcherController extends Controller
{
    public function show(string $slug)
    {
        $researcher = Researcher::with(['researchGroup', 'teamMembers'])
            ->where('slug', $slug)
            ->firstOrFail();

        return view('frontend.researchers.show', compact('researcher', 'slug'));
    }
}
