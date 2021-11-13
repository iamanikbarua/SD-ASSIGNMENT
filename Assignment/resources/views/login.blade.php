<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{asset('CSS/style.css')}}">

</head>
    <body>
                    <div class="wrapper fadeInDown">
                <div id="formContent">
                    @if(Session::has('err_msg'))
                <div class="alert alert-danger" role="alert">
                This is a danger alert—check it out!
                    {{Session::get('err_msg')}}
                </div>
                @endif

                    <div class="fadeIn first">
                    <img src="https://puc.ac.bd/Content/assets/Image/puc.png" id="icon" alt="User Icon" />
                    <h1>Campus News</h1>
                    </div>
                
                   
                    <!-- Login Form -->
                    <form class = "form" action ="{{ URL ::to ('loginstore') }}" method = "post">
                    {{csrf_field()}}
                    <input type="email" id="login" class="fadeIn second" name="email" placeholder="Email"><br>
                    <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
                    <input type="submit" class="fadeIn fourth" value="Log In">
                    </form>

                    <!-- Remind Passowrd -->
                    <div id="formFooter">
                    <a class="underlineHover" href="https://puc.ac.bd/">Go to the Site</a>
                    </div>

                </div>
                </div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>