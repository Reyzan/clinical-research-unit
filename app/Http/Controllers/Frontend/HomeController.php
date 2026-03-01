<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

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
}
