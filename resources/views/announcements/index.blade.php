@extends('layouts.app')

@section('title', 'Njoftimet')

@section('content')
    <!-- Announcements Hero -->
    <section class="hero text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Njoftimet</h1>
            <p class="lead">Informacione të rëndësishme për komunitetin</p>
        </div>
    </section>

    <!-- Announcements List -->
    <section class="py-5">
        <div class="container">
            @if($announcements->count() > 0)
                <div class="row">
                    @foreach($announcements as $announcement)
                    <div class="col-md-6 mb-4">
                        <div class="card announcement-card h-100">
                            @if($announcement->image)
                            <img src="{{ asset('storage/' . $announcement->image) }}" class="card-img-top" alt="{{ $announcement->title }}">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $announcement->title }}</h5>
                                <p class="text-muted small">
                                    <i class="far fa-calendar-alt me-1"></i> {{ $announcement->published_at->format('d M Y') }}
                                </p>
                                <p class="card-text">{{ Str::limit($announcement->content, 200) }}</p>
                                <a href="{{ route('announcements.show', $announcement->id) }}" class="btn btn-outline-primary">Lexo më shumë</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="d-flex justify-content-center mt-4">
                    {{ $announcements->links() }}
                </div>
            @else
                <div class="alert alert-info text-center">
                    <p>Nuk ka njoftime për momentin.</p>
                </div>
            @endif
        </div>
    </section>
@endsection
