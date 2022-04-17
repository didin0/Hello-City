@extends('app')

@section('content')
    <img class="rounded shadow-md h-32 mt-12" src={{asset('images/flag-france.png')}} alt="Drapeau de la france">
    <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Belgium</h1>
    <p class="text-lg text-gray-800">Il est actuellement {{date('H:i')}}.</p>

@endsection