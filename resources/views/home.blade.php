@extends('layouts.app')

@section('content')

    <div class="bg-white">
        <!-- Header -->
        <header class="absolute inset-x-0 top-0 z-50">
            <x-nav/>
            {{--            <x-mobilenav/>--}}
            {{--            <x-home-cta/>--}}
            <!-- Mobile menu, show/hide based on menu open state. -->

        </header>


        <main class="isolate">
            {{--            <section class="w-full h-screen bg-center bg-cover bg-cleaning"></section>--}}
            <!-- Hero section -->
            <x-home-cta/>

            <!-- Services Section -->
            <x-services/>


            <!-- General Content Section -->
            <x-pricing/>

            <!-- General Content Section -->
            <x-home-content/>

        </main>

        <x-footer/>
    </div>
    </div>

@endsection
