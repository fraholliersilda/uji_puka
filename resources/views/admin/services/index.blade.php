@extends('layouts.admin')

@section('title', 'Menaxho Shërbimet')

@section('header', 'Menaxho Shërbimet')

@section('header_buttons')
<a href="{{ route('admin.services.create') }}" class="btn btn-primary">
    <i class="fas fa-plus me-1"></i> Shto Shërbim
</a>
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
        @if($services->count() > 0)
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th width="50">#</th>
                        <th>Titulli</th>
                        <th>Përshkrimi</th>
                        <th>Ikona</th>
                        <th width="230">Veprime</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                    <tr>
                        <td>{{ $service->id }}</td>
                        <td>{{ $service->title }}</td>
                        <td>{{ Str::limit($service->description, 100) }}</td>
                        <td><i class="fas {{ $service->icon }}"></i> {{ $service->icon }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('admin.services.show', $service->id) }}" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i> Shiko
                                </a>
                                <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i> Ndrysho
                                </a>
                                <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Jeni i sigurt që dëshironi të fshini këtë shërbim?')">
                                        <i class="fas fa-trash-alt"></i> Fshi
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="alert alert-info mb-0">
            <p class="mb-0">Nuk ka shërbime për momentin. <a href="{{ route('admin.services.create') }}">Krijoni një shërbim të ri</a>.</p>
        </div>
        @endif
    </div>
</div>
@endsection
