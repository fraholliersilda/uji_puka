@extends('layouts.admin')

@section('title', 'Shiko Shërbimin')

@section('header', 'Shiko Shërbimin')

@section('header_buttons')
<div class="d-flex gap-2">
    <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left me-1"></i> Kthehu
    </a>
    <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-primary">
        <i class="fas fa-edit me-1"></i> Ndrysho
    </a>
</div>
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">{{ $service->title }}</h6>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-4">
                    <h5><i class="fas fa-info-circle me-2"></i>Detajet e Shërbimit</h5>
                    <hr>

                    <div class="mb-3">
                        <strong>ID:</strong> {{ $service->id }}
                    </div>

                    <div class="mb-3">
                        <strong>Titulli:</strong> {{ $service->title }}
                    </div>

                    <div class="mb-3">
                        <strong>Ikona:</strong>
                        <i class="fas {{ $service->icon }} me-1"></i> {{ $service->icon }}
                    </div>

                    <div class="mb-3">
                        <strong>Krijuar më:</strong> {{ $service->created_at->format('d M Y H:i') }}
                    </div>

                    <div class="mb-3">
                        <strong>Përditësuar më:</strong> {{ $service->updated_at->format('d M Y H:i') }}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="mb-4">
                    <h5><i class="fas fa-align-left me-2"></i>Përshkrimi</h5>
                    <hr>
                    <div class="bg-light p-3 rounded">
                        {!! nl2br(e($service->description)) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 d-flex gap-2">
            <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-primary">
                <i class="fas fa-edit me-1"></i> Ndrysho
            </a>
            <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Jeni i sigurt që dëshironi të fshini këtë shërbim?')">
                    <i class="fas fa-trash-alt me-1"></i> Fshi
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
