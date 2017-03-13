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

        <title>Register</title>

        <!-- Fonts -->
     
    </head>
    <body style="padding: 80px;">
       <div class="col-md-4 col-md-offset-4" >
            <div class="panel panel-primary">
                <div class="panel-heading">
                <h3 style="font-size: 20px;"><span class="fa fa-book fa-fw"></span> Registration Form</h3>
                </div>
                <div class="panel-body">
                    @if(Session::has('info'))
                        <div class="alert alert-success">
                            {{Session::get('info')}}
                        </div>
                    @endif
                <form action="{{route('check_reg')}}" method="POST">
                    <div class="form-group {{$errors->has('username') ? 'has-error' : ''}}">
                        <label>User Name</label>
                        <input type="text" name="username" class="form-control">
                        @if ($errors->has('username'))
                            <span class="help-block">{{$errors->first('username')}}</span>
                        @endif
                    </div>
                    <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                         @if ($errors->has('email'))
                            <span class="help-block">{{$errors->first('email')}}</span>
                        @endif
                    </div>
                    <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                     @if ($errors->has('password'))
                            <span class="help-block">{{$errors->first('password')}}</span>
                        @endif
                    </div>
                    <div class="form-group {{$errors->has('repeat_password') ? 'has-error' : ''}}">
                        <label>Repeat Password</label>
                        <input type="password" name="repeat_password" class="form-control">
                     @if ($errors->has('repeat_password'))
                            <span class="help-block">{{$errors->first('repeat_password')}}</span>
                        @endif
                    </div>
                    
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{Route('login')}}" style="color: gray">Proceed to Login </a>
                </form>
                </div>
            </div>
        </div>
    </body>

        <!--Script-->
        <script type="text/javascript" src="{{('vendor/jquery/jquery.js')}}"></script>
        <script type="text/javascript" src="{{('vendor/jquery/jquery.min.js')}}"></script>

</html>
