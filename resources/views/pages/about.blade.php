@extends('app')

@section('title','About Us | ' . config('app.name'))

@section('content')
    
    <p>Build with &hearts; By Mehdi</p>

    <p><a href={{ route('app_home') }}>Revenir à la page d'accueil</a></p>

@endsection