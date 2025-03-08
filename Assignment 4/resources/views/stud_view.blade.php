<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <a style="text-decoration: none" href="/insert">Create new</a>
    <br>
        <table border=1>
            <tr>
                <td>ID</td>
                <td>Name</td>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>
                    {{ $user->id }}
                </td>
                <td>
                    {{ $user->name }}
                </td>
                <td>
                <td><a href='delete/{{ $user->id }}'>Delete</a></td>
                </td>
            </tr>
            @endforeach
        </table>
</body>
</html>