@extends('layouts.admin')

@section('title', 'Shto Shërbim')

@section('header', 'Shto Shërbim të Ri')

@section('header_buttons')
<a href="{{ route('admin.services.index') }}" class="btn btn-sm btn-secondary">
    <i class="fas fa-arrow-left me-1"></i> Kthehu
</a>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titulli</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Përshkrimi</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="8" required>{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="icon" class="form-label">Ikona (Font Awesome Class)</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-icons"></i></span>
                            <input type="text" class="form-control @error('icon') is-invalid @enderror" id="icon" name="icon" value="{{ old('icon', 'fa-water') }}" placeholder="fa-water">
                        </div>
                        <div class="form-text">
                            <a href="https://fontawesome.com/icons" target="_blank">Zgjidhni një ikonë nga Font Awesome</a>
                        </div>
                        @error('icon')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Imazhi</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                        <div class="form-text">Opsionale. Formatet e lejuara: JPEG, PNG, JPG, GIF. Max: 2MB.</div>
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-grid gap-2 mt-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i> Ruaj Shërbimin
                        </button>
                        <a href="{{ route('admin.services.index') }}" class="btn btn-outline-secondary">
                            Anulo
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
