<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeHub - HSE Management</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center">
                    <img src="{{ asset('11.png') }}" alt="SafeHub Logo" class="h-10">
                </div>
                <div class="flex items-center">
                    <a href="/login" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                        Log In →
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl">
                    SafeHub
                </h1>
                <p class="mt-4 text-xl text-blue-600">
                    Empowering HSE Excellence
                </p>
                <p class="mt-6 text-lg text-gray-600 max-w-2xl mx-auto">
                    Welcome to SafeHub, your ultimate resource for Health, Safety, and Environment (HSE) management. 
                    Our platform is dedicated to empowering organizations and individuals in achieving HSE excellence.
                </p>
                <div class="mt-8">
                    <a href="/register" class="bg-blue-600 text-white px-6 py-3 rounded-md text-lg font-medium hover:bg-blue-700">
                        Sign Up
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-3xl font-bold text-gray-900">What's Included</h2>
            </div>

            <div class="mt-10 space-y-10">
                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-gray-900">Introduction</h3>
                    <p class="text-gray-600">
                        Welcome to SafeHub, your ultimate resource for Health, Safety, and Environment (HSE) management. 
                        Our platform is designed to assist organizations and individuals in achieving and maintaining HSE excellence.
                    </p>
                </div>

                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-gray-900">Key Features</h3>
                    <ul class="space-y-4 text-gray-600">
                        <li>
                            <strong>Risk Assessment:</strong> Conduct thorough risk assessments and implement control measures
                        </li>
                        <li>
                            <strong>Incident Management:</strong> Streamline reporting and management of incidents
                        </li>
                        <li>
                            <strong>Safety Training:</strong> Access interactive training modules
                        </li>
                        <li>
                            <strong>Compliance Monitoring:</strong> Stay up-to-date with HSE regulations
                        </li>
                        <li>
                            <strong>Analytics & Reporting:</strong> Gain insights through comprehensive analytics
                        </li>
                        <li>
                            <strong>Collaboration:</strong> Foster a culture of safety and collaboration
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <img src="{{ asset('11.png') }}" alt="SafeHub Logo" class="h-10 mx-auto">
                <p class="mt-4 text-sm text-gray-500">
                    © 2023 YaneCode Digitale Labs Inc. All rights reserved.
                </p>
                <div class="mt-6 flex justify-center space-x-8">
                    <a href="#" class="text-sm text-gray-500 hover:text-gray-900">Privacy Policy</a>
                    <a href="#" class="text-sm text-gray-500 hover:text-gray-900">Changelog</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
