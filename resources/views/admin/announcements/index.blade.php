@extends('layouts.admin')

@section('title', 'Menaxho Njoftimet')

@section('header', 'Menaxho Njoftimet')

@section('header_buttons')
<a href="{{ route('admin.announcements.create') }}" class="btn btn-sm btn-primary">
    <i class="fas fa-plus me-1"></i> Shto Njoftim
</a>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        @if($announcements->count() > 0)
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th width="50">#</th>
                        <th>Titulli</th>
                        <th>Përmbajtja</th>
                        <th>Imazhi</th>
                        <th>Data e publikimit</th>
                        <th width="180">Veprime</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($announcements as $announcement)
                    <tr>
                        <td>{{ $announcement->id }}</td>
                        <td>{{ $announcement->title }}</td>
                        <td>{{ Str::limit($announcement->content, 100) }}</td>
                        <td>
                            @if($announcement->image)
                                <img src="{{ asset('storage/' . $announcement->image) }}" alt="{{ $announcement->title }}" style="max-height: 40px;">
                            @else
                                <span class="text-muted">Pa imazh</span>
                            @endif
                        </td>
                        <td>{{ $announcement->published_at ? $announcement->published_at->format('d M Y') : 'Pa publikuar' }}</td>
                        <td>
                            <a href="{{ route('admin.announcements.edit', $announcement->id) }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i> Ndrysho
                            </a>
                            <form action="{{ route('admin.announcements.destroy', $announcement->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Jeni i sigurt që dëshironi të fshini këtë njoftim?')">
                                    <i class="fas fa-trash-alt"></i> Fshi
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-3">
            {{ $announcements->links() }}
        </div>
        @else
        <div class="alert alert-info mb-0">
            <p class="mb-0">Nuk ka njoftime për momentin. <a href="{{ route('admin.announcements.create') }}">Krijoni një njoftim të ri</a>.</p>
        </div>
        @endif
    </div>
</div>
@endsection
