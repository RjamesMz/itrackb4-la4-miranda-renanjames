
@extends('layouts.app')

@section('title', $medicine['name'])

@section('content')

    <h3>Medicine Name: {{ $medicine['name'] }}</h3>

        <p>Stock: {{ $medicine['stock'] }}</p>
        <p>Expiry Date: {{ $medicine['expiry_date'] }}</p>
        <p>Type: {{ $medicine['type'] }}</p>
        <p>Available: {{ $medicine['is_available'] }}</p>
        <a href="{{ route('medicines.index') }}">Go Back</a>

@endsection
