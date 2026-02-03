<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UIC Student Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --uic-pink: #d81b60; /* Deep UIC Pink */
            --uic-light-pink: #fce4ec;
            --uic-gradient: linear-gradient(135deg, #d81b60 0%, #ad1457 100%);
        }
        body { 
            background-color: #fff5f8; 
            font-family: 'Inter', sans-serif; 
            padding-top: 80px; 
        }
        .navbar { 
            background: var(--uic-gradient) !important; 
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .btn-uic { 
            background: var(--uic-gradient); 
            color: white; 
            border: none;
            transition: transform 0.2s;
        }
        .btn-uic:hover { 
            transform: translateY(-2px); 
            color: white; 
            box-shadow: 0 4px 12px rgba(216, 27, 96, 0.3);
        }
        .card { 
            border: none; 
            border-radius: 15px; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.05); 
        }
        .nav-link.active { font-weight: 700; border-bottom: 2px solid white; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">🌸 UIC_PORTAL</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('students*') ? 'active' : '' }}" href="{{ route('students.index') }}">Student Directory</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<footer class="text-center py-4 mt-5 text-muted small">
    &copy; {{ date('Y') }} University of the Immaculate Conception. All Rights Reserved.
</footer>

</body>
</html>