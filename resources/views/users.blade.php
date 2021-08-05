<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        th,td{
            padding: 3px;
            border:1px solid black;
        }
        tr.praetorian td, th{
            background: #eee;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>OCM ID</th>
            <th>Email</th>
            <th>User Type</th>
            <th>Room ID</th>
            <th>Room Name</th>
        </tr>
        @foreach ($users as $user)
        <tr @if($user->user_type=="praetorian") class="praetorian" @endif>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->ocm_id}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->user_type}}</td>
            <td>{{$user->room_id}}</td>
            <td>{{$user->room->name}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
