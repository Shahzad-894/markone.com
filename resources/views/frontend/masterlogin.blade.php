<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mark1 | Home</title>

    <link href="{{ URL::asset('public/asset/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{ URL::asset('public/asset/css/bootstrap.css')}}" rel="stylesheet">

    <link href="{{ URL::asset('public/asset/css/jquery.smartmenus.bootstrap.css')}}" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/asset/css/jquery.simpleLens.css')}}">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/asset/css/slick.css')}}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/asset/css/nouislider.css')}}">
    <!-- Theme color -->
    <link id="switcher" href="{{ URL::asset('public/asset/css/theme-color/default-theme.css')}}" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="{{ URL::asset('public/asset/css/sequence-theme.modern-slide-in.css')}}" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="{{ URL::asset('public/asset/css/style.css')}}" rel="stylesheet">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>

<body>


    @yield ('content')



    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ URL::asset('public/asset/js/bootstrap.js')}}"></script>
    <!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src="{{ URL::asset('public/asset/js/jquery.smartmenus.js')}}"></script>
    <!-- SmartMenus jQuery Bootstrap Addon -->
    <script type="text/javascript" src="{{ URL::asset('public/asset/js/jquery.smartmenus.bootstrap.js')}}"></script>
    <!-- To Slider JS -->
    <script src="{{ URL::asset('public/asset/js/sequence.js')}}"></script>
    <script src="{{ URL::asset('public/asset/js/sequence-theme.modern-slide-in.js')}}"></script>
    <!-- Product view slider -->
    <script type="text/javascript" src="{{ URL::asset('public/asset/js/jquery.simpleGallery.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('public/asset/js/jquery.simpleLens.js')}}"></script>
    <!-- slick slider -->
    <script type="text/javascript" src="{{ URL::asset('public/asset/js/slick.js')}}"></script>
    <!-- Price picker slider -->
    <script type="text/javascript" src="{{ URL::asset('public/asset/js/nouislider.js')}}"></script>
    <!-- Custom js -->
    <script src="{{ URL::asset('public/asset/js/custom.js')}}"></script>

</body>

</html>