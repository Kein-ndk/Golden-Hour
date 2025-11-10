<!DOCTYPE html>
<html>
<head>
    <title>Session Data</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    <h2>Session Data</h2>
    <table class="table table-bordered">
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        @foreach($sessionData as $key => $value)
            <tr>
                <td>{{ $key }}</td>
                <td>
                    @if(is_array($value) || is_object($value))
                        <pre>{{ json_encode($value, JSON_PRETTY_PRINT) }}</pre>
                    @else
                        {{ $value }}
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('customer.dashboard') }}">Back to Dashboard</a>
</div>
</body>
</html>
