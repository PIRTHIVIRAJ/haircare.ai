<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'HairCare.ai - Evidence-Based Hair Health')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* Fallback/Direct CSS if Vite not built yet for preview */
            @import url('{{ asset("css/app.css") }}');
        </style>
    @endif
</head>
<body>
    <header class="navbar">
        <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
            <a href="{{ url('/') }}" class="navbar-brand">HairCare.ai</a>
            <nav>
                <ul class="navbar-nav">
                    <li><a href="{{ url('/conditions') }}" class="nav-link">Conditions</a></li>
                    <li><a href="{{ url('/treatments') }}" class="nav-link">Treatments</a></li>
                    <li><a href="{{ url('/science') }}" class="nav-link">Hair Science</a></li>
                    <li><a href="{{ url('/about') }}" class="nav-link">About</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <div class="grid grid-cols-3">
                <div>
                    <h4 class="font-bold">HairCare.ai</h4>
                    <p class="text-sm text-muted">A neutral, evidence-based knowledge platform for hair health.</p>
                </div>
                <div>
                    <h4 class="font-bold">Knowledge</h4>
                    <ul style="list-style: none; padding: 0; font-size: 0.875rem;">
                        <li><a href="{{ url('/conditions') }}" style="color: var(--color-text-secondary); text-decoration: none;">Conditions</a></li>
                        <li><a href="{{ url('/treatments') }}" style="color: var(--color-text-secondary); text-decoration: none;">Treatments</a></li>
                        <li><a href="{{ url('/science') }}" style="color: var(--color-text-secondary); text-decoration: none;">Science</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold">About</h4>
                    <ul style="list-style: none; padding: 0; font-size: 0.875rem;">
                        <li><a href="{{ url('/about') }}" style="color: var(--color-text-secondary); text-decoration: none;">Methodology</a></li>
                        <li><a href="{{ url('/about#policy') }}" style="color: var(--color-text-secondary); text-decoration: none;">Editorial Policy</a></li>
                    </ul>
                </div>
            </div>

            <div class="disclaimer-box">
                <p><strong>Medical Disclaimer:</strong> The information on this website is for educational purposes only and does not constitute medical advice, diagnosis, or treatment. Always seek the advice of a physician or other qualified health provider with any questions you may have regarding a medical condition. Never disregard professional medical advice or delay in seeking it because of something you have read on this website.</p>
            </div>
            
            <div class="text-center text-sm text-muted" style="margin-top: var(--spacing-md);">
                &copy; {{ date('Y') }} HairCare.ai. Non-commercial. Evidence-first.
            </div>
        </div>
    </footer>
</body>
</html>
