<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Sass-->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/app.css')}}">
        <!--Bootrap CSS-->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/bootstrap/css/bootstrap.css')}}">
        <!--Social-->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/bootstrap-social/bootstrap-social.css')}}">
        <!-- Font -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/font-awesome/css/font-awesome.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/font-awesome/css/font-awesome.css')}}">

        <title>Login</title>

        <!-- Fonts -->
     
    </head>
    <body style="padding: 100px;">
       <div class="col-md-4 col-md-offset-4" >
            <div class="panel panel-primary">
                <div class="panel-heading">
                <h3 style="font-size: 20px;"><span class="fa fa-lock fa-fw"></span>Log In</h3>
                </div>
                <div class="panel-body">
                <form action="{{route('gologin')}}" method="POST">
                    <div class="form-group {{$errors->has('username') ? 'has-error' : ''}}">
                        <label>User Name</label>
                        <input type="text" name="username" class="form-control">
                    @if($errors->has('username'))
                        <span class="help help-block">{{$errors->first('username')}}</span>
                    @endif
                    </div>
                    <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    @if($errors->has('password'))
                        <span class="help help-block">{{$errors->first('password')}}</span>
                    @endif
                    </div>
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="{{Route('register')}}" style="color: gray">Register</a>
                </form>
                </div>
            </div>
        </div>
    </body>

        <!--Script-->
        <script type="text/javascript" src="{{('vendor/jquery/jquery.js')}}"></script>
        <script type="text/javascript" src="{{('vendor/jquery/jquery.min.js')}}"></script>

</html>
