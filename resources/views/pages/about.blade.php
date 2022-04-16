@extends('app')

@section('title','About Us | ' . config('app.name'))

@section('content')
    <img src="/images/unirex.png" alt="logo dinosaur" width="250">
    
    <p>Build with &hearts; By Mehdi</p>

    <p><a href={{ route('app_home') }}>Revenir à la page d'accueil</a></p>

@endsection