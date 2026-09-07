

@extends('layouts.app')

@section('title', 'All Medicines')

@section('content')
   
    <table border="1" cellpadding="8">
        <tr>
            <th>Name</th>
            <th>Stock</th>
            <th>Expiry Date</th>
        </tr>
 
        @foreach ($medicines as $medicine)
            <tr>
                <td>
                    <a href="{{ route('medicine.show', $medicine['id']) }}"> 
                {{ $medicine['name'] }}
                    </a>
                 </td>
                <td>{{ $medicine['stock'] }}</td>
                <td>{{ $medicine['expiry_date'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection
