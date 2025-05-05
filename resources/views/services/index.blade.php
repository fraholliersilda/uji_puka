@extends('layouts.app')

@section('title', 'Shërbimet')

@section('content')
    <!-- Services Hero -->
    <section class="hero text-center">
        <div class="container">
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
