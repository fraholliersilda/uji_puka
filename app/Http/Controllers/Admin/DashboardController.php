<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Announcement;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $servicesCount = Service::count();
        $announcementsCount = Announcement::count();
        $messagesCount = Contact::count();

        // Get latest 5 announcements
        $latestAnnouncements = Announcement::latest('published_at')->take(5)->get();

        // Get latest 5 contacts/messages
        $latestContacts = Contact::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'servicesCount',
            'announcementsCount',
            'messagesCount',
            'latestAnnouncements',
            'latestContacts'
        ));
    }
}
