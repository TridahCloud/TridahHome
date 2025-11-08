<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Mail\ContactConfirmationMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $recaptchaKey = config('services.recaptcha.key');
        $recaptchaSecret = config('services.recaptcha.secret');
        $recaptchaEnabled = filled($recaptchaKey) && filled($recaptchaSecret);

        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ];

        if ($recaptchaEnabled) {
            $rules['g-recaptcha-response'] = 'nullable|string';
        }

        $validated = $request->validate($rules);

        if ($recaptchaEnabled) {
            $token = $request->input('g-recaptcha-response');

            if (blank($token)) {
                return back()
                    ->withErrors(['recaptcha' => 'Please complete the reCAPTCHA challenge before submitting.'])
                    ->withInput();
            }

            $recaptchaResponse = Http::asForm()->post(
                'https://www.google.com/recaptcha/api/siteverify',
                [
                    'secret' => $recaptchaSecret,
                    'response' => $token,
                    'remoteip' => $request->ip(),
                ]
            );

            if (! $recaptchaResponse->successful() || ! $recaptchaResponse->json('success')) {
                return back()
                    ->withErrors(['recaptcha' => 'reCAPTCHA verification failed. Please try again.'])
                    ->withInput();
            }

            $recaptchaData = $recaptchaResponse->json();
            $minScore = (float) config('services.recaptcha.score', 0.5);

            if (($recaptchaData['action'] ?? null) !== 'contact' || ($recaptchaData['score'] ?? 0) < $minScore) {
                return back()
                    ->withErrors(['recaptcha' => 'We could not verify your submission. Please try again.'])
                    ->withInput();
            }
        }

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
