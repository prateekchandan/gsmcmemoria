<!DOCTYPE html>
<!--
	Aavishkaar
	Site Built By : Prateek Chandan
	www.prateekchandan.in
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="'Memoria', an event hosted by the GOSUMEC Alumni Association and the Core Committee of Aavishkaar 2016, will refresh you with an amazing evening filled with nostalgia and joy. ">
    <meta name="author" content="Prateek Chandan">
    <title>Memoria</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/main.css')}}" rel="stylesheet">
	<link href="{{asset('css/animate.css')}}" rel="stylesheet">	
	<link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="{{asset('js/html5shiv.js')}}"></script>
	    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{asset('images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>

	@yield('content')

    <footer id="footer">
        <div class="container">
            <div class="text-center">
                <p> Copyright  &copy;2016<a target="_blank" href="#"> aavishkaar </a>. All Rights Reserved. <br> Designed by <a target="_blank" href="http://prateekchandan.in/">Prateek</a> &amp; sponsored by Dr Atul and Pooja Vadgaonkar, Nasik</p>                
            </div>
        </div>
    </footer>
    <!--/#footer-->
  
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/smoothscroll.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.parallax.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/coundown-timer.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.scrollTo.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.nav.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>  
</body>
</html>