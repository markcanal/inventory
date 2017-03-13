<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Study Of Web Application with Bootstrap</title>

    <link rel="shortcut icon" href="{{ URL::asset('img/favicon.ico?v=2') }}" type="image/x-icon">
    <link rel="icon" href="{{ URL::asset('img/favicon.ico?v=2') }}" type="image/x-icon">

     <!-- Bootstrap Core CSS -->
    <link href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{URL::asset('vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{URL::asset('dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{URL::asset('vendor/morrisjs/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{URL::asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">


    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/app.css')}}">

    @yield('jquery')
</head>

<body>
<div id="wrapper">
    <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><i class="fa fa-taxi"></i> TDS System ©</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                   
                    @if(Auth::guest())
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Login</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Register</a>
                        </li>
                    </ul>
                    @else
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    @endif
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
                    
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!--    <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            
                            </li> -->
                            <!-- /input-group -->

                            <li>
                            <a href=""><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                        <li>
                                <a href="#"><i class="fa fa-taxi fa-fw"></i> Dispatch<span class="fa arrow"></span></a>
                                 <ul class="nav nav-second-level">
                                <li>
                                    <a href="/dispatch">Dispatch</a>
                                </li>
                                <li>
                                    <a href="#">Payments</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                         <li>
                                <a href="#"><i class="fa fa-money fa-fw"></i> Accounts<span class="fa arrow"></span></a>
                                 <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Receivables</a>
                                </li>
                                <li>
                                    <a href="#">Dispatch Configuration</a>
                                </li>
                                <li>
                                    <a href="#">Item Limits</a>
                                </li>
                                <li>
                                    <a href="#">Account Limits</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-book fa-fw"></i> Reports<span class="fa arrow"></span></a>
                                 <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">Dispatch Summary</a>
                                    </li>
                                    <li>
                                        <a href="#">Dispatch Monthly</a>
                                    </li>
                                    <li>
                                        <a href="#">Unremitted Per Day</a>
                                    </li>
                                    <li>
                                        <a href="#">Unremitted Count</a>
                                    </li>
                                    <li>
                                        <a href="#">Bitin Summary</a>
                                    </li>
                                    <li>
                                        <a href="#">Collection Report</a>
                                    </li>
                                    <li>
                                        <a href="#">Salary and SSS</a>
                                    </li>
                                    <li>
                                        <a href="#">Account Summary</a>
                                    </li>
                                </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-gear fa-fw"></i> Maintenance<span class="fa arrow"></span></a>
                                 <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">Taxi Information</a>
                                    </li>
                                    <li>
                                        <a href="#">Taxi Boundary Settings</a>
                                    </li>
                                    <li>
                                        <a href="#">Employees</a>
                                    </li>
                                    <li>
                                        <a href="#">Department</a>
                                    </li>
                                    <li>
                                        <a href="#">Global Settings<span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Display Limit</a>
                                            </li>
                                            <li>
                                                <a href="#">Driver Rate</a>
                                            </li>
                                            <li>
                                                <a href="#">Unremitted Limit</a>
                                            </li>
                                            <li>
                                                <a href="#">Printer Name</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            <!-- /.nav-second-level -->
                        </li>


                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-header -->
        </nav>

        
    
            <!-- /.navbar-static-side -->
        <div id = "page-wrapper">
            @yield ('main_content')
        </div>
            <!-- /#page-wrapper -->
               
                <a href="" class="back-to-top" style="display: inline;"">
 
                <i class="fa fa-chevron-up"></i>
 
                </a>
               
           <div id="wrapper"> 
            <div class ="web-footer">
             <h4><p class="text-muted credit">Study about Laravel <small>2017</small><br><br><small><a href=""> ViralKnowledge™</a></small></p></h4>
            </div>
            </div>
</div>
        <!-- /#wrapper -->
 <!-- jQuery -->
    <script src="{{URL::asset('vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{URL::asset('vendor/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <!--<script src="{{URL::asset('vendor/raphael/raphael.min.js')}}"></script>-->
    <!--<script src="{{URL::asset('vendor/morrisjs/morris.min.js')}}"></script>-->
    <!--<script src="{{URL::asset('data/morris-data.js')}}"></script>-->
   
    <!-- Flot Charts JavaScript -->
    <script src="{{URL::asset('vendor/flot/excanvas.min.js')}}"></script>
    <script src="{{URL::asset('vendor/flot/jquery.flot.js')}}"></script>
    <script src="{{URL::asset('vendor/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{URL::asset('vendor/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{URL::asset('vendor/flot/jquery.flot.time.js')}}"></script>
    <script src="{{URL::asset('vendor/flot-tooltip/jquery.flot.tooltip.min.js')}}"></script>
<!--    <script src="{{URL::asset('data/flot-data.js')}}"></script> -->
    <!-- Custom Theme JavaScript -->
    <script src="{{URL::asset('dist/js/sb-admin-2.js')}}"></script>
    
    <script type="text/javascript">
    jQuery(document).ready(function() {
 
         var offset = 00;
         var duration = 700;
 
         jQuery(window).scroll(function() {

        if (jQuery(this).scrollTop() > offset) {
        jQuery('.back-to-top').fadeIn(duration);
        } else {
        jQuery('.back-to-top').fadeOut(duration);
        }
        });
 
 
 
        jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
        })
    });    
    </script>
    @yield('scripting')
</body>
</html>
