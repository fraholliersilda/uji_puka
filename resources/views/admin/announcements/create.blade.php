@extends('layouts.admin')

@section('title', 'Shto Njoftim')

@section('header', 'Shto Njoftim të Ri')

@section('header_buttons')
<a href="{{ route('admin.announcements.index') }}" class="btn btn-outline-secondary">
    <i class="fas fa-arrow-left"></i> Kthehu
</a>
@endsection

@section('content')

<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.announcements.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group mb-3">
                        <label for="title">Titulli</label>
                        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="content">Përmbajtja</label>
                        <textarea name="content" id="content" rows="10" class="form-control @error('content') is-invalid @enderror" required>{{ old('content') }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="published_at">Data e publikimit</label>
                        <input type="date" name="published_at" id="published_at" class="form-control @error('published_at') is-invalid @enderror" value="{{ old('published_at', date('Y-m-d')) }}">
                        <small class="form-text text-muted">Lëreni bosh për të mos publikuar ende</small>
                        @error('published_at')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3 d-grid gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Ruaj Njoftimin
                        </button>
                        <a href="{{ route('admin.announcements.index') }}" class="btn btn-outline-secondary">
                            Anulo
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
