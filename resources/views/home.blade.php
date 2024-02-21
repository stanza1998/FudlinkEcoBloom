<x-app-layout>
    <x-slot name="style">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    </x-slot>
    <section class="hero">
        <div class="hero-inner">
            <h1 class="m-0">Well come to our online platform</h1>
            <h3>
                <span>Discover</span>
                <span>sustainable</span>
                <span>comfort</span>
                <span>and</span>
                <span>style</span>
                <span>with</span>
                <span>our</span>
                <span>eco-friendly</span>
                <span>home</span>
                <span>goods</span>
                <span>collection.</span>
                <span>Embrace</span>
                <span>green</span>
                <span>living</span>
                <span>without</span>
                <span>compromising</span>
                <span>on</span>
                <span>quality</span>
                <span>or</span>
                <span>design</span>
            </h3>
            {{-- <a class="home-button" href="{{ route('shop') }}">Shop Now</a> --}}
        </div>
    </section>
    <section class="categories _container" style="margin-top:20px;">
        <h2 style="font-family: 'Roboto', sans-serif;">Product Categories</h2>
        <div class="home-grid">
            @each('components.category', $categories, 'cate')
        </div>
    </section>
</x-app-layout>
