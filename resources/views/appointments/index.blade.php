@extends('layouts.app')

@section('title', 'Mijn afspraken')

@section('content')

@if (session('success'))
<div class="max-w-6xl mx-auto px-6 mb-6">
    <div class="rounded-lg border border-green-200 bg-green-50 p-4 text-green-700">
        {{ session('success') }}
    </div>
</div>
@endif
<section class="bg-slate-50 py-12">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-10">

            <div>
                <p class="text-sm font-semibold text-teal-600 uppercase tracking-wide mb-2">
                    Mijn afspraken
                </p>

                <h1 class="text-3xl md:text-4xl font-bold text-slate-900">
                    Mijn afspraken
                </h1>

                <p class="text-slate-600 mt-3 max-w-2xl">
                    Hier vindt u een overzicht van uw geplande afspraken.
                </p>
            </div>

            <a
                href="/diensten"
                class="inline-flex items-center justify-center bg-teal-600 text-white px-5 py-3 rounded-lg font-semibold hover:bg-teal-700 transition">
                + Nieuwe afspraak maken
            </a>

        </div>


        <!-- Afspraken -->
        <div>

            <h2 class="text-xl font-bold text-slate-900 mb-5">
                Uw afspraken
            </h2>

            @if ($appointments->isEmpty())

            <div class="bg-white border border-slate-200 rounded-2xl p-8 text-center">
                <p class="text-slate-600">
                    Je hebt nog geen afspraken.
                </p>

                <a
                    href="/diensten"
                    class="inline-block mt-4 text-teal-600 font-semibold hover:text-teal-700">
                    Bekijk onze diensten →
                </a>
            </div>

            @else

            <div class="space-y-4">

                @foreach ($appointments as $appointment)

                <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm">

                    <div class="flex flex-col lg:flex-row lg:items-center gap-6">

                        <!-- Service -->
                        <div class="flex-1">

                            <h3 class="text-lg font-bold text-slate-900">
                                {{ $appointment->service->name }}
                            </h3>

                            <p class="text-sm text-slate-500 mt-1">
                                {{ $appointment->service->description }}
                            </p>

                        </div>


                        <!-- Datum -->
                        <div class="min-w-32">

                            <p class="text-xs text-slate-500 mb-1">
                                Datum
                            </p>

                            <p class="font-semibold text-slate-900">
                                {{ \Carbon\Carbon::parse($appointment->appointment_date)->format('d-m-Y') }}
                            </p>

                        </div>


                        <!-- Tijd -->
                        <div class="min-w-24">

                            <p class="text-xs text-slate-500 mb-1">
                                Tijd
                            </p>

                            <p class="font-semibold text-slate-900">
                                {{ \Carbon\Carbon::parse($appointment->appointment_time)->format('H:i') }}
                            </p>

                        </div>


                        <!-- Status -->
                        <div>

                            <p class="text-xs text-slate-500 mb-2">
                                Status
                            </p>

                            @if ($appointment->status === 'confirmed')

                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-green-50 text-green-700">
                                Bevestigd
                            </span>

                            @elseif ($appointment->status === 'pending')

                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-yellow-50 text-yellow-700">
                                In behandeling
                            </span>

                            @else

                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-red-50 text-red-700">
                                Geannuleerd
                            </span>

                            @endif

                        </div>
                        <div>
                            <p class="text-xs text-slate-500 mb-2">
                                Acties
                            </p>

                            @if ($appointment->status !== 'cancelled')
                            <form
                                method="POST"
                                action="{{ route('appointments.cancel', $appointment) }}">
                                @csrf
                                @method('PATCH')

                                <button
                                    type="submit"
                                    class="text-sm font-semibold text-red-600 hover:text-red-700">
                                    Annuleren
                                </button>
                            </form>
                            @endif
                        </div>


                    </div>

                </div>

                @endforeach

            </div>

            @endif

        </div>

    </div>
</section>

@endsection