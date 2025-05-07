@extends('layouts.app')

@section('title', $announcement->title)

@section('content')
    <div class="container py-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Kryefaqja</a></li>
                <li class="breadcrumb-item"><a href="{{ route('announcements.index') }}">Njoftimet</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $announcement->title }}</li>
            </ol>
        </nav>

        <div class="row mt-4">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $announcement->title }}</h1>
                <p class="text-muted">
                    <i class="far fa-calendar-alt me-1"></i> {{ $announcement->published_at->format('d M Y') }}
                </p>

                <div class="announcement-content">
                    <p>{!! nl2br(e($announcement->content)) !!}</p>
                </div>

                <div class="mt-5">
                    <a href="{{ route('announcements.index') }}" class="btn btn-outline-primary">
                        <i class="fas fa-arrow-left me-2"></i> Kthehu tek njoftimet
                    </a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Njoftime të tjera</h5>
                    </div>
                    <div class="list-group list-group-flush">
                        @foreach(\App\Models\Announcement::where('id', '!=', $announcement->id)->latest()->take(5)->get() as $otherAnnouncement)
                        <a href="{{ route('announcements.show', $otherAnnouncement->id) }}" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">{{ Str::limit($otherAnnouncement->title, 50) }}</h6>
                                <small>{{ $otherAnnouncement->published_at->format('d M') }}</small>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Na Kontaktoni</h5>
                    </div>
                    <div class="card-body">
                        <p>Keni pyetje rreth këtij njoftimi?</p>
                        <a href="{{ route('contact.index') }}" class="btn btn-primary w-100">Na kontaktoni</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
