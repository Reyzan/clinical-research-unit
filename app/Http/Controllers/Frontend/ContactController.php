<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Show the contact form.
     */
    public function index()
    {
        return view('frontend.contact');
    }

    /**
     * Store the contact message.
     */
    public function store(Request $request)
    {
        // TODO: Implement contact message storage/email logic
        // For now, redirect back with success message
        return back()->with('success', 'Message sent successfully!');
    }
}
