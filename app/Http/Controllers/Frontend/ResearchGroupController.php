<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ResearchGroup;

class ResearchGroupController extends Controller
{
    public function show(string $slug)
    {
        $group = ResearchGroup::with(['researchers' => function ($query) {
            $query->orderBy('sort_order');
        }])
            ->where('slug', $slug)
            ->firstOrFail();

        return view('frontend.teams.research-groups.show', compact('group', 'slug'));
    }
}
