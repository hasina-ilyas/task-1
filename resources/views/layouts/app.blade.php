<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-white d-flex flex-column">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @isset($header)
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endisset

    <!-- Page Content -->
    <main class="flex-grow">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-light text-dark py-3">
        <div class="container text-center">
            <div class="d-flex justify-content-center align-items-center flex-column gap-4 py-4">
                <!-- Social Media Links -->
                <div class="d-flex gap-4">
                    <h5 class="mb-0">Follow Us</h5>
                    <a href="#" class="text-dark"><i class="bi bi-facebook"></i> Facebook</a>
                    <a href="#" class="text-dark"><i class="bi bi-twitter"></i> Twitter</a>
                    <a href="#" class="text-dark"><i class="bi bi-linkedin"></i> LinkedIn</a>
                </div>
                <!-- Copyright -->
                <div>
                    <p class="mb-0">&copy; 2024 Hasina Ilyas</p>
                    <p class="mb-0">All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Bootstrap JS Bundle (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
