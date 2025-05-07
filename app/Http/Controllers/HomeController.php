<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Announcement;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::take(3)->get();
        $announcements = Announcement::latest()->take(3)->get();

        return view('home', compact('services', 'announcements'));
    }
}
