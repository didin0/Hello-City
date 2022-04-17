@extends('app')

@section('title','About Us | ' . config('app.name'))

@section('content')
    <img class="my-12 rounded-full shadow-md" src={{asset('images/unirex.png')}} alt="logo dinosaur" width="250">
    
    <h2 class="text-gray-700">
        Build with <span class="text-pink-600">&hearts;</span> By Mehdi
    </h2>

    <p class="mt-5">
        <a class="text-indigo-400 hover:text-indigo-800 underline" href={{ route('app_home') }}>
            Revenir à la page d'accueil
        </a>
    </p>

@endsection