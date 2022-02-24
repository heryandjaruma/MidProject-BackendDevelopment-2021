<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <style>
        #headingsignup{
            position: absolute;
            z-index: 100;
            margin-top: 50px;
            margin-left: 730px;
            font-family: 'Josefin Sans', sans-serif;
            font-size: 25px;
            color: blue;
        }
        #signup{
            position: absolute;
            margin-top: 150px;
            margin-left: 450px;
        }
        #btn{
            margin: 20px 0px;
            margin-left: 120px;
        }
        #nothaveaccount{
            text-decoration: none;
            font-family: 'Josefin Sans', sans-serif;
            font-size: 20px;
            color: blue;
            margin-left: 200px;
        }
        #signuplogo{
            position: absolute;
            z-index: 100;
            margin-top: 100px;
            margin-left: 725px;
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <div id="headingsignup">
        Sign Up
    </div>
    <img src="{{asset('login.png')}}" alt="..." id="signuplogo">
    <div class="card mb-5" id="signup">
        <div class="card-body">
            <br><br><br>
            <form action="/login" method="POST">
                @csrf
                <div class="row">
                    <div class="col" style="width: 20rem">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="fullname" placeholder="Fullname">
                            <label for="floatingInput">Fullname</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="confpass" placeholder="Confirm Password">
                            <label for="floatingPassword">Confirm Password</label>
                        </div>
                    </div>
                    <div class="col" style="width: 20rem">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="address" placeholder="Address">
                            <label for="floatingInput">Address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="phone" placeholder="Phone number">
                            <label for="floatingInput">Phone number</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="age" placeholder="Age">
                            <label for="floatingInput">Age</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" name="birth" placeholder="Birth Date">
                            <label for="floatingInput">Birth Date</label>
                        </div>
                    </div>
                </div>
                <div id="btn">
                    <input type="submit" class="btn btn-outline-primary" style="width: 23rem" value="Sign Up">
                </div>
            </form>
            <a id="nothaveaccount" href="/login">
                Already have account?
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
    <br><br><br>
</body>
</html>
