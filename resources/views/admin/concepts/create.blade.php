
@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<!-- CREATE Concept -->

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0">Create Concept</h1>
    <a href="{{ route('adminAllConcepts') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Back
    </a>
</div>

<div class="card card-admin">
    <div class="card-body">
        <form action="{{ route('concepts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="form-label">Title (EN)</label>
                <input type="text" name="title_en" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Title (AR)</label>
                <input type="text" name="title_ar" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Description (EN)</label>
                <textarea name="desc_en" class="form-control" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Description (AR)</label>
                <textarea name="desc_ar" class="form-control" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" required>
                <div class="form-text">Unique identifier for URLs.</div>
            </div>

            <div class="mb-3">
                <label class="form-label">Logo</label>
                <input type="file" name="logo" class="form-control" accept="image/*">
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Sorting</label>
                    <input type="number" name="sorting" class="form-control" value="0">
                </div>
                <div class="col-md-4 mb-3 form-check">
                    <input type="checkbox" name="featured" class="form-check-input" value="1" id="featured">
                    <label class="form-check-label" for="featured">Featured</label>
                </div>
                <div class="col-md-4 mb-3 form-check">
                    <input type="checkbox" name="latest" class="form-check-input" value="1" id="latest">
                    <label class="form-check-label" for="latest">Latest</label>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-admin-primary">
                    <i class="bi bi-check-circle"></i> Save Concept
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
