@extends('admin.layout')

@section('title', 'View Franchise Request')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0">Franchise Request Details</h1>
    <a href="{{ route('admin.franmsgs.index') }}" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left"></i> Back
    </a>
</div>

<div class="card card-admin">
    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-3">Email</dt>
            <dd class="col-sm-9">{{ $franmsg->email }}</dd>

            <dt class="col-sm-3">Concept</dt>
            <dd class="col-sm-9">{{ $franmsg->concept }}</dd>

            <dt class="col-sm-3">Message</dt>
            <dd class="col-sm-9">{{ $franmsg->message }}</dd>

            <dt class="col-sm-3">Created At</dt>
            <dd class="col-sm-9">
                {{ \Carbon\Carbon::parse($franmsg->created_at)->format('F j, Y g:i A') }}
                <small class="text-muted">({{ \Carbon\Carbon::parse($franmsg->created_at)->diffForHumans() }})</small>
            </dd>
        </dl>
    </div>
    <div class="card-footer text-end">
<a href="{{ route('admin.franmsgs.edit', $franmsg) }}" class="btn btn-admin-primary">
    <i class="bi bi-pencil"></i> Edit
</a>
        <form method="POST" action="{{ route('admin.franmsgs.destroy', $franmsg) }}" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger" 
                    onclick="return confirm('Are you sure you want to delete this request?')">
                <i class="bi bi-trash"></i> Delete
            </button>
        </form>
    </div>
</div>
@endsection
