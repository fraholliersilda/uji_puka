@extends('layouts.app')

@section('title', 'Kryefaqja')

@section('content')
    <!-- Hero Section -->
 <!-- Hero Section -->
<section class="hero2 text-center position-relative overflow-hidden" style="height: 100vh;">
    <!-- YouTube Video Background -->
    <div id="video-background" class="position-absolute top-0 start-0 w-100 h-100 z-n1">
        <iframe
            src="https://www.youtube.com/embed/F67CPUVXKXA?autoplay=1&mute=1&controls=0&loop=1&playlist=F67CPUVXKXA&modestbranding=1&rel=0&showinfo=0"
            frameborder="0"
            allow="autoplay; fullscreen"
            allowfullscreen
            class="w-100 h-100"
            style="pointer-events: none; object-fit: cover;">
        </iframe>
    </div>

    <!-- Dark overlay to improve text readability -->
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50 z-0" ></div>

    <!-- Content -->
    <div class="container position-relative z-1 text-white d-flex flex-column justify-content-center align-items-center h-100">
        <h1 class="display-4 fw-bold">Me dashurinë e ëmbël të nënës natyrë!</h1>
        <p class="lead">Ujë i pastër dhe cilësor për gjithë komunitetin</p>
        <div class="mt-4">
            <a href="{{ route('about') }}" class="btn btn-light btn-lg me-2">Mëso më shumë</a>
            <a href="{{ route('contact.index') }}" class="btn btn-outline-light btn-lg">Na kontaktoni</a>
        </div>
    </div>
</section>


    <!-- Services Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Shërbimet Tona</h2>
                <p class="text-muted">Zbuloni shërbimet që ofrojmë për komunitetin</p>
            </div>

            <div class="row">
                @foreach($services as $service)
                <div class="col-md-4 mb-4">
                    <div class="card service-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="service-icon">
                                <i class="fas {{ $service->icon }}"></i>
                            </div>
                            <h5 class="card-title">{{ $service->title }}</h5>
                            <p class="card-text">{{ Str::limit($service->description, 100) }}</p>
                            <a href="{{ route('services.show', $service->id) }}" class="btn btn-outline-primary">Lexo më shumë</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('services.index') }}" class="btn btn-primary">Të gjitha shërbimet</a>
            </div>
        </div>
    </section>

    <!-- Announcements Section -->
<!-- Announcements Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Njoftimet e Fundit</h2>
            <p class="text-muted">Informacione të rëndësishme për komunitetin</p>
        </div>

        <div class="row">
            @foreach($announcements as $announcement)
            <div class="col-md-4 mb-4">
                <div class="card announcement-card h-100 shadow-sm border-0">
                    @if($announcement->image)
                    <div class="ratio ratio-16x9">
                        <img src="{{ asset('storage/' . $announcement->image) }}"
                             class="card-img-top rounded-top object-fit-cover"
                             alt="{{ $announcement->title }}"
                             style="object-fit: cover;">
                    </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $announcement->title }}</h5>
                        <p class="card-text text-muted">{{ Str::limit($announcement->content, 100) }}</p>
                        <a href="{{ route('announcements.show', $announcement->id) }}" class="btn btn-sm btn-outline-primary">Lexo më shumë</a>
                    </div>
                    <div class="card-footer bg-white border-top-0 text-muted">
                        <small>Publikuar më: {{ $announcement->published_at->format('d M Y') }}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('announcements.index') }}" class="btn btn-primary">Të gjitha njoftimet</a>
        </div>
    </div>
</section>


    <!-- Contact CTA Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h3>Keni pyetje apo sugjerime?</h3>
                    <p class="lead">Jemi këtu për t'ju ndihmuar. Na kontaktoni për çdo nevojë.</p>
                </div>
                <div class="col-md-4 text-md-end">
                    <a href="{{ route('contact.index') }}" class="btn btn-primary btn-lg">Na kontaktoni</a>
                </div>
            </div>
        </div>
    </section>
@endsection
