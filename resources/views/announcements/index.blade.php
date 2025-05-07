@extends('layouts.app')

@section('title', 'Njoftimet')

@section('content')
    <!-- Announcements Hero Section -->
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

<style>
/* Custom styles for the announcement cards */
.announcement-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.announcement-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
}

/* Pagination styling */
.pagination {
    gap: 5px;
}

.page-item.active .page-link {
    background-color: #0d6efd;
    border-color: #0d6efd;
}

.page-link {
    color: #0d6efd;
    border-radius: 4px;
}

/* Hero section enhancement */
.hero {
    background-color: #f8f9fa;
    padding-top: 80px;
    padding-bottom: 80px;
    border-bottom: 1px solid rgba(0,0,0,0.05);
}
</style>
