@extends('app')

@section('content')
    <img src={{asset('images/flag-france.png')}} alt="Drapeau de la france">
    <h1>Hello from Belgium</h1>
    <p>Il est actuellement {{date('H:i')}}.</p>

@endsection