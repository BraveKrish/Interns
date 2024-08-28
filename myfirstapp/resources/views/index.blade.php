<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First App</title>
</head>

<body>
    {{-- {{ $students }} --}}
    {{-- {{ dd($students->toArray()) }} --}}
    <h2>Hello Laravel</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam adipisci quam similique omnis quas. Officia
        ullam, debitis minus consectetur praesentium deleniti esse!</p>


    <table border="2">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Faculty</th>
            <th>Action</th>
        </tr>

        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->faculty }}</td>
                <td>
                    <a href="{{ $student->id }}">edit</a>
                    <a href="{{ $student->id }}">delete</a>
                </td>

            </tr>
        @endforeach
    </table>
</body>

</html>
