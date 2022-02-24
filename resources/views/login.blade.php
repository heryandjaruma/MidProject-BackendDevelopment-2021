<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <style>
        #headinglogin{
            position: fixed;
            z-index: 100;
            margin-top: 150px;
            margin-left: 745px;
            font-family: 'Josefin Sans', sans-serif;
            font-size: 25px;
            color: blue;
        }
        #login{
            position: absolute;
            margin-top: 250px;
            margin-left: 580px;
        }
        #loginlogo{
            position: fixed;
            z-index: 100;
            margin-top: 200px;
            margin-left: 730px;
            width: 100px;
            height: 100px;
        }
        #btn{
            margin: 20px 0px;
        }
        #nothaveaccount{
            text-decoration: none;
            font-family: 'Josefin Sans', sans-serif;
            font-size: 20px;
            color: blue;
        }
    </style>
</head>
<body>
    <div id="headinglogin">
        Login
    </div>
    <img src="{{asset('login.png')}}" alt="..." id="loginlogo">
    <div class="card" style="width: 25rem;" id="login">
        <div class="card-body">
            <br><br><br>
            <form action="/home" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div id="btn">
                    <input type="submit" class="btn btn-outline-primary" style="width: 23rem" value="Login">
                </div>
            </form>
            <a id="nothaveaccount" href="/signup">
                Not have account?
            </a>
            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $e)
                        {{$e}}.<br>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</body>
</html>
