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
     * Serve the digital name card PDF for a team member or researcher.
     *
     * The slug can belong to either person type, so both tables are
     * checked before resolving the PDF stored under the shared slug.
     */
    public function showNameCard(string $slug)
    {
        $exists = TeamMember::where('slug', $slug)->exists()
            || Researcher::where('slug', $slug)->exists();

        abort_unless($exists, 404);

        $path = public_path("frontend/images/name-card/{$slug}.pdf");

        abort_unless(file_exists($path), 404);

        return response()->file($path, ['Content-Type' => 'application/pdf']);
    }
}
