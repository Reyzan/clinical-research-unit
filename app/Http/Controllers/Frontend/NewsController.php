<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of news articles.
     */
    public function index(Request $request)
    {
        $query = News::with('categories')
            ->where('status', 'published')
            ->latest('published_at');

        // Filter by category if provided
        if ($request->has('category')) {
            $query->whereHas('categories', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        $news = $query->paginate(9);
        $categories = Category::withCount('news')->get();
        $selectedCategory = $request->get('category');

        return view('frontend.news.index', compact('news', 'categories', 'selectedCategory'));
    }

    /**
     * Display the specified news article.
     */
    public function show(string $slug)
    {
        $news = News::with('categories')
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        // Get previous and next articles for navigation
        $previousNews = News::where('status', 'published')
            ->where('published_at', '<', $news->published_at)
            ->latest('published_at')
            ->first();

        $nextNews = News::where('status', 'published')
            ->where('published_at', '>', $news->published_at)
            ->oldest('published_at')
            ->first();

        // Get recent news for sidebar (3 latest, excluding current)
        $recentNews = News::where('status', 'published')
            ->where('id', '!=', $news->id)
            ->latest('published_at')
            ->take(3)
            ->get();

        // Get all categories with news count for sidebar
        $categories = Category::withCount('news')->get();

        return view('frontend.news.show', compact('news', 'recentNews', 'categories', 'previousNews', 'nextNews'));
    }
}
