@extends('layouts.app')

@section('title', 'Shërbimet')

@section('content')
<section class="hero text-center position-relative overflow-hidden" style="height: 40vh;">

    <div class="position-absolute top-0 start-0 w-100 h-100 z-n1">
        <img src="{{ asset('images/background.png') }}" class="w-100 h-100" style="object-fit: cover;" alt="Uji Puka Background">
    </div>

    <!-- Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-50 z-0"></div>

    <!-- Content -->
    <div class="container position-relative z-1 text-white d-flex flex-column justify-content-center align-items-center h-100">
        <h1 class="display-4 fw-bold">Shërbimet Tona</h1>
        <p class="lead">Zbuloni të gjitha shërbimet që ofrojmë për komunitetin</p>
    </div>
</section>

    <!-- Services List -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                <div class="col-md-4 mb-4">
                    <div class="card service-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="service-icon">
                                <i class="fas {{ $service->icon }}"></i>
                            </div>
                            <h5 class="card-title">{{ $service->title }}</h5>
                            <p class="card-text">{{ Str::limit($service->description, 150) }}</p>
                            <a href="{{ route('services.show', $service->id) }}" class="btn btn-outline-primary">Shiko detajet</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
