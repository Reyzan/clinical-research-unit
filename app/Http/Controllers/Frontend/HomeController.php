<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Researcher;
use App\Models\TeamMember;

class HomeController extends Controller
{
    /**
     * Display the homepage.
     */
    public function index()
    {
        // Fetch latest 4 published news articles for blog section
        $news = News::with('categories')
            ->where('status', 'published')
            ->latest('published_at')
            ->take(4)
            ->get();

        return view('frontend.home', compact('news'));
    }

    /**
     * Show the digital name card for a team member or researcher.
     *
     * The slug can belong to either person type, so both tables are
     * checked and normalized into a single shape for the view.
     */
    public function showNameCard(string $slug)
    {
        $teamMember = TeamMember::where('slug', $slug)->first();

        if ($teamMember) {
            $person = [
                'name' => $teamMember->name,
                'title' => $teamMember->title,
                'email' => $teamMember->email,
            ];
        } else {
            $researcher = Researcher::where('slug', $slug)->firstOrFail();

            $person = [
                'name' => $researcher->name,
                'title' => $researcher->title,
                'email' => $researcher->email,
            ];
        }

        return view('pages.name-card.show', compact('person'));
    }
}
