<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Coxwell ">
    <title>Coxwell - Admin Login </title>
    
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('zeus/images/logo.png')}}">
    <link rel="stylesheet" href="{{asset('zeus/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('zeus/css/style.css')}}">
    <link href="{{asset('zeus/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('zeus/css/owl.theme.default.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('zeus/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('zeus/css/themify-icons.css')}}">
    <link href="{{asset('zeus/css/ionicons.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('zeus/css/et-line.css')}}" rel="stylesheet"/>
    <link href="{{asset('zeus/css/feather.css')}}" rel="stylesheet"/>
    <link href="{{asset('zeus/css/flag-icon.min.css')}}" rel="stylesheet"/>
    <script src="{{asset('zeus/js/modernizr-2.8.3.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('zeus/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{asset('zeus/css/slicknav.min.css')}}">
    <link rel="stylesheet" href="{{asset('zeus/vendors/am-charts/css/am-charts.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('zeus/vendors/charts/morris-bundle/morris.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Overpass:100,200,300,400,600,700,800,900&display=swap" rel="stylesheet">

</head>
<body>


    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="register-bg">
                    <div class="login-overlay"></div>
                    <div class="login-left">
                        <img src="{{asset('assets/img/logo/logo1.png')}}" alt="Logo">
                        <br>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tellus elit.</p> --}}
                        <a href="javascript:void(0);" class="btn btn-danger">Learn More</a>
                    </div><!--login-left-->
                </div><!--login-bg-->

                <div class="login-form">
                    <form method="POST" action="{{route('admin.authenticate')}}">
                        @csrf
                        {{-- error message --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {{-- success message --}}
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        {{-- error message --}}
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="login-form-body">
                           
                            <div class="form-gp">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" id="exampleInputEmail1">
                                <i class="ti-email"></i>
                            </div>
                            <div class="form-gp">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" id="exampleInputPassword1">
                                <i class="ti-lock"></i>
                            </div>
                            <div class="submit-btn-area">
                                <button id="form_submit" class="btn btn-danger" type="submit">Login <i class="ti-arrow-right"></i></button>
                            </div>
                            
                            <hr>

                            <p class="text-muted">Social Media Login</p>
                            <a href="{{ route('socialite.github') }}" role="button" class="btn btn-outline-primary btn-lg mr-3"><i class="fa fa-github"></i></a>
                            <a href="{{ route('socialite.twitter') }}" role="button" class="btn btn-outline-primary btn-lg"><i class="fa fa-twitter"></i></a>
                            <a href="{{ route('socialite.google') }}" role="button" class="btn btn-outline-primary btn-lg"><i class="fa fa-google"></i></a>
                            

                        </div>
                    </form>
                </div><!--login-form-->

            </div><!--row-->
        </div><!--container-fluid-->
    </div><!--wrapper-->


<script src="{{asset('zeus/js/jquery.min.js')}}"></script>
<script src="{{asset('zeus/js/popper.min.js')}}"></script>
<script src="{{asset('zeus/js/bootstrap.min.js')}}"></script>
<script src="{{asset('zeus/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('zeus/js/metisMenu.min.js')}}"></script>
<script src="{{asset('zeus/js/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('zeus/js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('zeus/vendors/am-charts/js/ammap.js')}}"></script>
<script src="{{asset('zeus/vendors/am-charts/js/worldLow.js')}}"></script>
<script src="{{asset('zeus/vendors/am-charts/js/continentsLow.js')}}"></script>
<script src="{{asset('zeus/vendors/am-charts/js/light.js')}}"></script>
<script src="{{asset('zeus/js/am-maps.js')}}"></script>
<script src="{{asset('zeus/vendors/charts/float-bundle/jquery.flot.js')}}"></script>
<script src="{{asset('zeus/vendors/charts/float-bundle/jquery.flot.pie.js')}}"></script>
<script src="{{asset('zeus/vendors/charts/float-bundle/jquery.flot.resize.js')}}"></script>
<script src="{{asset('zeus/vendors/charts/sparkline/easy-pie-chart.js')}}"></script>
<script src="{{asset('zeus/vendors/charts/sparkline/sparklines.js')}}"></script>
<script src="{{asset('zeus/vendors/apex/js/apexcharts.min.js')}}"></script>
<script src="{{asset('zeus/js/home.js')}}"></script>
<script src="{{asset('zeus/js/main.js')}}"></script>


</body>
</html>