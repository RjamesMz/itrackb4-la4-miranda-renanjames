
<!DOCTYPE html>
<html>
<head>
    <title>My Medicine List</title>
</head>
<body>
    <h1>My Medicine List</h1>
    <p>Prepared by: Renan James Z. Miranda | 2023-70705</p>

    
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
        @foreach ($medicines as $medicine)
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
        @endforeach
    </table>
</body>
</html>

