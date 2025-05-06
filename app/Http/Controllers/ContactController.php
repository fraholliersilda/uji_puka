<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    /**
     * Display the contact form.
     *
     * @return View
     */
    public function index(): View
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'subject' => 'required|string|max:200',
            'message' => 'required|string',
        ]);

        $validated['is_read'] = false;

        Contact::create($validated);

        return redirect()->route('contact.index')
            ->with('success', 'Mesazhi juaj u dërgua me sukses! Do ju kontaktojmë së shpejti.');
    }
}
