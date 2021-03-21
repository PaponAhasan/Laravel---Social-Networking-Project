<!DOCTYPE html>
<html>
<head>
    <title>Bubt Family login and signup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" href="{{asset('frontend/images/fav.png')}}" type="image/png" sizes="16x16">
</head>
<style>
    body{
         overflow-x: hidden;
         background-color: #21283B;
    }
    #centered1{
        position: absolute;
        font-size: 10vw;
        top: 30%;
        left: 30%;
        transform: translate(-50%, -50%);
    }
    #centered2{
        position: absolute;
        font-size: 10vw;
        top: 50%;
        left: 40%;
        transform: translate(-50%, -50%);
    }
    #centered3{
        position: absolute;
        font-size: 10vw;
        top: 70%;
        left: 30%;
        transform: translate(-50%, -50%);
    }
    #signup{
        width: 60%;
        border-radius: 30px;
    }
    #login{
        width: 60%;
        background-color: #fff;
        border: 1px solid #1da1f2;
        color: #1da1f2;
        border-radius: 30px;
    }
    #login:hover{
        width: 60%;
        background-color: #fff;
        color: #1da1f2;
        border: 2px solid #1da1f2;
        border-radius: 30px;
    }
    .well{
        background-color: #21283B;
    }
    h1 {
       padding-bottom: 25px;
     }

</style>
<body>

    <div class="row">

        {{-- <header>
            <center><h1 style="color: white;"> <img src="{{asset('frontend/images\logo_bubt.png')}}" alt="" width="100" height="100"></h1></center>
        </header> --}}
        
        <div class="col-sm-7" style="left:0.0%;">
            <img src="images/background.png" class="img-rounded" title="Bubt Family" width="650px" height="655px">
            <div id="centered1" class="centered"><h3 style="color:white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Follow Your Interests.</strong></h3></div>
            <div id="centered2" class="centered"><h3 style="color:white;"><span class="glyphicon glyphicon-user"></span>&nbsp&nbsp<strong>Hear what People are talking about.</strong></h3></div>
            <div id="centered3" class="centered"><h3 style="color:white;"><span class="glyphicon glyphicon-envelope"></span>&nbsp&nbsp<strong>Join the Conversation.</strong></h3></div>
        </div>
        <div class="col-sm-5" style="left:8%:">
            <h1 style="color: white;"> <img src="{{asset('frontend/images\logo_bubt.png')}}" alt="" width="200" height="200"></h1>
            {{-- <img src="images/bubt_logo.png" class="img-rounded" title="Coding cafe" width="400px" height="80px"> --}}
            <h2 style="color:white; font-family: Open Sans;" ><strong>See what's happening in <br> the world right now</strong></h2><br><br>
            <h4 style="color:white; font-family: Open Sans;"><strong>Join Bubt Family Today.</strong></h4>
            <form method="post" action="">

                <a href="{{url('register')}}" id="signup" class="btn btn-info btn-lg" name="signup">Sign up</a><br><br>
               
                <a href="{{url('login')}}" id="login" class="btn btn-info btn-lg" name="login">Login</a><br><br>
               
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>