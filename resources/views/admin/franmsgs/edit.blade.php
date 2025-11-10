@extends('admin.layout')

@section('title', 'Edit Franmsg')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0">Edit Franmsg</h1>
    <a href="{{ route('admin.franmsgs.index') }}" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left"></i> Back
    </a>
</div>

<div class="card card-admin">
    <div class="card-body">
        <form method="POST" action="{{ route('admin.franmsgs.update', $franmsg) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required value="{{ old('email', $franmsg->email) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Concept</label>
                <input type="text" name="concept" class="form-control" required value="{{ old('concept', $franmsg->concept) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Message</label>
                <textarea name="message" rows="5" class="form-control" required>{{ old('message', $franmsg->message) }}</textarea>
            </div>

            <button type="submit" class="btn btn-admin-primary">Update</button>
        </form>
    </div>
</div>
@endsection
