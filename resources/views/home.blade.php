@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100">
    <!-- Hero Section -->
    <div class="bg-blue-600 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-white sm:text-5xl md:text-6xl">
                    Welcome to HSE Management
                </h1>
                <p class="mt-3 max-w-md mx-auto text-xl text-blue-100 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Your comprehensive solution for Health, Safety, and Environment management
                </p>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Sites Card -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-all hover:scale-105">
                    <div class="p-6">
                        <div class="flex items-center justify-center w-12 h-12 bg-blue-100 rounded-full">
                            <img src="{{ asset('/icons/icons8-location-50.png') }}" alt="Sites" class="w-8 h-8">
                        </div>
                        <h3 class="mt-4 text-lg font-medium text-gray-900">Manage Sites</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Create and manage all your project sites efficiently
                        </p>
                        <div class="mt-6">
                            <a href="/sites" class="text-blue-600 hover:text-blue-500 font-medium">
                                View Sites →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Projects Card -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-all hover:scale-105">
                    <div class="p-6">
                        <div class="flex items-center justify-center w-12 h-12 bg-blue-100 rounded-full">
                            <img src="{{ asset('/icons/icons8-project-50.png') }}" alt="Projects" class="w-8 h-8">
                        </div>
                        <h3 class="mt-4 text-lg font-medium text-gray-900">Track Projects</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Monitor and manage all your HSE projects
                        </p>
                        <div class="mt-6">
                            <a href="/projets" class="text-blue-600 hover:text-blue-500 font-medium">
                                View Projects →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Incidents Card -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-all hover:scale-105">
                    <div class="p-6">
                        <div class="flex items-center justify-center w-12 h-12 bg-blue-100 rounded-full">
                            <img src="{{ asset('/icons/icons8-siren-50.png') }}" alt="Incidents" class="w-8 h-8">
                        </div>
                        <h3 class="mt-4 text-lg font-medium text-gray-900">Report Incidents</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Log and track safety incidents and near misses
                        </p>
                        <div class="mt-6">
                            <a href="/incidents" class="text-blue-600 hover:text-blue-500 font-medium">
                                View Incidents →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Status Message -->
    @if (session('status'))
    <div class="fixed bottom-0 right-0 m-4">
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('status') }}</span>
        </div>
    </div>
    @endif
@endsection
