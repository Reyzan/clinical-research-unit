<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of services.
     */
    public function index()
    {
        return view('frontend.services.index');
    }

    /**
     * Display the specified service.
     */
    public function show(string $slug)
    {
        $validServices = ['biobank', 'genomic', 'bacterial-analysis', 'clinical-trial'];

        if (in_array($slug, $validServices)) {
            return view('frontend.services.' . $slug);
        }

        return view('frontend.services.show', compact('slug'));
    }
}
