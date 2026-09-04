<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:100',
        'email' => 'required|email|max:150',
        'website' => 'nullable|string|max:255',
        'message' => 'required|string|min:10|max:2000',
    ]);

    try {

        Mail::to(config('mail.from.address'))
            ->send(new ContactMail($validated));

        return back()
            ->with('success', 'Your message has been sent successfully.')
            ->withFragment('contact');

    } catch (\Exception $e) {

        return back()
            ->withInput()
            ->with('error', 'Sorry! We could not send your message at the moment. Please try again later.')
            ->withFragment('contact');

    }
}
}