<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Panel') - SocialEats</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom Admin CSS -->
    <style>
        :root {
            --admin-primary: #E87B26;
            --admin-secondary: #676730;
            --admin-dark: #1a1a1a;
            --admin-light: #f8f9fa;
        }
        
        .sidebar {
            background: var(--admin-dark);
            min-height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            z-index: 1000;
        }
        
        .main-content {
            margin-left: 250px;
            min-height: 100vh;
            background: var(--admin-light);
        }
        
        .navbar-admin {
            background: white !important;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .sidebar .nav-link {
            color: #adb5bd;
            padding: 12px 20px;
            border-radius: 0;
            transition: all 0.3s;
        }
        
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background: var(--admin-primary);
            color: white;
        }
        
        .sidebar .nav-link i {
            width: 20px;
            margin-right: 10px;
        }
        
        .card-admin {
            border: none;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
        }
        
        .btn-admin-primary {
            background: var(--admin-primary);
            border-color: var(--admin-primary);
            color: white;
        }
        
        .btn-admin-primary:hover {
            background: #d66a1a;
            border-color: #d66a1a;
            color: white;
        }
        
        .btn-admin-secondary {
            background: var(--admin-secondary);
            border-color: var(--admin-secondary);
            color: white;
        }
        
        .btn-admin-secondary:hover {
            background: #5a5d2a;
            border-color: #5a5d2a;
            color: white;
        }
        
        .stats-card {
            background: linear-gradient(135deg, var(--admin-primary), #f0861a);
            color: white;
        }
        
        .stats-card-2 {
            background: linear-gradient(135deg, var(--admin-secondary), #7a7d3a);
            color: white;
        }
        
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s;
            }
            
            .sidebar.show {
                transform: translateX(0);
            }
            
            .main-content {
                margin-left: 0;
            }
        }

        
    </style>
    
    @stack('styles')
</head>
<body>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Panel') - SocialEats</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    
  <!-- Bootstrap JS Bundle (needed for dropdown + burger menu) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>




    <!-- Custom Admin CSS -->
    <style>
        :root {
            --admin-primary: #E87B26;
            --admin-secondary: #676730;
            --admin-dark: #1a1a1a;
            --admin-light: #f8f9fa;
        }

        .sidebar {
            background: var(--admin-dark);
            min-height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            z-index: 1000;
        }

        .main-content {
            margin-left: 250px;
            min-height: 100vh;
            background: var(--admin-light);
        }

        .navbar-admin {
            background: white !important;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .sidebar .nav-link {
            color: #adb5bd;
            padding: 12px 20px;
            border-radius: 0;
            transition: all 0.3s;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background: var(--admin-primary);
            color: white !important;
        }

        .sidebar .nav-link i {
            width: 20px;
            margin-right: 10px;
        }

        .card-admin {
            border: none;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
        }

        .btn-admin-primary {
            background: var(--admin-primary);
            border-color: var(--admin-primary);
            color: white;
        }

        .btn-admin-primary:hover {
            background: #d66a1a;
            border-color: #d66a1a;
            color: white;
        }

        .btn-admin-secondary {
            background: var(--admin-secondary);
            border-color: var(--admin-secondary);
            color: white;
        }

        .btn-admin-secondary:hover {
            background: #5a5d2a;
            border-color: #5a5d2a;
            color: white;
        }

        .stats-card {
            background: linear-gradient(135deg, var(--admin-primary), #f0861a);
            color: white;
        }

        .stats-card-2 {
            background: linear-gradient(135deg, var(--admin-secondary), #7a7d3a);
            color: white;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s;
            }
            .sidebar.show {
                transform: translateX(0);
            }
            .main-content {
                margin-left: 0;
            }
        }
    </style>

    @stack('styles')
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="p-3">
            <h4 class="text-white mb-4">
                <i class="bi bi-speedometer2"></i>
                Admin Panel
            </h4>
        </div>

        <nav class="nav flex-column">
               @if(Auth::user()->hasRole('Admin','Operations Manager'))
            <!-- Dashboard -->
            <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" 
               href="{{ route('admin.dashboard') }}">
                <i class="bi bi-house"></i>
                Dashboard
            </a>
            @endif

            <!-- Users -->
            @if(Auth::user()->hasRole('Admin','Operations Manager'))
            <a class="nav-link {{ str_starts_with(request()->path(), 'admin/users') ? 'active' : '' }}" 
               href="{{ route('admin.users.index') }}">
                <i class="bi bi-people"></i>
                Users
            </a>
            @endif

            <!-- Roles -->
            @if(Auth::user()->hasRole('Admin','Operations Manager'))
            <a class="nav-link {{ str_starts_with(request()->path(), 'admin/roles') ? 'active' : '' }}" 
               href="{{ route('adminAllRoles') }}">
                <i class="bi bi-star"></i>
                Roles
            </a>
            @endif

            <!-- Content Management -->
            @if(Auth::user()->hasRole('Admin','Marketing Manager', 'Content Creator'))
            <div class="nav-item">
                <a class="nav-link dropdown-toggle {{ request()->routeIs('admin.content.*') || request()->routeIs('adminAllConcepts') ? 'active' : '' }}" 
                   href="#" role="button" data-bs-toggle="collapse" data-bs-target="#contentSubmenu" 
                   aria-expanded="{{ request()->routeIs('admin.content.*') || request()->routeIs('adminAllConcepts') ? 'true' : 'false' }}">
                    <i class="bi bi-file-text"></i>
                    Content Management
                </a>
                <div class="collapse {{ request()->routeIs('admin.content.*') || request()->routeIs('adminAllConcepts') ? 'show' : '' }}" 
                     id="contentSubmenu">
                    <div class="nav flex-column ms-3">
                        <a class="nav-link small {{ request()->routeIs('admin.content.*') ? 'active' : '' }}" 
                           href="{{ route('admin.content.index') }}">
                            <i class="bi bi-house-door"></i>
                            Homepage
                        </a>
                        <a class="nav-link small {{ request()->routeIs('adminAllConcepts') ? 'active' : '' }}" 
                           href="{{ route('adminAllConcepts') }}">
                            <i class="bi bi-file-code"></i>
                            Concepts
                        </a>
                    </div>
                </div>
            </div>
            @endif

            <!-- Messages Management -->
            @if(Auth::user()->hasRole('Admin','HR Manager', 'HR Specialist','Franchising Manager','Franchising Specialist'))
            <div class="nav-item">
            <a class="nav-link dropdown-toggle {{ request()->routeIs('admin.messages.*') || request()->routeIs('admin.franmsgs.*') ? 'active' : '' }}" 
            href="#" role="button" data-bs-toggle="collapse" data-bs-target="#messagesSubmenu" 
            aria-expanded="{{ request()->routeIs('admin.messages.*') || request()->routeIs('admin.franmsgs.*') ? 'true' : 'false' }}">
            <i class="bi bi-envelope"></i>
            Messages
            </a>
            <div class="collapse {{ request()->routeIs('admin.messages.*') || request()->routeIs('admin.franmsgs.*') ? 'show' : '' }}" 
            id="messagesSubmenu">
            <div class="nav flex-column ms-3">
			
            @if(Auth::user()->hasRole('Admin','HR Manager', 'HR Specialist'))
            <a class="nav-link small {{ request()->routeIs('admin.messages.*') ? 'active' : '' }}" 
            href="{{ route('admin.messages.index') }}">
            <i class="bi bi-chat-left-text"></i>
            Contact Messages
            </a>
            @endif      
			
            @if(Auth::user()->hasRole('Admin','Franchising Manager','Franchising Specialist'))
            <a class="nav-link small {{ request()->routeIs('admin.franmsgs.*') ? 'active' : '' }}" 
            href="{{ route('admin.franmsgs.index') }}">
            <i class="bi bi-building"></i>
            Franchise Requests
            </a>
			@endif

            </div>
            </div>
            </div>
            @endif

            <!-- View Site -->
            <a target="_blank" class="nav-link" href="{{ route('welcomePage') }}">
                <i class="bi bi-globe"></i>
                View Site
            </a>

            <hr class="text-secondary mx-3">

            <!-- Logout -->
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="nav-link border-0 bg-transparent w-100 text-start">
                    <i class="bi bi-box-arrow-right"></i>
                    Logout
                </button>
            </form>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light navbar-admin px-4">
            <button class="navbar-toggler d-lg-none" type="button" id="sidebarToggle">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="ms-auto">
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" 
                            data-bs-toggle="dropdown">
                        <i class="bi bi-person-circle"></i>
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><span class="dropdown-header">Roles:</span></li>
                        @foreach(Auth::user()->roles as $role)
                        <li><span class="dropdown-item-text text-muted">• {{ $role->name }}</span></li>
                        @endforeach
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="bi bi-box-arrow-right"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container-fluid p-4">
            <!-- Alerts -->
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-triangle"></i>
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif

            @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-triangle"></i>
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif

            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Admin Scripts -->
    <script>
        // Mobile sidebar toggle
        document.getElementById('sidebarToggle')?.addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('show');
        });

        // Auto-hide alerts after 5 seconds
        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 5000);
    </script>

    @stack('scripts')
</body>
</html>

    

    
    <!-- Admin Scripts -->
    <script>
        // Mobile sidebar toggle
        document.getElementById('sidebarToggle')?.addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('show');
        });
        
        // Auto-hide alerts after 5 seconds
        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 5000);
    </script>
    
    @stack('scripts')
</body>
</html>