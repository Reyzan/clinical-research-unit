<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of doctors.
     */
    public function index()
    {
        return view('frontend.doctors.index');
    }

    /**
     * Display the specified doctor.
     */
    public function show(string $slug)
    {
        return view('frontend.doctors.show', compact('slug'));
    }
}
