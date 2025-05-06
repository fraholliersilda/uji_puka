@extends('layouts.admin')

@section('title', 'Shiko Njoftimin')

@section('header', 'Shiko Njoftimin')

@section('header_buttons')
<a href="{{ route('admin.announcements.index') }}" class="btn btn-secondary">
    <i class="fas fa-arrow-left"></i> Kthehu
</a>
@endsection

@section('content')

<div class="container-fluid">

    <div class="card">

        <div class="card-header bg-white">
            <h5 class="mb-0 d-flex justify-content-between align-items-center">
                <span>{{ $announcement->title }}</span>
                <span class="badge {{ $announcement->published_at ? 'badge-success' : 'badge-warning' }}">
                    {{ $announcement->published_at ? 'Publikuar' : 'Pa publikuar' }}
                </span>
            </h5>
        </div>

    </div>

    <div class="row mt-4">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">
                    <h6 class="m-0 font-weight-bold">Përmbajtja</h6>
                </div>

                <div class="card-body">
                    {!! nl2br(e($announcement->content)) !!}
                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card">

                <div class="card-header">
                    <h6 class="m-0 font-weight-bold">Detaje</h6>
                </div>

                <div class="card-body">
                    <p>
                        <strong>Data e krijimit:</strong> {{ $announcement->created_at->format('d M Y H:i') }}
                    </p>
                    <p>
                        <strong>Data e publikimit:</strong>
                        {{ $announcement->published_at ? $announcement->published_at->format('d M Y') : 'Pa publikuar ende' }}
                    </p>
                </div>

            </div>

            @if($announcement->image)
            <div class="card mt-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold">Imazhi</h6>
                </div>
                <div class="card-body text-center">
                    <img src="{{ asset('storage/' . $announcement->image) }}" alt="{{ $announcement->title }}"
                         class="img-fluid rounded" style="max-height: 300px;">
                </div>
            </div>
            @endif

            <div class="card mt-4 mb-2">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.announcements.edit', $announcement->id) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i> Ndrysho
                        </a>

                        <form action="{{ route('admin.announcements.destroy', $announcement->id) }}" method="POST"
                              onsubmit="return confirm('A jeni i sigurt që dëshironi të fshini këtë njoftim?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash"></i> Fshi
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

@endsection
