<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Show the appointment form.
     */
    public function create()
    {
        return view('frontend.appointment');
    }

    /**
     * Store the appointment.
     */
    public function store(Request $request)
    {
        // TODO: Implement appointment storage logic
        // For now, redirect back with success message
        return back()->with('success', 'Appointment request submitted successfully!');
    }
}
