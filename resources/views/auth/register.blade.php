@extends('layouts.app')

@section('title', 'Registreren')

@section('content')


<div class="min-h-screen bg-gray-100 flex items-center justify-center px-4">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">

        <h1 class="text-2xl font-bold text-center text-gray-900 mb-6">
            Registreren
        </h1>

        <form method="POST" action="{{ route('register.store') }}" class="space-y-5">
    @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">
                    Naam
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none"
                >
                @error('name')
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
@enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                    E-mailadres
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none"
                >
                @error('email')
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
@enderror
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                    Wachtwoord
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none"
                >
                 @error('password')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">
                    Bevestig wachtwoord
                </label>

                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none"
                >
            </div>

            <button
                type="submit"
                class="w-full rounded-lg bg-blue-600 py-2.5 font-semibold text-white hover:bg-blue-700 transition"
            >
                Registreren
            </button>

        </form>

    </div>
</div>

@endsection
