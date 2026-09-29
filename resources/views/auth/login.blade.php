@extends('layouts.app')

@section('title', 'Inloggen')

@section('content')
    <div class="min-h-screen bg-gray-100 flex items-center justify-center px-4">
        <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">

            <h1 class="text-2xl font-bold text-gray-900 text-center mb-2">
                Inloggen
            </h1>

            <p class="text-gray-500 text-center mb-8">
                Log in op je account
            </p>

            <form method="POST" action="{{ route('login.store') }}" class="space-y-5">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                        E-mailadres
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        class="w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500"
                    >

                    @error('email')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
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
                        required
                        class="w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500"
                    >

                    @error('password')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="w-full bg-blue-600 text-white py-2.5 rounded-lg font-semibold hover:bg-blue-700 transition"
                >
                    Inloggen
                </button>
            </form>

            <p class="text-center text-sm text-gray-600 mt-6">
                Nog geen account?
                <a href="{{ route('register') }}" class="text-blue-600 hover:underline">
                    Registreren
                </a>
            </p>

        </div>
    </div>
@endsection