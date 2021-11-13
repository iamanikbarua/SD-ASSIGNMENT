<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<style>
    a{
        text-decoration: none;
    }
</style>
<body>
    <div class='container'>
        <h1>Employee list</h1>

        <!-- @if(Session::has('msg'))
<div class="alert alert-danger">
    <strong>{{ Session:: get('msg') }}</strong>
</div>
@endif -->
        <!--   -->
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Birth date</th>
                <th>Salary</th>
                <th>Gender</th>
                <th>Address</th>
            </thead>
            <tbody>
                @if($employees)
                @foreach($employees as $e)
                <tr>
                    <td>{{$e->id}}</td>
                    <td>{{$e->name}}</td>
                    <td>{{$e->email}}</td>
                    <td>{{$e->birth_date}}</td>
                    <td>{{$e->salary}}</td>
                    <td>{{$e->gender}}</td>
                    <td>{{$e->address}}</td>
                    <td>
                        <!-- <a href="{{URL::to('/edit/'.$c->id)}}"class="btn btn-success btn-sm">Edit</a>
                        <a href="{{ URL::to('/delete/'.$c->id)}}"class="btn btn-danger btn-sm">Delete</a> -->
                    </td>
                </tr>
                @endforeach  
                @else 
                    <tr>
                        <td>No data found</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</body>
</html>