@extends('layouts.admin')

@section('title', 'Menaxho Njoftimet')

@section('header', 'Menaxho Njoftimet')

@section('header_buttons')
<a href="{{ route('admin.announcements.create') }}" class="btn btn-primary">
    <i class="fas fa-plus"></i> Shto Njoftim
</a>
@endsection

@section('content')

<div class="container-fluid">

    <div class="card shadow mb-4">

        @if($announcements->count() > 0)
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titulli</th>
                            <th>Përmbajtja</th>
                            <th>Data e publikimit</th>
                            <th>Veprime</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($announcements as $announcement)
                        <tr>
                            <td>{{ $announcement->id }}</td>
                            <td>{{ $announcement->title }}</td>
                            <td>{{ Str::limit($announcement->content, 100) }}</td>
                            <td>{{ $announcement->published_at ? $announcement->published_at->format('d M Y') : 'Pa publikuar' }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('admin.announcements.show', $announcement->id) }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-eye"></i> Shiko
                                    </a>
                                    <a href="{{ route('admin.announcements.edit', $announcement->id) }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-edit"></i> Ndrysho
                                    </a>
                                    <form action="{{ route('admin.announcements.destroy', $announcement->id) }}" method="POST"
                                          onsubmit="return confirm('A jeni i sigurt që dëshironi të fshini këtë njoftim?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i> Fshi
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

        <div class="card-footer">
            {{ $announcements->links() }}
        </div>

        @else
        <div class="card-body">
            <div class="alert alert-info">
                Nuk ka njoftime për momentin. Krijoni një njoftim të ri.
            </div>
        </div>
        @endif
    </div>

</div>

@endsection
