@extends('admin.layout')

@section('title', 'All Concepts')

@section('content')
<!-- All Concepts -->
<div class="row">
    <div class="col-md-12">
        <div class="card card-admin">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">All Concepts</h5>
                <a href="{{ route('admin.concepts.create') }}" class="btn btn-sm btn-admin-primary">
                    <i class="bi bi-plus-circle"></i> Add Concept
                </a>
            </div>
            <div class="card-body">
                @if($concepts->count() > 0)
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Edit</th>
                                <th>Title EN</th>
                                <th>Title AR</th>
                                <th>Desc EN</th>
                                <th>Desc AR</th>
                                <th>Logo</th>
                                <th>Sorting</th>
                                <th>Featured</th>
                                <th>Latest</th>
                                <th>Slug</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($concepts as $concept)
                            <tr>
                                                                <td>
                                    <a href="{{ route('admin.concepts.edit', $concept) }}" 
                                       class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                </td>
                                <td>{{ $concept->title_en }}</td>
                                <td>{{ $concept->title_ar }}</td>
                                <td>{{ Str::limit(strip_tags($concept->desc_en), 50) }}</td>
                                <td>{{ Str::limit(strip_tags($concept->desc_ar), 50) }}</td>
                                <td>
                                    @if($concept->logo)
                                        <img src="{{ asset('assets/img/logos/'.$concept->logo) }}" 
                                             alt="Logo" style="width: 40px; height:auto;">
                                    @else
                                        <span class="text-muted">No Logo</span>
                                    @endif
                                </td>
                                <td>{{ $concept->sorting }}</td>
                                <td>
                                    <span class="badge {{ $concept->featured ? 'bg-success' : 'bg-secondary' }}">
                                        {{ $concept->featured ? 'Yes' : 'No' }}
                                    </span>
                                </td>
                                <td>
                                    <span class="badge {{ $concept->latest ? 'bg-info' : 'bg-secondary' }}">
                                        {{ $concept->latest ? 'Yes' : 'No' }}
                                    </span>
                                </td>
                                <td>{{ $concept->slug }}</td>
                                <td>{{ $concept->created_at->format('M j, Y') }}</td>
                                <td>{{ $concept->updated_at->format('M j, Y') }}</td>
                                <td>
                                    <form action="{{ route('concepts.destroy', $concept) }}" 
                                          method="POST" class="d-inline"
                                          onsubmit="return confirm('Are you sure you want to delete this concept?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <div class="text-center py-4 text-muted">
                    <i class="bi bi-shop fs-1 mb-2"></i>
                    <p>No concepts found</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>


@endsection