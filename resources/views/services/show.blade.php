@extends('layouts.app')

@section('title', $service->title)

@section('content')
    <div class="container py-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Kryefaqja</a></li>
                <li class="breadcrumb-item"><a href="{{ route('services.index') }}">Shërbimet</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $service->title }}</li>
            </ol>
        </nav>

        <div class="row mt-4">
            <div class="col-lg-8">
                <h1 class="mb-4">{{ $service->title }}</h1>

                @if($service->image)
                <img src="{{ asset('storage/' . $service->image) }}" class="img-fluid rounded mb-4" alt="{{ $service->title }}">
                @endif

                <div class="service-content">
                    <p>{{ $service->description }}</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Shërbime të tjera</h5>
                    </div>
                    <div class="list-group list-group-flush">
                        @foreach(\App\Models\Service::where('id', '!=', $service->id)->take(5)->get() as $otherService)
                        <a href="{{ route('services.show', $otherService->id) }}" class="list-group-item list-group-item-action">
                            <i class="fas {{ $otherService->icon }} me-2 text-primary"></i> {{ $otherService->title }}
                        </a>
                        @endforeach
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Na Kontaktoni</h5>
                    </div>
                    <div class="card-body">
                        <p>Keni nevojë për më shumë informacion rreth këtij shërbimi?</p>
                        <a href="{{ route('contact.index') }}" class="btn btn-primary w-100">Na kontaktoni</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
