<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome page</title>
</head>

<body>
    {{ $students }}
    <h2>This is welcome page</h2>
    Go to Student Form
    {{-- <a href="{{ url('/create/student') }}"></a> --}}
    <a href="{{ route('create') }}">Create Student</a>
</body>

</html>
