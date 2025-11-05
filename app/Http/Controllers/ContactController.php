<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Mail\ContactConfirmationMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // Send email to team@tridah.cloud
        Mail::to('team@tridah.cloud')->send(
            new ContactFormMail(
                $validated['name'],
                $validated['email'],
                $validated['subject'],
                $validated['message']
            )
        );

        // Send confirmation email to the user
        Mail::to($validated['email'])->send(
            new ContactConfirmationMail($validated['name'])
        );

        return back()->with('success', 'Thank you for your message! We\'ll get back to you within 24-48 hours.');
    }
}
