@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0">Dashboard</h1>
    <div class="text-muted">
        Welcome back, {{ Auth::user()->name }}!
    </div>
</div>

<!-- Stats Cards -->
<div class="row mb-4">
    @if(Auth::user()->hasRole('Admin','Operations Manager'))
    <div class="col-md-3 mb-3">
        <div class="card card-admin stats-card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h5 class="card-title mb-0">Total Users</h5>
                        <h2 class="mb-0">{{ $stats['total_users'] ?? 0 }}</h2>
                    </div>
                    <div class="ms-3">
                        <i class="bi bi-people fs-1 opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 mb-3">
        <div class="card card-admin stats-card-2">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h5 class="card-title mb-0">Admin Users</h5>
                        <h2 class="mb-0">{{ $stats['admin_users'] ?? 0 }}</h2>
                    </div>
                    <div class="ms-3">
                        <i class="bi bi-shield-check fs-1 opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    
    <div class="col-md-3 mb-3">
        <div class="card card-admin" style="background: linear-gradient(135deg, #198754, #20c997); color: white;">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h5 class="card-title mb-0">Total Concepts</h5>
                        <h2 class="mb-0">{{ $stats['total_concepts'] ?? 0 }}</h2>
                    </div>
                    <div class="ms-3">
                        <i class="bi bi-shop fs-1 opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 mb-3">
        <div class="card card-admin" style="background: linear-gradient(135deg, #6f42c1, #8b5cf6); color: white;">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h5 class="card-title mb-0">Your Roles</h5>
                        <h2 class="mb-0">{{ Auth::user()->roles->count() }}</h2>
                    </div>
                    <div class="ms-3">
                        <i class="bi bi-person-badge fs-1 opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="row mb-4">
    <div class="col-md-12">
        <div class="card card-admin">
            <div class="card-header bg-white">
                <h5 class="card-title mb-0">Quick Actions</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    @if(Auth::user()->hasRole('Admin','Operations Manager'))
                    <div class="col-md-4 mb-3">
                        <a href="{{ route('admin.users.create') }}" class="btn btn-admin-primary w-100">
                            <i class="bi bi-person-plus"></i>
                            Add New User
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="{{ route('admin.users.index') }}" class="btn btn-outline-primary w-100">
                            <i class="bi bi-people"></i>
                            Manage Users
                        </a>
                    </div>
                    @endif
                    
                    @if(Auth::user()->hasRole('Admin','Content Editor'))
                    <div class="col-md-4 mb-3">
                        <a href="{{ route('admin.content.index') }}" class="btn btn-admin-secondary w-100">
                            <i class="bi bi-file-text"></i>
                            Edit Content
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recent Activity -->
@if(Auth::user()->hasRole('Admin','Operations Manager') && isset($stats['recent_users']))
<div class="row">
    <div class="col-md-12">
        <div class="card card-admin">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Recent Users</h5>
                <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-outline-primary">
                    View All
                </a>
            </div>
            <div class="card-body">
                @if($stats['recent_users']->count() > 0)
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Joined</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($stats['recent_users'] as $user)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center text-white me-2" style="width: 32px; height: 32px;">
                                            {{ substr($user->name, 0, 1) }}
                                        </div>
                                        {{ $user->name }}
                                    </div>
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @forelse($user->roles as $role)
                                        <span class="badge bg-secondary me-1">{{ $role->name }}</span>
                                    @empty
                                        <span class="text-muted">No roles</span>
                                    @endforelse
                                </td>
                                <td>{{ $user->created_at->format('M j, Y') }}</td>
                                <td>
                                    <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <div class="text-center py-4 text-muted">
                    <i class="bi bi-people fs-1 mb-2"></i>
                    <p>No users found</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endif

@endsection