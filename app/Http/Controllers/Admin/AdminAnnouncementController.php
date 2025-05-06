<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Announcement;

class AdminAnnouncementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $announcements = Announcement::paginate(10);
        return view('admin.announcements.index', compact('announcements'));
    }

    public function create()
    {
        return view('admin.announcements.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:200',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('announcements', 'public');
            $validated['image'] = $imagePath;
        }

        Announcement::create($validated);

        return redirect()->route('admin.announcements.index')
            ->with('success', 'Njoftimi u krijua me sukses!');
    }

    public function edit($id)
    {
        $announcement = Announcement::findOrFail($id);
        return view('admin.announcements.edit', compact('announcement'));
    }

    public function update(Request $request, $id)
    {
        $announcement = Announcement::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:200',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('announcements', 'public');
            $validated['image'] = $imagePath;
        }

        $announcement->update($validated);

        return redirect()->route('admin.announcements.index')
            ->with('success', 'Njoftimi u përditësua me sukses!');
    }

    public function destroy($id)
    {
        $announcement = Announcement::findOrFail($id);
        $announcement->delete();

        return redirect()->route('admin.announcements.index')
            ->with('success', 'Njoftimi u fshi me sukses!');
    }
}
