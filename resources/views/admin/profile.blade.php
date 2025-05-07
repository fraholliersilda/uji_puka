@extends('layouts.admin')

@section('title', 'Admin Profile')

@section('header', 'Admin Profile')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-info-circle me-2"></i>Të dhënat e përdoruesit
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Emri:</strong> {{ $user->name }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Email:</strong> {{ $user->email }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Krijuar më:</strong> {{ $user->created_at->format('d.m.Y H:i') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Update Email Form -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-envelope me-2"></i>Ndrysho Email-in
                    </h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.profile.update-email') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="email" class="form-label">Email i ri</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" name="email" value="{{ old('email', $user->email) }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="current_password" class="form-label">Fjalëkalimi aktual</label>
                            <input type="password" class="form-control @error('current_password') is-invalid @enderror"
                                id="current_password" name="current_password" required>
                            @error('current_password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-2"></i>Ruaj ndryshimet
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Update Password Form -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-lock me-2"></i>Ndrysho Fjalëkalimin
                    </h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.profile.update-password') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="current_password_for_pw" class="form-label">Fjalëkalimi aktual</label>
                            <input type="password" class="form-control @error('current_password') is-invalid @enderror"
                                id="current_password_for_pw" name="current_password" required>
                            @error('current_password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="new_password" class="form-label">Fjalëkalimi i ri</label>
                            <input type="password" class="form-control @error('new_password') is-invalid @enderror"
                                id="new_password" name="new_password" required>
                            @error('new_password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="new_password_confirmation" class="form-label">Konfirmo fjalëkalimin e ri</label>
                            <input type="password" class="form-control"
                                id="new_password_confirmation" name="new_password_confirmation" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-2"></i>Ruaj fjalëkalimin
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Password Security Tips -->
        <div class="col-md-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-info text-white">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-shield-alt me-2"></i>Këshilla për Sigurinë
                    </h5>
                </div>
                <div class="card-body">
                    <ul class="mb-0">
                        <li>Përdorni një fjalëkalim të fortë me të paktën 8 karaktere</li>
                        <li>Përfshini shkronja të mëdha dhe të vogla, numra dhe simbole</li>
                        <li>Mos përdorni të njëjtin fjalëkalim për faqe të ndryshme</li>
                        <li>Ndryshoni fjalëkalimin tuaj rregullisht</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
