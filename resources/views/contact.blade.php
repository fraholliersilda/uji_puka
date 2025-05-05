@extends('layouts.app')
@section('title', 'Kontakt')
@section('content')
    <!-- Contact Hero -->
    <section class="hero text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Na Kontaktoni</h1>
            <p class="lead">Jemi këtu për t'ju ndihmuar</p>
        </div>
    </section>
    <!-- Contact Form -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="mb-4">Dërgoni një mesazh</h3>

                    @if(session('success'))
                        <div class="alert alert-success mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Emri juaj</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Emaili juaj</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label">Subjekti</label>
                            <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" value="{{ old('subject') }}" required>
                            @error('subject')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Mesazhi juaj</label>
                            <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Dërgo Mesazhin</button>
                    </form>
                </div>

                <div class="col-lg-6">
                    <h3 class="mb-4">Informacione Kontakti</h3>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Adresa jonë</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt me-2 text-primary"></i> Fushë-Arrëz, Pukë, Shqipëri
                            </p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Na telefononi</h5>
                            <p class="card-text">
                                <i class="fas fa-phone me-2 text-primary"></i> +355 68 203 7517
                            </p>
                        </div>
                    </div>

                    {{-- <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Email</h5>
                            <p class="card-text">
                                <i class="fas fa-envelope me-2 text-primary"></i> info@ujipuka.com
                            </p>
                        </div>
                    </div> --}}

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Orari i punës</h5>
                            <p class="card-text mb-2">
                                <i class="fas fa-clock me-2 text-primary"></i> E Hënë - E Premte: 08:00 - 17:00
                            </p>
                            {{-- <p class="card-text">
                                <i class="fas fa-clock me-2 text-primary"></i> E Shtunë: 08:00 - 12:00
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <h3 class="mb-4">Na gjeni në hartë</h3>
                    <div class="map-container">
                        <!-- Zëvendëso me Google Maps iframe ose një fotografi të vendndodhjes -->
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23562.25764575489!2d19.891327371947706!3d42.04454112336723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1352c118e5881107%3A0x48095c7d67e20671!2sPuk%C3%AB%2C%20Albania!5e0!3m2!1sen!2s!4v1651234567890!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
