@auth
@extends('template.loggedin')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>User</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
        <style>
            #headinguser{
                position: absolute;
                z-index: 100;
                margin-top: 50px;
                margin-left: 700px;
                font-family: 'Josefin Sans', sans-serif;
                font-size: 25px;
                color: blue;
            }
            #user{
                position: absolute;
                margin-top: 150px;
                margin-left: 430px;
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
            #userlogo{
                position: absolute;
                z-index: 100;
                margin-top: 100px;
                margin-left: 725px;
                width: 100px;
                height: 100px;
            }
            #fullname,#username,#password,#address,#phone,#age,#birth{
                font-family: 'Josefin Sans', sans-serif;
                font-size: 20px;
            }
            </style>
    </head>
    <body>
        <div id="headinguser">
            User Page
        </div>
        @foreach ($user as $datauser)
            @if (Session::get('usersession')['username']==$datauser->Username)
                <div class="card" id="user">
                    <img src="{{asset('hitchhiker.jpg')}}" class="card-img-top" alt="..." style="width: 42rem;height: 20rem;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col" style="width: 20rem">
                                <div id="fullname">
                                    Fullname: {{$datauser->Fullname}}
                                </div>
                                <div id="username">
                                    Username: {{$datauser->Username}}
                                </div>
                                <div id="address">
                                    Address: {{$datauser->address}}
                                </div>
                            </div>
                            <div class="col" style="width: 20rem">
                                <div id="phone">
                                    Phone Number: {{$datauser->phone}}
                                </div>
                                <div id="age">
                                    Age: {{$datauser->age}}
                                </div>
                                <div id="birth">
                                    Birth date: {{$datauser->birth}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="/logout" method="GET">
                        <input type="submit" class="btn btn-danger" style="width: 200px; margin-left: 230px;" value="Log Out">
                    </form>
                    <br>
                </div>
                @endif
        @endforeach
    </body>
    </html>
@endauth

