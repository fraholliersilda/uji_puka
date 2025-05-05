<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmission;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'subject' => 'required|string|max:200',
            'message' => 'required|string',
        ]);

        // Ruaj mesazhin në databazë
        $contact = Contact::create($validated);

        // Dërgo email (opsionale - mund ta konfigurosh më vonë)
        // Mail::to('info@ujipuka.com')->send(new ContactFormSubmission($contact));

        return redirect()->route('contact.index')
            ->with('success', 'Mesazhi juaj u dërgua me sukses!');
    }
}
