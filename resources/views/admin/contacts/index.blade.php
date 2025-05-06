@extends('layouts.admin')

@section('title', 'Menaxho Mesazhet')

@section('header', 'Menaxho Mesazhet')

@section('content')
<div class="card">
    <div class="card-body">
        @if($contacts->count() > 0)
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th width="50">#</th>
                        <th>Emri</th>
                        <th>Email</th>
                        <th>Subjekti</th>
                        <th>Statusi</th>
                        <th>Data</th>
                        <th width="150">Veprime</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                    <tr class="{{ $contact->is_read ? '' : 'table-light fw-bold' }}">
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ Str::limit($contact->subject, 50) }}</td>
                        <td>
                            @if($contact->is_read)
                                <span class="badge bg-success">Lexuar</span>
                            @else
                                <span class="badge bg-warning text-dark">Pa lexuar</span>
                            @endif
                        </td>
                        <td>{{ $contact->created_at->format('d M Y H:i') }}</td>
                        <td>
                            <a href="{{ route('admin.contacts.show', $contact->id) }}" class="btn btn-sm btn-info">
                                <i class="fas fa-eye"></i> Shiko
                            </a>
                            <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Jeni i sigurt që dëshironi të fshini këtë mesazh?')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-3">
            {{ $contacts->links() }}
        </div>
        @else
        <div class="alert alert-info mb-0">
            <p class="mb-0">Nuk ka mesazhe për momentin.</p>
        </div>
        @endif
    </div>
</div>
@endsection
