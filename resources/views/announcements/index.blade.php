@extends('layouts.app')

@section('title', 'Njoftimet')

@section('content')
<section class="hero text-center position-relative overflow-hidden" style="height: 40vh;">

    <div class="position-absolute top-0 start-0 w-100 h-100 z-n1">
        <img src="{{ asset('images/background.png') }}" class="w-100 h-100" style="object-fit: cover;" alt="Uji Puka Background">
    </div>

    <!-- Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-50 z-0"></div>

    <!-- Content -->
    <div class="container position-relative z-1 text-white d-flex flex-column justify-content-center align-items-center h-100">
        <h1 class="display-4 fw-bold">Njoftime</h1>
        <p class="lead">Informacione të rëndësishme për komunitetin</p>
    </div>
</section>


    <!-- Announcements List -->
    <section class="py-5">
        <div class="container">
            @if($announcements->count() > 0)
                <div class="row g-4">
                    @foreach($announcements as $announcement)
                    <div class="col-md-6 mb-4">
                        <div class="card announcement-card h-100 shadow-sm border-0 overflow-hidden">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $announcement->title }}</h5>
                                <p class="text-muted small mb-3">
                                    <i class="far fa-calendar-alt me-1"></i> {{ $announcement->published_at->format('d M Y') }}
                                </p>
                                <p class="card-text">{{ Str::limit($announcement->content, 200) }}</p>
                                <a href="{{ route('announcements.show', $announcement->id) }}" class="btn btn-primary">Lexo më shumë</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="d-flex justify-content-center mt-5">
                    {{ $announcements->links() }}
                </div>
            @else
                <div class="alert alert-info text-center py-4">
                    <i class="fas fa-info-circle fa-2x mb-3"></i>
                    <p class="mb-0">Nuk ka njoftime për momentin.</p>
                </div>
            @endif
        </div>
    </section>
@endsection

