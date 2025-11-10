@extends('admin.layout')

@section('title', 'Franmsgs')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0">Franchise Messages</h1>
    <a href="{{ route('admin.franmsgs.create') }}" class="btn btn-admin-primary">
        <i class="bi bi-plus"></i>
        Add New Franchise Message
    </a>
</div>

<div class="card card-admin">
    <div class="card-header bg-white d-flex justify-content-between align-items-center">
        <h5 class="card-title mb-0">Franchise Msgs ({{ $franmsgs->total() }})</h5>
        <div class="text-muted">
            Showing {{ $franmsgs->firstItem() }}-{{ $franmsgs->lastItem() }} of {{ $franmsgs->total() }}
        </div>
    </div>
    <div class="card-body p-0">
        @if($franmsgs->count() > 0)
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Email</th>
                    <th>Concept</th>
                    <th>Message</th>
                    <th>Created</th>
                    <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($franmsgs as $franmsg)
                    <tr>
                        <td>
                        <a href="{{ route('admin.singlefranmsg.index', $franmsg->id) }}" class="btn btn-outline-primary">
                        <i class="bi bi-eye"></i>
                        </a>
                        </td>
                        <td>
                        <a href="{{ route('admin.franmsgs.edit', $franmsg) }}" class="btn btn-outline-primary">
                        <i class="bi bi-pencil"></i>
                        </a>
                        </td>
                        <td>{{ $franmsg->email }}</td>
                        <td>{{ $franmsg->concept }}</td>
                        <td>{{ Str::limit($franmsg->message, 50) }}</td>
                        <td>{{ $franmsg->created_at->format('M j, Y') }}</td>
                        <td>
                            <div class="btn-group btn-group-sm">
 
                                <form method="POST" action="{{ route('admin.franmsgs.destroy', $franmsg) }}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger"
                                            onclick="return confirm('Are you sure?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

  <div class="card-footer bg-white">
    {{ $franmsgs->links('pagination::bootstrap-4') }}
</div>
        @else
        <div class="text-center py-5">
            <i class="bi bi-envelope fs-1 text-muted mb-3"></i>
            <h5 class="text-muted">No franmsgs found</h5>
        </div>
        @endif
    </div>
</div>
@endsection
