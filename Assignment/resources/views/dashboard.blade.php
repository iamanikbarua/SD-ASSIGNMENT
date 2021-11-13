<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div>
    <img src="https://puc.ac.bd/Content/assets/Image/puc.png" id="icon" alt="User Icon" />
        <h2>
            Dashboard
        </h2>
        <p>Hi, {{ session('username')}}</p>
        <p>Your Email is : {{ session('useremail')}}</p>
        <p>Your Role is: {{ session('userrole')}}</p> 

        @if(Session :: has('msg'))
        <p>{{Session :: get('msg')}}</p>
        @endif
    </div>
</body>
</html>