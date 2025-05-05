<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Uji Puka</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @yield('styles')
</head>
<body>
    <!-- Header -->
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Uji Puka" height="40">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarMain">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                                <i class="fas fa-home me-1"></i> Kryefaqja
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                                <i class="fas fa-info-circle me-1"></i> Rreth nesh
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('services.*') ? 'active' : '' }}" href="{{ route('services.index') }}">
                                <i class="fas fa-water me-1"></i> Shërbimet
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('announcements.*') ? 'active' : '' }}" href="{{ route('announcements.index') }}">
                                <i class="fas fa-bullhorn me-1"></i> Njoftimet
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('contact.*') ? 'active' : '' }}" href="{{ route('contact.index') }}">
                                <i class="fas fa-envelope me-1"></i> Kontakt
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Rreth Uji Puka</h5>
                    <p>Furnizues kryesor i ujit të pijshëm në rajonin e Pukës. Angazhimi ynë është të sigurojmë ujë të pastër dhe cilësor për të gjithë komunitetin.</p>
                    <div class="social-icons mt-3">
                        <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Lidhje të shpejta</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}" class="text-light"><i class="fas fa-angle-right me-2"></i>Kryefaqja</a></li>
                        <li><a href="{{ route('about') }}" class="text-light"><i class="fas fa-angle-right me-2"></i>Rreth nesh</a></li>
                        <li><a href="{{ route('services.index') }}" class="text-light"><i class="fas fa-angle-right me-2"></i>Shërbimet</a></li>
                        <li><a href="{{ route('announcements.index') }}" class="text-light"><i class="fas fa-angle-right me-2"></i>Njoftimet</a></li>
                        <li><a href="{{ route('contact.index') }}" class="text-light"><i class="fas fa-angle-right me-2"></i>Kontakt</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Kontakt</h5>
                    <address class="mb-0">
                        <p><i class="fas fa-map-marker-alt me-2"></i> Rruga Kryesore, Pukë, Shqipëri</p>
                        <p><i class="fas fa-phone me-2"></i> +355 21 234 567</p>
                        <p><i class="fas fa-envelope me-2"></i> info@ujipuka.com</p>
                        <p><i class="fas fa-clock me-2"></i> E Hënë - E Premte: 08:00 - 16:00</p>
                    </address>
                </div>
            </div>
        </div>
    </footer>

    <div class="bg-primary text-white py-3">
        <div class="container text-center">
            <p class="mb-0">&copy; {{ date('Y') }} Uji Puka. Të gjitha të drejtat e rezervuara.</p>
        </div>
    </div>

    <!-- Bootstrap JS with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>
