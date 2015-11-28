@extends('pages.template')

@section('content')
<header id="header" role="banner">
    <div class="main-nav">
        <div class="container">
            <div class="header-top">
                <!--div class="pull-right social-icons">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div-->
            </div>
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img class="img-responsive" src="{{asset('images/memoria.png')}}" alt="logo">
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="no-scroll " href="{{route('home')}}/#home">Home</a>
                        </li>
                        <li><a class="no-scroll" href="{{route('home')}}/#about">About</a>
                        </li>
                        <li><a href="{{route('home')}}/#event" class="no-scroll ">Schedule</a>
                        </li>
                        <li class="scroll active"><a href="{{route('register')}}">REGISTER</a>
                        </li>
                        <li><a href="{{route('team')}}" class="no-scroll ">Team</a>
                        </li>
                        <li><a href="{{route('home')}}/#contact" class="no-scroll ">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="home">
    <div id="main-slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            <div class="item active">
                <img class="img-responsive" src="{{asset('images/slider/cropbg.jpg')}}" alt="slider">
            </div>
        </div>
    </div>
</section>
<!--/#home-->
<section id="event">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div id="event-carousel" class="carousel slide" data-interval="false">
                    <h2 class="heading" style="margin-bottom:20px">REGISTRATION SUCCESS</h2>
                    <p style="font-size:1.2em">Thank you for your payment!</p>
                    <p style="font-size:1.2em">You shall receive your invitation card by the first week of January. </p>
                    <p style="font-size:1.2em">Your payment Id is <b>{{$id}}</b>. Please note the id for any future communications.</b></p>
                    <p style="font-size:1.2em">You can download the invloce <a style="color:#fff;text-decoration:underline" href="{{$url}}">here</a>. Also we have mailed you the invoice</p>
                    <p><br></p>


                </div>
            </div>
        </div>
    </div>
</section>

@endsection