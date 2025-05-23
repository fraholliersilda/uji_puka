@extends('layouts.admin')

@section('title', 'Dashboard')

@section('header', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card bg-primary text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Shërbimet</h5>
                        <h2 class="display-4">{{ $servicesCount }}</h2>
                    </div>
                    <i class="fas fa-cogs fa-3x"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a href="{{ route('admin.services.index') }}" class="text-white text-decoration-none">Shiko detajet</a>
                <a href="{{ route('admin.services.index') }}" class="text-white">
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card bg-success text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Njoftime</h5>
                        <h2 class="display-4">{{ $announcementsCount }}</h2>
                    </div>
                    <i class="fas fa-bullhorn fa-3x"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a href="{{ route('admin.announcements.index') }}" class="text-white text-decoration-none">Shiko detajet</a>
                <a href="{{ route('admin.announcements.index') }}" class="text-white">
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card bg-info text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Mesazhe</h5>
                        <h2 class="display-4">{{ $messagesCount }}</h2>
                    </div>
                    <i class="fas fa-envelope fa-3x"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a href="{{ route('admin.contacts.index') }}" class="text-white text-decoration-none">Shiko detajet</a>
                <a href="{{ route('admin.contacts.index') }}" class="text-white">
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-bullhorn me-1"></i>
                Njoftimet e fundit
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Titulli</th>
                                <th>Data e publikimit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($latestAnnouncements as $announcement)
                            <tr class="cursor-pointer" onclick="window.location='{{ route('admin.announcements.show', $announcement->id) }}'">
                                <td>{{ Str::limit($announcement->title, 40) }}</td>
                                <td>{{ $announcement->published_at ? $announcement->published_at->format('d M Y') : 'Pa publikuar' }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-envelope me-1"></i>
                Mesazhet e fundit
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Emri</th>
                                <th>Subjekti</th>
                                <th>Statusi</th>
                                <th>Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($latestContacts as $contact)
                            <tr class="cursor-pointer {{ $contact->is_read ? '' : 'table-light fw-bold' }}" onclick="window.location='{{ route('admin.contacts.show', $contact->id) }}'">
                                <td>{{ $contact->name }}</td>
                                <td>{{ Str::limit($contact->subject, 30) }}</td>
                                <td>
                                    @if($contact->is_read)
                                        <span class="badge bg-success">Lexuar</span>
                                    @else
                                        <span class="badge bg-warning text-dark">Pa lexuar</span>
                                    @endif
                                </td>
                                <td>{{ $contact->created_at->format('d M Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .cursor-pointer {
        cursor: pointer;
    }
    .cursor-pointer:hover {
        background-color: #f8f9fa;
    }
</style>
@endsection
