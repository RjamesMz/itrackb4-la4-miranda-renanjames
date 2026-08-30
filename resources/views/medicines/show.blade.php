<!DOCTYPE html>
<html> 
    <head>
        <title>{{ $medicine['name'] }}</title>
    </head>
    <body>
        <h2>Renan James Z. Miranda | 2023-70705</h2>
        <h1>Medicine Name: {{ $medicine['name'] }}</h1>

        <p>Stock: {{ $medicine['stock'] }}</p>
        <p>Expiry Date: {{ $medicine['expiry_date'] }}</p>
        <p>Type: {{ $medicine['type'] }}</p>
        <p>Available: {{ $medicine['is_available'] }}</p>
        <a href="/medicines">Go Back</a>
       
    </body>
</html>
