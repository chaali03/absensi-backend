<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Absensi</title>
</head>
<body>
    <h1>Data Absensi</h1>
    <ul>
        @foreach ($attendances as $attendance)
            <li>User ID: {{ $attendance->user_id }}, Check-in: {{ $attendance->check_in }}</li>
        @endforeach
    </ul>
</body>
</html>
