<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class AdminServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'required|string',
            'icon' => 'nullable|string|max:50',
        ]);

        Service::create($validated);

        return redirect()->route('admin.services.index')
            ->with('success', 'Shërbimi u krijua me sukses!');
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.show', compact('service'));
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'required|string',
            'icon' => 'nullable|string|max:50',
        ]);

        $service->update($validated);

        return redirect()->route('admin.services.index')
            ->with('success', 'Shërbimi u përditësua me sukses!');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('admin.services.index')
            ->with('success', 'Shërbimi u fshi me sukses!');
    }
}
