<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Announcement;
use App\Models\Contact;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $servicesCount = Service::count();
        $announcementsCount = Announcement::count();
        $messagesCount = Contact::count();

        return view('admin.dashboard', compact('servicesCount', 'announcementsCount', 'messagesCount'));
    }
}
