@extends('layouts.admin')

@section('title', 'Shiko Mesazhin')

@section('header', 'Shiko Mesazhin')

@section('header_buttons')
<a href="{{ route('admin.contacts.index') }}" class="btn btn-sm btn-secondary">
    <i class="fas fa-arrow-left me-1"></i> Kthehu
</a>
@endsection

@section('content')
<div class="card">
    <div class="card-header bg-light">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="mb-0">{{ $contact->subject }}</h5>
            <span class="badge {{ $contact->is_read ? 'bg-success' : 'bg-warning text-dark' }}">
                {{ $contact->is_read ? 'Lexuar' : 'Pa lexuar' }}
            </span>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-4">
            <div class="col-md-6">
                <p><strong>Nga:</strong> {{ $contact->name }} ({{ $contact->email }})</p>
            </div>
            <div class="col-md-6 text-md-end">
                <p><strong>Data:</strong> {{ $contact->created_at->format('d M Y H:i') }}</p>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                {{ $contact->message }}
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <div>
                @if(!$contact->is_read)
                <form action="{{ route('admin.contacts.mark-as-read', $contact->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-check me-1"></i> Shëno si të lexuar
                    </button>
                </form>
                @endif
            </div>

            <div>
                <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Jeni i sigurt që dëshironi të fshini këtë mesazh?')">
                        <i class="fas fa-trash-alt me-1"></i> Fshi
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
