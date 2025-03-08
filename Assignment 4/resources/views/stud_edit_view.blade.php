<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
        <table border=1>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Edit</td>
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
                    <a href="edit/{{ $user->id }}">Edit</a>
                </td>
            </tr>
            @endforeach
        </table>
</body>
</html>