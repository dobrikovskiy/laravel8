<!DOCTYPE html>
<html>
<head>
    <title>Logs</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Time</th>
                <th>Duration</th>
                <th>IP</th>
                <th>URL</th>
                <th>Method</th>
                <th>Input</th>
            </tr>
        </thead>
        <tbody>
            @foreach($logs as $log)
            <tr>
                <td>{{ $log->id }}</td>
                <td>{{ $log->time }}</td>
                <td>{{ $log->duration }}</td>
                <td>{{ $log->ip }}</td>
                <td>{{ $log->url }}</td>
                <td>{{ $log->method }}</td>
                <td>{{ $log->input }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>