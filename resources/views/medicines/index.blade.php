<!DOCTYPE html>
<html>
<head>
    <title>My Medicine List</title>
</head>
<body>
    <h1>My Medicine List</h1>
    <p>Prepared by: Renan James Z. Miranda | 2023-70705</p>
 
    <table border="1" cellpadding="8">
        <tr>
            <th>Name</th>
            <th>Stock</th>
            <th>Expiry Date</th>
        </tr>
 
        @foreach ($medicines as $medicine)
            <tr>
              <td>
                    <a href="{{ url('/medicines/' . $medicine['id']) }}"> 
                {{ $medicine['name'] }}
                    </a>
            </td>
                <td>{{ $medicine['stock'] }}</td>
                <td>{{ $medicine['expiry_date'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>