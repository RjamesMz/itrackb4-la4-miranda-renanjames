
@extends('layouts.app')

@section('title', $filter ?: 'All Medicines' )

@section('content')
    <table>
         @if ($filter)
        <p>Showing items filtered by: {{ $filter }}</p>
    @else
        <p>Showing all items.</p>
    @endif

     <table border="1">
        <tr>
            <th>Name</th>
            <th>Stock</th>
            <th>Expiry</th>
            <th>Type</th>
        </tr>
        @forelse ($medicines as $medicine)
            <tr>
                <td>
                    <a href="{{ route('medicine.show', $medicine['id']) }}"> 
                {{ $medicine['name'] }}
                    </a>
                 </td>
                <td>{{ $medicine['stock'] }}</td>
                <td>{{ $medicine['expiry_date'] }}</td>
                <td>{{ $medicine['type'] }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4">  
                    <b >No Medicine Found: {{ $filter }} </b>
                </td>
            </tr>
        
        @endforelse
    </table>
@endsection


