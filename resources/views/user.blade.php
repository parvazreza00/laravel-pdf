<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<body>
    
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    @foreach($user as $use)
        <tr>
            <td>{{ $use->id }}</td>
            <td>{{ $use->name }}</td>
            <td>{{ $use->email }}</td>
        </tr>
    @endforeach
</table>

</body>
</html>