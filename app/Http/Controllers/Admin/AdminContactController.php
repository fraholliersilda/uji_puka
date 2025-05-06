<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class AdminContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $contacts = Contact::latest()->paginate(15);
        return view('admin.contacts.index', compact('contacts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id): View
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contacts.show', compact('contact'));
    }

    /**
     * Mark the contact as read.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function markAsRead($id): RedirectResponse
    {
        $contact = Contact::findOrFail($id);
        $contact->update(['is_read' => true]);

        return redirect()->route('admin.contacts.show', $contact->id)
            ->with('success', 'Mesazhi u shënua si i lexuar!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('admin.contacts.index')
            ->with('success', 'Mesazhi u fshi me sukses!');
    }
}
